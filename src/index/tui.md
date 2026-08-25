# Terminal User Interface (TUI)
A Terminal User Interface, or TUI for short, is a type of user interface that uses text-based graphics and keyboard interaction within a terminal or console, providing a richer experience than a plain CLI while avoiding the overhead of a graphical desktop. TUIs typically use character-based drawing to build menus, forms, and panels. TUI applications are often built with the CLI SAPI and libraries such as ``Termwind`` or ``php-tui``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tui.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tui.html","name":"Terminal User Interface (TUI)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:08:18 +0000","dateModified":"Wed, 19 Aug 2026 08:08:18 +0000","description":"A Terminal User Interface, or TUI for short, is a type of user interface that uses text-based graphics and keyboard interaction within a terminal or console, providing a richer experience than a plain CLI while avoiding the overhead of a graphical desktop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tui.html"]}],"alternateName":["terminal-user-interface"],"keywords":["acronym","application"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cli.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sapi.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/desktop-app.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/application.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Text-based_user_interface"},{"@type":"CreativeWork","name":"php-tui","url":"https:\/\/github.com\/php-tui\/php-tui"},{"@type":"CreativeWork","name":"Introducing the Symfony TUI component","url":"https:\/\/symfony.com\/blog\/introducing-the-symfony-tui-component"},{"@type":"CreativeWork","name":"Tetris in PHP","url":"https:\/\/github.com\/ShawnMcCool\/tetris"},{"@type":"CreativeWork","name":"PHPTUI.dev","url":"https:\/\/phptui.dev\/"},{"@type":"CreativeWork","name":"Termwind","url":"https:\/\/github.com\/nunomaduro\/termwind"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"tui"}]}]}</script>
```php
<?php

// example from https://php-tui.github.io/php-tui/docs/guides/getting-started/
declare(strict_types=1);

use PhpTui\Tui\DisplayBuilder;
use PhpTui\Tui\Extension\Core\Shape\MapResolution;
use PhpTui\Tui\Extension\Core\Shape\MapShape;
use PhpTui\Tui\Extension\Core\Widget\CanvasWidget;

require 'vendor/autoload.php';

$display = DisplayBuilder::default()->build();
$display->clear();
$display->draw(
    CanvasWidget::fromIntBounds(-180, 180, -90, 90)
        ->draw(
            MapShape::default()->resolution(MapResolution::High)
        )
);
```

**[Documentation](https://en.wikipedia.org/wiki/Text-based_user_interface)**
## See Also

+ [php-tui](https://github.com/php-tui/php-tui)
+ [Introducing the Symfony TUI component](https://symfony.com/blog/introducing-the-symfony-tui-component)
+ [Tetris in PHP](https://github.com/ShawnMcCool/tetris)
+ [PHPTUI.dev](https://phptui.dev/)
+ [Termwind](https://github.com/nunomaduro/termwind)

## Related

+ [Command Line Interface (CLI)](cli.html)
+ [Server Application Programming Interface (SAPI)](sapi.html)
+ [Desktop Application](desktop-app.html)
+ [Application](application.html)

## Related packages

+ [php-tui/php-tui](https://packagist.org/packages/php-tui/php-tui)
+ [thermage/thermage](https://packagist.org/packages/thermage/thermage)
