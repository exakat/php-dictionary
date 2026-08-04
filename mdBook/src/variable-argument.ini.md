# Variable Arguments
Variable arguments refers to a methodcall where the list of argument is depends on the call, rather than the signature of the method.

Variable arguments are achieved with the variadic operator, or with the ``func_get_args()`` functions. Variadic operator covers most of the cases, and ``func_get_args()`` covers the remaining edge cases. 

Variable arguments may be static or dynamic. It is static when the list of arguments varies from call to call, and are hard-coded. Dynamic argument list depends on variadic ``...`` operator, or ``call_user_func_array()`` functions.

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

## See Also

+ [Variable-length argument lists](https://riptutorial.com/php/example/18652/variable-length-argument-lists)
+ [Named Arguments and Variadics in PHP 8](https://markbakeruk.net/2021/09/28/named-arguments-and-variadics-in-php-8/)

Related : [Functions](Functions), [Variadic](Variadic), [func_get_args()](func_get_args()), [Three Dots](Three Dots)
