<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use PhpTui\Term\Actions;
use PhpTui\Term\Event;
use PhpTui\Term\Event\CharKeyEvent;
use PhpTui\Term\Event\CodedKeyEvent;
use PhpTui\Term\Event\TerminalResizedEvent;
use PhpTui\Term\KeyCode;
use PhpTui\Term\KeyModifiers;
use PhpTui\Term\Terminal;
use PhpTui\Tui\Color\AnsiColor;
use PhpTui\Tui\DisplayBuilder;
use PhpTui\Tui\Extension\Core\Widget\BlockWidget;
use PhpTui\Tui\Extension\Core\Widget\GridWidget;
use PhpTui\Tui\Extension\Core\Widget\List\ListItem;
use PhpTui\Tui\Extension\Core\Widget\List\ListState;
use PhpTui\Tui\Extension\Core\Widget\ListWidget;
use PhpTui\Tui\Extension\Core\Widget\Paragraph\Wrap;
use PhpTui\Tui\Extension\Core\Widget\ParagraphWidget;
use PhpTui\Tui\Layout\Constraint;
use PhpTui\Tui\Style\Modifier;
use PhpTui\Tui\Style\Style;
use PhpTui\Tui\Text\Line;
use PhpTui\Tui\Text\Span;
use PhpTui\Tui\Text\Text;
use PhpTui\Tui\Text\Title;
use PhpTui\Tui\Widget\Borders;
use PhpTui\Tui\Widget\BorderType;
use PhpTui\Tui\Widget\Direction;
use PhpTui\Tui\Widget\HorizontalAlignment;
use PhpTui\Tui\Widget\VerticalAlignment;
use PhpTui\Tui\Widget\Widget;

// ---------------------------------------------------------------------------
// Data classes
// ---------------------------------------------------------------------------

final class DictionaryEntry
{
    public string $slug = '';
    public string $filename = '';
    /** @var string[] */
    public array $anchors = [];
    public string $title = '';
    public string $shortDescription = '';
    public string $body = '';
    public string $codeExample = '';
    /** @var array{text: string, url: string}[] */
    public array $docLinks = [];
    /** @var array{text: string, url: string}[] */
    public array $seeAlsoLinks = [];
    /** @var array{text: string, slug: string}[] */
    public array $relatedTerms = [];
    /** @var array{text: string, url: string}[] */
    public array $relatedPackages = [];
}

// ---------------------------------------------------------------------------
// RST Parser
// ---------------------------------------------------------------------------

