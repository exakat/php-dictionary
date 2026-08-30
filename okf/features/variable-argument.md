---
type: "PHP Feature"
title: "Variable Arguments"
description: "Variable arguments refer to a method call where the list of arguments depends on the call, rather than the signature of the method."
resource: "https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Variable Arguments

Variable arguments refer to a method call where the list of arguments depends on the call, rather than the signature of the method.

Variable arguments are achieved with the variadic operator, or with the ``func_get_args()`` function. The variadic operator covers most of the cases, and ``func_get_args()`` covers the remaining edge cases.

Variable arguments may be static or dynamic. It is static when the list of arguments varies from call to call, and is hard-coded. A dynamic argument list depends on the variadic ``...`` operator, or the ``call_user_func_array()`` function.

```php
<?php

    // No arguments in the signature.
    function foo() {
        // displays the list of arguments
        print_r(func_get_args());
    }
    
    // static arguments
    foo(1, 2);
    foo(4, 5, 6);
    
    // dynamic variable arguments
    $args = range(5, rand(9, 11)) ; 
    foo(...$args);

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list](https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list)

## See Also
- [Variable-length argument lists](https://riptutorial.com/php/example/18652/variable-length-argument-lists)
- [Named Arguments and Variadics in PHP 8](https://markbakeruk.net/2021/09/28/named-arguments-and-variadics-in-php-8/)

## Related
- [Functions](/features/function.md)
- [Variadic](/features/variadic.md)
- [func_get_args()](/features/func_get_args.md)
- [Three Dots](/features/three-dots.md)

