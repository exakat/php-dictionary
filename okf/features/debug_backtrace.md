---
type: "PHP Feature"
title: "debug_backtrace()"
description: "``debug_backtrace()`` is a PHP native function that generates a backtrace."
resource: "https://www.php.net/manual/en/function.debug-backtrace.php"
tags: ["debug", "native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# debug_backtrace()

``debug_backtrace()`` is a PHP native function that generates a backtrace.

``debug_backtrace()`` is used for inline debugging, or to collect more information before logging errors.

``debug_backtrace()`` returns a dataset concerning the current situation of execution. It does not display anything: that function is either custom made, or devoted to ``debug_print_backtrace()``.

```php
<?php

    function foo() {
        print_r(debug_backtrace());
        /** 
        Array
(
    [0] => Array
        (
            [file] => /tmp.php
            [line] => 7
            [function] => foo
            [args] => Array
                (
                )

        )

)
*/
    }
    
    foo();

?>
```

## Documentation
- [https://www.php.net/manual/en/function.debug-backtrace.php](https://www.php.net/manual/en/function.debug-backtrace.php)

## See Also
- [debug_print_backtrace](https://www.php.net/manual/en/function.debug-print-backtrace.php)

## Related
- [print_r()](/features/print_r.md)
- [Trace](/features/trace.md)
- [var_dump()](/features/var_dump.md)