final class DictionaryParser
{
    public static function parse(string $filename): DictionaryEntry
    {
        $entry = new DictionaryEntry();
        $entry->filename = $filename;
        $entry->slug = basename($filename, '.ini.rst');

        $content = file_get_contents($filename);
        if ($content === false) {
            return $entry;
        }
        $lines = explode("\n", $content);

        foreach ($lines as $line) {
            if (preg_match('/^\.\. _([^:]+):\s*$/', trim($line), $m)) {
                $entry->anchors[] = $m[1];
            }
        }

        // Short description from .. meta:: :description:
        // Two formats: ":description: value" (same line) or ":description:\n\t\tvalue" (next line)
        for ($i = 0; $i < count($lines); $i++) {
            if (preg_match('/^\s+:description:\s+(.+)/', $lines[$i], $m)) {
                $desc = trim($m[1]);
                $j = $i + 1;
                while (isset($lines[$j]) && preg_match('/^\s{4,}(\S.*)/', $lines[$j], $cm)) {
                    $desc .= ' ' . trim($cm[1]);
                    $j++;
                }
                $entry->shortDescription = (string) preg_replace('/^[^:]+:\s*/', '', $desc);
                break;
            }
            if (preg_match('/^\s+:description:\s*$/', $lines[$i]) && isset($lines[$i + 1])) {
                $desc = trim($lines[$i + 1]);
                $j = $i + 2;
                while (isset($lines[$j]) && preg_match('/^\t\t(\S.*)/', $lines[$j], $cm)) {
                    $desc .= ' ' . trim($cm[1]);
                    $j++;
                }
                $entry->shortDescription = (string) preg_replace('/^[^:]+:\s*/', '', $desc);
                break;
            }
        }

        // Find title heading (line followed by -------)
        $bodyStart = 0;
        for ($i = 1; $i < count($lines); $i++) {
            $prev = trim($lines[$i - 1]);
            $curr = $lines[$i];
            if (
                $prev !== ''
                && preg_match('/^-{2,}$/', $curr)
                && strlen($curr) >= strlen($prev)
                && !str_starts_with($prev, '..')
                && !str_starts_with($prev, ':')
                && !str_starts_with($prev, '`')
                && !str_starts_with($prev, '<')
            ) {
                $entry->title = $prev;
                $bodyStart = $i + 1;
                break;
            }
        }

        if ($bodyStart === 0) {
            return $entry;
        }

        $bodyLines = [];
        $codeLines = [];
        $inRawHtml = false;
        $relatedLine = '';
        $relatedPackagesLine = '';

        $i = $bodyStart;
        while ($i < count($lines)) {
            $raw = $lines[$i];
            $trimmed = trim($raw);

            // Skip raw:: html blocks
            if (preg_match('/^\.\. raw:: html/', $trimmed)) {
                $inRawHtml = true;
                $i++;
                continue;
            }
            if ($inRawHtml) {
                if ($trimmed === '' && isset($lines[$i + 1]) && !preg_match('/^\s/', $lines[$i + 1])) {
                    $inRawHtml = false;
                } elseif ($trimmed !== '' && !preg_match('/^\s/', $raw)) {
                    $inRawHtml = false;
                }
                if ($inRawHtml) {
                    $i++;
                    continue;
                }
            }

            // Skip RST directives (.. meta::, .. _slug:, .. toctree::, etc.)
            if (preg_match('/^\.\. (meta|toctree|contents|index|_)/', $trimmed)) {
                $i++;
                continue;
            }
            // Skip directive options (:something: value indented)
            if (preg_match('/^\t:[a-z][a-z:_-]*:/', $raw)) {
                $i++;
                continue;
            }

            // Related: line
            if (preg_match('/^Related\s*:\s*(.+)/', $raw, $m)) {
                $relatedLine = $m[1];
                $i++;
                continue;
            }
            if (preg_match('/^Related packages\s*:\s*(.+)/', $raw, $m)) {
                $relatedPackagesLine = $m[1];
                $i++;
                continue;
            }

            // Code block
            if (preg_match('/^(\s*)\.\. code-block::/', $raw, $m)) {
                $codeIndent = strlen($m[1]) + 3;
                $i++;
                while ($i < count($lines) && trim($lines[$i]) === '') {
                    $i++;
                }
                while ($i < count($lines)) {
                    $codeLine = $lines[$i];
                    $lineIndent = strlen($codeLine) - strlen(ltrim($codeLine));
                    if ($codeLine !== '' && trim($codeLine) !== '' && $lineIndent < $codeIndent) {
                        break;
                    }
                    $codeLines[] = $codeLine === '' ? '' : substr($codeLine, min($codeIndent, strlen($codeLine)));
                    $i++;
                }
                while (!empty($codeLines) && trim(end($codeLines)) === '') {
                    array_pop($codeLines);
                }
                continue;
            }

            // Documentation links: `Text <url>`__
            if (preg_match('/^\s*`([^`<]+?)\s+<(https?:[^>]+)>`__/', $raw, $m)) {
                $entry->docLinks[] = ['text' => trim($m[1]), 'url' => $m[2]];
                $i++;
                continue;
            }

            // See also line
            if (preg_match('/^See also\s+(.+)/i', $trimmed, $m)) {
                preg_match_all('/`([^`<]+?)\s+<(https?:[^>]+)>`_/', $m[1], $matches, PREG_SET_ORDER);
                foreach ($matches as $match) {
                    $entry->seeAlsoLinks[] = ['text' => trim($match[1]), 'url' => $match[2]];
                }
                $i++;
                continue;
            }

            $bodyLines[] = self::cleanRst($raw);
            $i++;
        }

        if ($relatedLine) {
            preg_match_all('/:ref:`([^<`]+?)\s*<([^>]+)>`/', $relatedLine, $matches, PREG_SET_ORDER);
            foreach ($matches as $match) {
                $entry->relatedTerms[] = ['text' => trim($match[1]), 'slug' => trim($match[2])];
            }
        }

        if ($relatedPackagesLine) {
            preg_match_all('/`([^`<]+?)\s+<([^>]+)>`_/', $relatedPackagesLine, $matches, PREG_SET_ORDER);
            foreach ($matches as $match) {
                $entry->relatedPackages[] = ['text' => trim($match[1]), 'url' => $match[2]];
            }
        }

        $body = implode("\n", $bodyLines);
        $body = (string) preg_replace('/\n{3,}/', "\n\n", $body);
        $entry->body = trim($body);
        $entry->codeExample = implode("\n", $codeLines);

        return $entry;
    }

    public static function quickTitle(string $filename): string
    {
        $handle = fopen($filename, 'r');
        if ($handle === false) {
            return basename($filename, '.ini.rst');
        }
        $lines = [];
        $count = 0;
        while ($count < 100 && ($line = fgets($handle)) !== false) {
            $lines[] = rtrim($line);
            $count++;
        }
        fclose($handle);

        for ($i = 1; $i < count($lines); $i++) {
            $prev = trim($lines[$i - 1]);
            $curr = $lines[$i];
            if (
                $prev !== ''
                && preg_match('/^-{2,}$/', $curr)
                && strlen($curr) >= strlen($prev)
                && !str_starts_with($prev, '..')
                && !str_starts_with($prev, ':')
                && !str_starts_with($prev, '`')
            ) {
                return $prev;
            }
        }
        return ucfirst(str_replace(['-', '_'], ' ', basename($filename, '.ini.rst')));
    }

