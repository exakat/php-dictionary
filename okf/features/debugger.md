---
type: "PHP Feature"
title: "Debugger"
description: "A debugger is an extension or an external program that is used to help when searching for bugs or issues in source code."
resource: "https://en.wikipedia.org/wiki/Debugger"
tags: ["tool"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Debugger

A debugger is an extension or an external program that is used to help when searching for bugs or issues in source code. They provide extra visibility on the internal working of the application, including variable content.

As there are many tactics to search for a bug, there are many tools available.

The PHP ecosystem of debuggers includes:

+ PHP native functions such as ``var_dump()``, ``print_r()``, ``debug_backtrace()``...
+ PHP external components like ``kint``, ``whoops``, ``krumo``
+ Debuggers: interactive PHP Debugger, xdebug, PHP debugger, etc.

Debugging includes executing the code step by step, displaying and modifying the content of variables.

Debuggers are integrated into IDEs, or work as standalone applications.

```php
<?php

    // simple debug system with native PHP print_r
    print_r($_GET);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Debugger](https://en.wikipedia.org/wiki/Debugger)

## See Also
- [Xdebug](https://www.xdebug.org/)
- [Interactive PHP Debugger](https://www.php.net/manual/en/book.phpdbg.php)
- [Kint](https://github.com/kint-php/kint)
- [Whoops](https://github.com/filp/whoops)
- [Krumo](http://krumo.kaloyan.info/)
- [Quo](https://github.com/Protoqol/Quo)
- [buggregator](https://buggregator.dev/)

## Related
- [Debug](/features/debug.md)
- [Integrated Environment of Development (IDE)](/features/ide.md)
- [var_dump()](/features/var_dump.md)
- [print_r()](/features/print_r.md)
- [Backtrace](/features/backtrace.md)
- [PHP Editor](/features/php-editor.md)
- [PHP Profiler](/features/profiler.md)
- [Tool](/features/tool.md)

