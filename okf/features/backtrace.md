---
type: "PHP Feature"
title: "Backtrace"
description: "A backtrace is a snapshot of the callstack at a specific point in the program's execution."
resource: "https://www.php.net/manual/en/function.debug-backtrace.php"
tags: ["debug"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Backtrace

A backtrace is a snapshot of the callstack at a specific point in the program's execution. This is typically needed when an error or exception occurs.

```php
<?php

    function foo() {
        goo();
    }

    function goo() {
        debug_print_backtrace();
    }

    foo();

    /**
    #0 /in/a4eQc(3): goo()
    #1 /in/a4eQc(10): foo()
    */

?>
```

## Documentation
- [https://www.php.net/manual/en/function.debug-backtrace.php](https://www.php.net/manual/en/function.debug-backtrace.php)

## See Also
- [debug_print_backtrace](https://www.php.net/manual/en/function.debug-print-backtrace.php)

## Related
- [Debugger](/features/debugger.md)
- [Callstack](/features/callstack.md)

## Details
- Packagist: [spatie/backtrace](https://packagist.org/packages/spatie/backtrace)
- Packagist: [axy/backtrace](https://packagist.org/packages/axy/backtrace)