    private static function cleanRst(string $line): string
    {
        $line = (string) preg_replace('/:ref:`([^<`]+?)\s*<[^>]+>`/', '$1', $line);
        $line = (string) preg_replace('/`([^`<]+?)\s+<https?:[^>]+>`__/', '$1', $line);
        $line = (string) preg_replace('/`([^`<]+?)\s+<https?:[^>]+>`_/', '$1', $line);
        $line = (string) preg_replace('/``([^`]+)``/', '`$1`', $line);
        return $line;
    }
}

// ---------------------------------------------------------------------------
// TUI Application
// ---------------------------------------------------------------------------

final class App
{
    private string $mode = 'welcome';

    /** @var array<string, string> slug => title, sorted by title */
    private array $allEntries = [];

    /** @var array<string, string> filtered subset */
    private array $filteredEntries = [];

    private int $listSelected = 0;
    private int $listOffset = 0;

    private ?string $currentSlug = null;
    /** @var string[] */
    private array $history = [];
    private int $bodyScroll = 0;
    private int $focusArea = 0;  // 0=body 1=related 2=links
    private int $relatedSelected = 0;
    private int $linkSelected = 0;

    private string $searchQuery = '';

    /** @var array<string, DictionaryEntry> */
    private array $entryCache = [];

    /** @var array<string, string> slug => filepath */
    private array $slugToFile = [];

    private \PhpTui\Tui\Display\Display $display;
    private Terminal $terminal;

    public function __construct()
    {
        $this->terminal = Terminal::new();
        $this->display = DisplayBuilder::default()->build();
        $this->buildIndex();
    }

    private function buildIndex(): void
    {
        $dictDir = __DIR__ . '/dictionary';
        foreach (glob($dictDir . '/*.ini.rst') ?: [] as $file) {
            $slug = basename($file, '.ini.rst');
            $this->slugToFile[$slug] = $file;
        }
        foreach ($this->slugToFile as $slug => $file) {
            $this->allEntries[$slug] = DictionaryParser::quickTitle($file);
        }
        asort($this->allEntries);
        $this->filteredEntries = $this->allEntries;
    }

    private function entry(string $slug): ?DictionaryEntry
    {
        if (!isset($this->entryCache[$slug])) {
            if (!isset($this->slugToFile[$slug])) {
                return null;
            }
            $this->entryCache[$slug] = DictionaryParser::parse($this->slugToFile[$slug]);
        }
        return $this->entryCache[$slug];
    }

    public function openSlug(string $slug): void
    {
        if (isset($this->slugToFile[$slug])) {
            $this->open($slug);
        }
    }

    public function run(): void
    {
        $this->terminal->enableRawMode();
        $this->terminal->queue(
            Actions::alternateScreenEnable(),
            Actions::cursorHide(),
        )->flush();

        try {
            $this->loop();
        } finally {
            $this->terminal->queue(
                Actions::alternateScreenDisable(),
                Actions::cursorShow(),
            )->flush();
            $this->terminal->disableRawMode();
        }
    }

    private function loop(): void
    {
        while (true) {
            $this->render();
            $event = null;
            while ($event === null) {
                $event = $this->terminal->events()->next();
                if ($event === null) {
                    usleep(8000);
                }
            }
            if (!$this->dispatch($event)) {
                break;
            }
        }
    }

    // -----------------------------------------------------------------------
    // Event dispatch
    // -----------------------------------------------------------------------

    private function dispatch(Event $event): bool
    {
        if ($event instanceof CharKeyEvent) {
            if ($event->char === 'c' && ($event->modifiers & KeyModifiers::CONTROL) !== 0) {
                return false;
            }
            return $this->onChar($event->char);
        }
        if ($event instanceof CodedKeyEvent) {
            return $this->onKey($event->code);
        }
        return true;
    }

    private function onChar(string $char): bool
    {
        if ($this->mode === 'search') {
            $this->searchQuery .= $char;
            $this->applyFilter();
            return true;
        }
        return match ($char) {
            'q' => false,
            'j' => $this->scrollDown(),
            'k' => $this->scrollUp(),
            'J' => $this->scrollDown(5),
            'K' => $this->scrollUp(5),
            '/' => $this->startSearch(),
            'b' => $this->goBack(),
            default => true,
        };
    }

    private function onKey(KeyCode $code): bool
    {
        if ($this->mode === 'search') {
            return match ($code) {
                KeyCode::Esc       => $this->cancelSearch(),
                KeyCode::Backspace => $this->searchDelete(),
                KeyCode::Enter     => $this->confirmSearch(),
                KeyCode::Up        => $this->scrollUp(),
                KeyCode::Down      => $this->scrollDown(),
                default            => true,
            };
        }

        return match ($code) {
            KeyCode::Esc       => $this->handleEsc(),
            KeyCode::Up        => $this->scrollUp(),
            KeyCode::Down      => $this->scrollDown(),
            KeyCode::Left      => $this->navigateLeft(),
            KeyCode::Right     => $this->navigateRight(),
            KeyCode::Enter     => $this->handleEnter(),
            KeyCode::Tab       => $this->nextFocus(),
            KeyCode::BackTab   => $this->prevFocus(),
            KeyCode::Backspace => $this->goBack(),
            KeyCode::PageUp    => $this->scrollUp(10),
            KeyCode::PageDown  => $this->scrollDown(10),
            default            => true,
        };
    }

