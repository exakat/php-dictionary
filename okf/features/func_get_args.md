---
type: "PHP Feature"
title: "func_get_args()"
description: "``func_get_args()`` is a native function that returns an array containing the function's argument list."
resource: "https://www.php.net/manual/en/function.func-get-args.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# func_get_args()

``func_get_args()`` is a native function that returns an array containing the function's argument list.

It is often used to handle a variable number of arguments in a function, especially before the introduction of the variadic operator ``...`` in version 5.6.

There are related functions: ``func_get_arg()``, which returns a specific argument from the list, and ``func_num_args()``, which returns the number of arguments passed to the function.

```php
<?php

    function foo() {
        $numargs = func_num_args();
        echo "Number of arguments: $numargs\n";
        if ($numargs >= 2) {
            echo "Second argument is: " . func_get_arg(1) . "\n";
        }
        $arg_list = func_get_args();
        for ($i = 0; $i < $numargs; $i++) {
            echo "Argument $i is: " . $arg_list[$i] . "\n";
        }
    }
    
    foo(1, 2, 3);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.func-get-args.php](https://www.php.net/manual/en/function.func-get-args.php)

## See Also
- [https://www.geeksforgeeks.org/php/php-func_get_args-function/](https://www.geeksforgeeks.org/php/php-func_get_args-function/)

## Related
- [Variable Arguments](/features/variable-argument.md)
- [Variadic](/features/variadic.md)
- [Arbitrary Number Of Argument](/features/arbitrary-argument.md)
- [Method Overloading](/features/method-overloading.md)

## Details
- PHP since: 5.0+

