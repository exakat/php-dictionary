---
type: "acronym"
title: "Terminal User Interface (TUI)"
description: "A Terminal User Interface, or TUI for short, is a type of user interface that uses text-based graphics and keyboard interaction within a terminal or console, providing a richer experience than a plain CLI while avoiding the overhead of a graphical desktop."
resource: "https://en.wikipedia.org/wiki/Text-based_user_interface"
tags: ["acronym", "application"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Terminal User Interface (TUI)

A Terminal User Interface, or TUI for short, is a type of user interface that uses text-based graphics and keyboard interaction within a terminal or console, providing a richer experience than a plain CLI while avoiding the overhead of a graphical desktop. TUIs typically use character-based drawing to build menus, forms, and panels. TUI applications are often built with the CLI SAPI and libraries such as ``Termwind`` or ``php-tui``.

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

## Documentation
- [https://en.wikipedia.org/wiki/Text-based_user_interface](https://en.wikipedia.org/wiki/Text-based_user_interface)

## See Also
- [php-tui](https://github.com/php-tui/php-tui)
- [Introducing the Symfony TUI component](https://symfony.com/blog/introducing-the-symfony-tui-component)
- [Tetris in PHP](https://github.com/ShawnMcCool/tetris)
- [PHPTUI.dev](https://phptui.dev/)
- [Termwind](https://github.com/nunomaduro/termwind)

## Related
- [Command Line Interface (CLI)](/features/cli.md)
- [Server Application Programming Interface (SAPI)](/features/sapi.md)
- [Desktop Application](/features/desktop-app.md)
- [Application](/features/application.md)

## Details
- Packagist: [php-tui/php-tui](https://packagist.org/packages/php-tui/php-tui)
- Packagist: [thermage/thermage](https://packagist.org/packages/thermage/thermage)