    // -----------------------------------------------------------------------
    // Navigation actions
    // -----------------------------------------------------------------------

    private function startSearch(): bool
    {
        $this->mode = 'search';
        $this->searchQuery = '';
        $this->filteredEntries = $this->allEntries;
        $this->listSelected = 0;
        $this->listOffset = 0;
        return true;
    }

    private function cancelSearch(): bool
    {
        $this->searchQuery = '';
        $this->filteredEntries = $this->allEntries;
        $this->mode = $this->currentSlug !== null ? 'entry' : 'welcome';
        return true;
    }

    private function searchDelete(): bool
    {
        if ($this->searchQuery !== '') {
            $this->searchQuery = mb_substr($this->searchQuery, 0, mb_strlen($this->searchQuery) - 1);
            $this->applyFilter();
        }
        return true;
    }

    private function confirmSearch(): bool
    {
        $slugs = array_keys($this->filteredEntries);
        if (isset($slugs[$this->listSelected])) {
            $this->open($slugs[$this->listSelected]);
        }
        return true;
    }

    private function applyFilter(): void
    {
        if ($this->searchQuery === '') {
            $this->filteredEntries = $this->allEntries;
        } else {
            $q = mb_strtolower($this->searchQuery);
            $this->filteredEntries = array_filter(
                $this->allEntries,
                function (string $title, string $slug) use ($q): bool {
                    return str_contains(mb_strtolower($title), $q)
                        || str_contains($slug, $q);
                },
                ARRAY_FILTER_USE_BOTH
            );
        }
        $this->listSelected = 0;
        $this->listOffset = 0;
    }

    private function open(string $slug): void
    {
        if ($this->currentSlug !== null) {
            $this->history[] = $this->currentSlug;
        }
        $this->currentSlug = $slug;
        $this->mode = 'entry';
        $this->bodyScroll = 0;
        $this->focusArea = 0;
        $this->relatedSelected = 0;
        $this->linkSelected = 0;
    }

    private function goBack(): bool
    {
        if ($this->mode === 'entry' && $this->history !== []) {
            $this->currentSlug = array_pop($this->history);
            $this->bodyScroll = 0;
            $this->focusArea = 0;
        } else {
            $this->currentSlug = null;
            $this->history = [];
            $this->mode = 'welcome';
        }
        return true;
    }

    private function handleEsc(): bool
    {
        if ($this->mode === 'search') {
            $this->cancelSearch();
        } elseif ($this->mode === 'entry') {
            $this->goBack();
        }
        return true;
    }

    private function handleEnter(): bool
    {
        if ($this->mode === 'welcome') {
            $slugs = array_keys($this->filteredEntries);
            if (isset($slugs[$this->listSelected])) {
                $this->open($slugs[$this->listSelected]);
            }
            return true;
        }
        if ($this->mode === 'entry' && $this->currentSlug !== null) {
            $e = $this->entry($this->currentSlug);
            if ($e !== null && $this->focusArea === 1 && isset($e->relatedTerms[$this->relatedSelected])) {
                $slug = $e->relatedTerms[$this->relatedSelected]['slug'];
                if (isset($this->slugToFile[$slug])) {
                    $this->open($slug);
                }
            }
        }
        return true;
    }

    private function scrollDown(int $n = 1): bool
    {
        if ($this->mode !== 'entry') {
            $max = max(0, count($this->filteredEntries) - 1);
            $this->listSelected = min($max, $this->listSelected + $n);
            return true;
        }
        if ($this->focusArea === 0) {
            $this->bodyScroll += $n;
        } elseif ($this->focusArea === 1 && $this->currentSlug !== null) {
            $e = $this->entry($this->currentSlug);
            if ($e !== null) {
                $this->relatedSelected = min(max(0, count($e->relatedTerms) - 1), $this->relatedSelected + $n);
            }
        } elseif ($this->focusArea === 2 && $this->currentSlug !== null) {
            $e = $this->entry($this->currentSlug);
            if ($e !== null) {
                $max = max(0, count($e->docLinks) + count($e->seeAlsoLinks) - 1);
                $this->linkSelected = min($max, $this->linkSelected + $n);
            }
        }
        return true;
    }

    private function scrollUp(int $n = 1): bool
    {
        if ($this->mode !== 'entry') {
            $this->listSelected = max(0, $this->listSelected - $n);
            return true;
        }
        if ($this->focusArea === 0) {
            $this->bodyScroll = max(0, $this->bodyScroll - $n);
        } elseif ($this->focusArea === 1) {
            $this->relatedSelected = max(0, $this->relatedSelected - $n);
        } elseif ($this->focusArea === 2) {
            $this->linkSelected = max(0, $this->linkSelected - $n);
        }
        return true;
    }

