---
type: "PHP Feature"
title: "print_r()"
description: "``print_r()`` is a built-in PHP function used for displaying the contents of an array or an object in a human-readable format."
resource: "https://www.php.net/manual/en/function.print-r.php"
tags: ["feature", "native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# print_r()

``print_r()`` is a built-in PHP function used for displaying the contents of an array or an object in a human-readable format. 

It's particularly helpful for debugging and understanding the structure of complex data structures in the PHP code. 

When using ``print_r()``, it displays the array or object's values and structure to the browser or the console.

``print_r()`` has a second parameter, which controls the direct output of the debug information to a string, instead of the standard output. This is useful to control the final destination of the message: it might be sent to a logging system, or duplicated.

``print_r()`` carries the risk to have debugging tools published to production: while it doesn't provide any meaningful attack surface, it is a data leak. It has no eradication mechanism, like ``assert()``.

```php
<?php

    $a = 1;

    print_r($a);
/*
Array
(
    [0] => 1
)
*/

?>
```

## Documentation
- [https://www.php.net/manual/en/function.print-r.php](https://www.php.net/manual/en/function.print-r.php)

## See Also
- [Utilizing PHP's print_r() function](https://mikebranski.com/utilizing-phps-print_r-function/)
- [A practical Guide to PHP's `print_r()` and `var_dump()` Functions](https://reintech.io/blog/practical-guide-to-php-print-r-var-dump-functions)

## Related
- [Data Leak](/features/data-leak.md)
- [Echo](/features/echo.md)
- [Print](/features/print.md)
- [var_dump()](/features/var_dump.md)
- [debug_backtrace()](/features/debug_backtrace.md)
- [Debugger](/features/debugger.md)
- [var_export()](/features/var_export.md)