    private function navigateLeft(): bool
    {
        if ($this->focusArea === 1) {
            $this->relatedSelected = max(0, $this->relatedSelected - 1);
        } elseif ($this->focusArea === 2) {
            $this->linkSelected = max(0, $this->linkSelected - 1);
        }
        return true;
    }

    private function navigateRight(): bool
    {
        if ($this->focusArea === 1 && $this->currentSlug !== null) {
            $e = $this->entry($this->currentSlug);
            if ($e !== null) {
                $this->relatedSelected = min(max(0, count($e->relatedTerms) - 1), $this->relatedSelected + 1);
            }
        } elseif ($this->focusArea === 2 && $this->currentSlug !== null) {
            $e = $this->entry($this->currentSlug);
            if ($e !== null) {
                $max = max(0, count($e->docLinks) + count($e->seeAlsoLinks) - 1);
                $this->linkSelected = min($max, $this->linkSelected + 1);
            }
        }
        return true;
    }

    private function nextFocus(): bool
    {
        if ($this->mode === 'entry') {
            $this->focusArea = ($this->focusArea + 1) % 3;
        }
        return true;
    }

    private function prevFocus(): bool
    {
        if ($this->mode === 'entry') {
            $this->focusArea = ($this->focusArea + 2) % 3;
        }
        return true;
    }

    // -----------------------------------------------------------------------
    // Rendering
    // -----------------------------------------------------------------------

    private function render(): void
    {
        match ($this->mode) {
            'welcome' => $this->renderWelcome(),
            'search'  => $this->renderSearch(),
            'entry'   => $this->renderEntry(),
        };
    }

    private function renderWelcome(): void
    {
        $total = count($this->allEntries);
        $viewport = $this->display->viewportArea();
        $listHeight = max(1, $viewport->height - 6);
        $this->syncListOffset($listHeight);

        $header = BlockWidget::default()
            ->borders(Borders::ALL)
            ->borderType(BorderType::Rounded)
            ->borderStyle(Style::default()->fg(AnsiColor::Blue))
            ->titles(Title::fromLine(Line::fromSpans(
                Span::styled(' PHP', Style::default()->fg(AnsiColor::White)->bold()),
                Span::styled('Dictionary ', Style::default()->fg(AnsiColor::Cyan)->bold()),
            )))
            ->widget(ParagraphWidget::fromLines(Line::fromSpans(
                Span::styled(" {$total} entries  ", Style::default()->fg(AnsiColor::Green)),
                Span::styled('[/', Style::default()->fg(AnsiColor::DarkGray)),
                Span::styled('search', Style::default()->fg(AnsiColor::Yellow)),
                Span::styled(']  [', Style::default()->fg(AnsiColor::DarkGray)),
                Span::styled('Enter', Style::default()->fg(AnsiColor::Yellow)),
                Span::styled(':open]  [', Style::default()->fg(AnsiColor::DarkGray)),
                Span::styled('q', Style::default()->fg(AnsiColor::Yellow)),
                Span::styled(':quit]', Style::default()->fg(AnsiColor::DarkGray)),
            )));

        $list = $this->makeEntryList(
            Style::default()->bg(AnsiColor::Blue)->fg(AnsiColor::White)->bold()
        );

        $listBlock = BlockWidget::default()
            ->borders(Borders::ALL)
            ->borderType(BorderType::Rounded)
            ->borderStyle(Style::default()->fg(AnsiColor::DarkGray))
            ->titles(Title::fromLine(Line::fromSpans(
                Span::styled(' All entries ', Style::default()->fg(AnsiColor::White)),
            )))
            ->widget($list);

        $status = ParagraphWidget::fromLines(Line::fromSpans(
            Span::styled(' [j/k] Navigate', Style::default()->fg(AnsiColor::DarkGray)),
            Span::styled('  [Enter] Open', Style::default()->fg(AnsiColor::DarkGray)),
            Span::styled('  [/] Search', Style::default()->fg(AnsiColor::DarkGray)),
            Span::styled('  [q] Quit', Style::default()->fg(AnsiColor::DarkGray)),
        ));

        $this->display->draw(
            GridWidget::default()
                ->direction(Direction::Vertical)
                ->constraints(Constraint::length(4), Constraint::min(3), Constraint::length(1))
                ->widgets($header, $listBlock, $status)
        );
    }

    private function renderSearch(): void
    {
        $total = count($this->allEntries);
        $matched = count($this->filteredEntries);
        $viewport = $this->display->viewportArea();
        $listHeight = max(1, $viewport->height - 7);
        $this->syncListOffset($listHeight);

        $searchBlock = BlockWidget::default()
            ->borders(Borders::ALL)
            ->borderType(BorderType::Rounded)
            ->borderStyle(Style::default()->fg(AnsiColor::Yellow))
            ->titles(Title::fromLine(Line::fromSpans(
                Span::styled(' Search ', Style::default()->fg(AnsiColor::Yellow)->bold()),
            )))
            ->widget(ParagraphWidget::fromLines(Line::fromSpans(
                Span::styled(' > ', Style::default()->fg(AnsiColor::Yellow)->bold()),
                Span::styled($this->searchQuery, Style::default()->fg(AnsiColor::White)->bold()),
                Span::styled('_', Style::default()->fg(AnsiColor::Yellow)),
                Span::styled("  {$matched}/{$total}", Style::default()->fg(AnsiColor::DarkGray)),
            )));

        $resultsWidget = $matched === 0
            ? ParagraphWidget::fromLines(Line::fromSpans(
                Span::styled('  No matches', Style::default()->fg(AnsiColor::DarkGray)),
            ))
            : $this->makeEntryList(
                Style::default()->bg(AnsiColor::Yellow)->fg(AnsiColor::Black)->bold()
            );

        $resultsBlock = BlockWidget::default()
            ->borders(Borders::ALL)
            ->borderType(BorderType::Rounded)
            ->borderStyle(Style::default()->fg(AnsiColor::DarkGray))
            ->titles(Title::fromLine(Line::fromSpans(
                Span::styled(' Results ', Style::default()->fg(AnsiColor::White)),
            )))
            ->widget($resultsWidget);

        $status = ParagraphWidget::fromLines(Line::fromSpans(
            Span::styled(' [Esc] Cancel', Style::default()->fg(AnsiColor::DarkGray)),
            Span::styled('  [Enter] Open', Style::default()->fg(AnsiColor::DarkGray)),
            Span::styled('  [Backspace] Delete', Style::default()->fg(AnsiColor::DarkGray)),
        ));

        $this->display->draw(
            GridWidget::default()
                ->direction(Direction::Vertical)
                ->constraints(Constraint::length(3), Constraint::min(3), Constraint::length(1))
                ->widgets($searchBlock, $resultsBlock, $status)
        );
    }

    private function renderEntry(): void
    {
        if ($this->currentSlug === null) {
            $this->mode = 'welcome';
            $this->renderWelcome();
            return;
        }
        $e = $this->entry($this->currentSlug);
        if ($e === null) {
            $this->mode = 'welcome';
            $this->renderWelcome();
            return;
        }

        $sections = [];
        $sections[] = [Constraint::length(3), $this->makeHeader($e)];
        $sections[] = [Constraint::min(6), $this->makeBody($e)];

        if ($e->relatedTerms !== []) {
            $sections[] = [Constraint::length(3), $this->makeRelated($e)];
        }
        if ($e->anchors !== []) {
            $sections[] = [Constraint::length(3), $this->makeTags($e)];
        }
        $allLinks = array_merge($e->docLinks, $e->seeAlsoLinks);
        if ($allLinks !== []) {
            $sections[] = [Constraint::length(3), $this->makeLinks($e)];
        }
        if ($e->relatedPackages !== []) {
            $sections[] = [Constraint::length(3), $this->makePackages($e)];
        }
        $sections[] = [Constraint::length(1), $this->makeStatusBar()];

        $constraints = array_map(fn($s) => $s[0], $sections);
        $widgets = array_map(fn($s) => $s[1], $sections);

        $this->display->draw(
            GridWidget::default()
                ->direction(Direction::Vertical)
                ->constraints(...$constraints)
                ->widgets(...$widgets)
        );
    }

    // -----------------------------------------------------------------------
    // Widget builders
    // -----------------------------------------------------------------------

    private function syncListOffset(int $visibleHeight): void
    {
        if ($this->listSelected >= $this->listOffset + $visibleHeight) {
            $this->listOffset = $this->listSelected - $visibleHeight + 1;
        }
        if ($this->listSelected < $this->listOffset) {
            $this->listOffset = $this->listSelected;
        }
    }

    private function makeEntryList(Style $highlightStyle): Widget
    {
        $items = [];
        foreach ($this->filteredEntries as $slug => $title) {
            $items[] = ListItem::new(Text::fromLine(Line::fromSpans(
                Span::styled(" {$title}", Style::default()->fg(AnsiColor::White)),
                Span::styled("  {$slug}", Style::default()->fg(AnsiColor::DarkGray)),
            )));
        }

        return ListWidget::default()
            ->items(...$items)
            ->state(new ListState($this->listOffset, $this->listSelected))
            ->highlightStyle($highlightStyle)
            ->highlightSymbol('> ');
    }

    private function makeHeader(DictionaryEntry $e): Widget
    {
        return BlockWidget::default()
            ->borders(Borders::ALL)
            ->borderType(BorderType::Rounded)
            ->borderStyle(Style::default()->fg(AnsiColor::Blue))
            ->titles(
                Title::fromLine(Line::fromSpans(
                    Span::styled(' PHP Dictionary ', Style::default()->fg(AnsiColor::DarkGray)),
                )),
                Title::fromLine(Line::fromSpans(
                    Span::styled(" [{$e->slug}] ", Style::default()->fg(AnsiColor::DarkGray)),
                ))->horizontalAlignment(HorizontalAlignment::Right)
            )
            ->widget(ParagraphWidget::fromLines(
                Line::fromSpans(
                    Span::styled($e->title, Style::default()->fg(AnsiColor::White)->bold()),
                ),
            ));
    }

    private function makeBody(DictionaryEntry $e): Widget
    {
        $lines = [];
        $bodyText = $e->body !== '' ? $e->body : $e->shortDescription;

        foreach (explode("\n", $bodyText) as $lineText) {
            $lines[] = Line::fromSpans(...$this->spansWithHighlights($lineText, $e->relatedTerms));
        }

        if ($e->codeExample !== '') {
            $lines[] = Line::fromString('');
            $lines[] = Line::fromSpans(
                Span::styled('-- php', Style::default()->fg(AnsiColor::DarkGray)),
            );
            foreach (explode("\n", $e->codeExample) as $codeLine) {
                $lines[] = Line::fromSpans(
                    Span::styled($codeLine, Style::default()->fg(AnsiColor::LightGreen)),
                );
            }
        }

        $para = ParagraphWidget::fromText(Text::fromLines(...$lines))
            ->wrap(Wrap::Word);
        $para->scroll = [$this->bodyScroll, 0];

        $focused = $this->focusArea === 0;
        $borderStyle = $focused
            ? Style::default()->fg(AnsiColor::Cyan)
            : Style::default()->fg(AnsiColor::DarkGray);
        $hint = $focused ? ' [j/k] scroll  [Tab] next focus ' : ' [Tab] focus ';

        return BlockWidget::default()
            ->borders(Borders::ALL)
            ->borderType(BorderType::Rounded)
            ->borderStyle($borderStyle)
            ->titles(
                Title::fromLine(Line::fromSpans(
                    Span::styled(' Description ', Style::default()->fg(AnsiColor::White)),
                )),
                Title::fromLine(Line::fromSpans(
                    Span::styled($hint, Style::default()->fg(AnsiColor::DarkGray)),
                ))->horizontalAlignment(HorizontalAlignment::Right)
            )
            ->widget($para);
    }

    private function makeRelated(DictionaryEntry $e): Widget
    {
        $focused = $this->focusArea === 1;
        $borderStyle = $focused
            ? Style::default()->fg(AnsiColor::Cyan)
            : Style::default()->fg(AnsiColor::DarkGray);

        $spans = [Span::styled(' ', Style::default())];
        foreach ($e->relatedTerms as $i => $term) {
            if ($i > 0) {
                $spans[] = Span::styled('  ', Style::default()->fg(AnsiColor::DarkGray));
            }
            $isSelected = $focused && $i === $this->relatedSelected;
            $spans[] = $isSelected
                ? Span::styled("[{$term['text']}]", Style::default()->fg(AnsiColor::Black)->bg(AnsiColor::Cyan)->bold())
                : Span::styled($term['text'], Style::default()->fg(AnsiColor::Cyan));
        }

        $hint = $focused
            ? ' [←→] select  [Enter] open  [Tab] next '
            : ' [Tab] focus ';

        return BlockWidget::default()
            ->borders(Borders::ALL)
            ->borderType(BorderType::Rounded)
            ->borderStyle($borderStyle)
            ->titles(
                Title::fromLine(Line::fromSpans(
                    Span::styled(' Related ', Style::default()->fg(AnsiColor::White)),
                )),
                Title::fromLine(Line::fromSpans(
                    Span::styled($hint, Style::default()->fg(AnsiColor::DarkGray)),
                ))->horizontalAlignment(HorizontalAlignment::Right)
            )
            ->widget(ParagraphWidget::fromLines(
                Line::fromSpans(...$spans),
            ));
    }

    private function makeTags(DictionaryEntry $e): Widget
    {
        $spans = [Span::styled(' ', Style::default())];
        foreach ($e->anchors as $i => $anchor) {
            if ($i > 0) {
                $spans[] = Span::styled('  ', Style::default()->fg(AnsiColor::DarkGray));
            }
            $spans[] = Span::styled($anchor, Style::default()->fg(AnsiColor::LightMagenta));
        }

        return BlockWidget::default()
            ->borders(Borders::ALL)
            ->borderType(BorderType::Rounded)
            ->borderStyle(Style::default()->fg(AnsiColor::DarkGray))
            ->titles(Title::fromLine(Line::fromSpans(
                Span::styled(' Tags ', Style::default()->fg(AnsiColor::White)),
            )))
            ->widget(ParagraphWidget::fromLines(
                Line::fromSpans(...$spans),
            ));
    }

    private function makeLinks(DictionaryEntry $e): Widget
    {
        $focused = $this->focusArea === 2;
        $borderStyle = $focused
            ? Style::default()->fg(AnsiColor::Cyan)
            : Style::default()->fg(AnsiColor::DarkGray);

        $allLinks = array_merge($e->docLinks, $e->seeAlsoLinks);
        $spans = [Span::styled(' ', Style::default())];
        foreach ($allLinks as $i => $link) {
            if ($i > 0) {
                $spans[] = Span::styled('  ', Style::default()->fg(AnsiColor::DarkGray));
            }
            $isSelected = $focused && $i === $this->linkSelected;
            $label = "[{$i}] {$link['text']}";
            $spans[] = $isSelected
                ? Span::styled($label, Style::default()->fg(AnsiColor::Black)->bg(AnsiColor::Yellow)->bold())
                : Span::styled($label, Style::default()->fg(AnsiColor::Yellow));
        }

        $hint = $focused ? ' [←→] select  [Tab] next ' : ' [Tab] focus ';

        return BlockWidget::default()
            ->borders(Borders::ALL)
            ->borderType(BorderType::Rounded)
            ->borderStyle($borderStyle)
            ->titles(
                Title::fromLine(Line::fromSpans(
                    Span::styled(' External Links ', Style::default()->fg(AnsiColor::White)),
                )),
                Title::fromLine(Line::fromSpans(
                    Span::styled($hint, Style::default()->fg(AnsiColor::DarkGray)),
                ))->horizontalAlignment(HorizontalAlignment::Right)
            )
            ->widget(ParagraphWidget::fromLines(
                Line::fromSpans(...$spans),
            ));
    }

    private function makePackages(DictionaryEntry $e): Widget
    {
        $spans = [Span::styled(' ', Style::default())];
        foreach ($e->relatedPackages as $i => $pkg) {
            if ($i > 0) {
                $spans[] = Span::styled('  ', Style::default()->fg(AnsiColor::DarkGray));
            }
            $spans[] = Span::styled($pkg['text'], Style::default()->fg(AnsiColor::LightBlue));
        }

        return BlockWidget::default()
            ->borders(Borders::ALL)
            ->borderType(BorderType::Rounded)
            ->borderStyle(Style::default()->fg(AnsiColor::DarkGray))
            ->titles(Title::fromLine(Line::fromSpans(
                Span::styled(' Packages ', Style::default()->fg(AnsiColor::White)),
            )))
            ->widget(ParagraphWidget::fromLines(
                Line::fromSpans(...$spans),
            ));
    }

    private function makeStatusBar(): Widget
    {
        $histCount = count($this->history);
        $backLabel = $histCount > 0 ? " [b] Back ({$histCount})" : ' [b] Back';

        return ParagraphWidget::fromLines(Line::fromSpans(
            Span::styled(' [q] Quit', Style::default()->fg(AnsiColor::DarkGray)),
            Span::styled($backLabel, Style::default()->fg(AnsiColor::DarkGray)),
            Span::styled('  [/] Search', Style::default()->fg(AnsiColor::DarkGray)),
            Span::styled('  [Tab] Focus', Style::default()->fg(AnsiColor::DarkGray)),
            Span::styled('  [j/k] Scroll', Style::default()->fg(AnsiColor::DarkGray)),
        ));
    }

    // -----------------------------------------------------------------------
    // Highlighting helper
    // -----------------------------------------------------------------------

    /**
     * @param array{text: string, slug: string}[] $terms
     * @return Span[]
     */
    private function spansWithHighlights(string $text, array $terms): array
    {
        if ($text === '' || $terms === []) {
            return [Span::fromString($text)];
        }

        /** @var array<int, int> $hitEnd start => end of match */
        $hitEnd = [];
        $lower = mb_strtolower($text);
        foreach ($terms as $term) {
            $needle = mb_strtolower($term['text']);
            if (mb_strlen($needle) < 3) {
                continue;
            }
            $pos = 0;
            while (($at = mb_strpos($lower, $needle, $pos)) !== false) {
                $end = $at + mb_strlen($needle);
                if (!isset($hitEnd[$at])) {
                    $hitEnd[$at] = $end;
                }
                $pos = $end;
            }
        }

        if ($hitEnd === []) {
            return [Span::fromString($text)];
        }

        ksort($hitEnd);
        $spans = [];
        $pos = 0;
        $len = mb_strlen($text);
        foreach ($hitEnd as $start => $end) {
            if ($start < $pos) {
                continue;
            }
            if ($start > $pos) {
                $spans[] = Span::fromString(mb_substr($text, $pos, $start - $pos));
            }
            $spans[] = Span::styled(
                mb_substr($text, $start, $end - $start),
                Style::default()->fg(AnsiColor::LightCyan)->bold()
            );
            $pos = $end;
        }
        if ($pos < $len) {
            $spans[] = Span::fromString(mb_substr($text, $pos));
        }

        return $spans;
    }
}

// ---------------------------------------------------------------------------
// Entry point
// ---------------------------------------------------------------------------

$app = new App();

// Optional: open a specific entry directly from the CLI
// Usage: php tui.php [slug]
if (isset($argv[1]) && $argv[1] !== '') {
    $app->openSlug($argv[1]);
}

$app->run();
