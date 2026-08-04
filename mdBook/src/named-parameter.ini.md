# Named Parameters
Named parameters, also known as named arguments allow to pass arguments to a function or method by specifying the parameter name along with the corresponding value, rather than relying on the order of the parameters.

In traditional positional parameter passing, the values are provided to a function in the order in which the parameters are defined. However, with named parameters, the parameter to which a value is passed, is explicitly stated.
```php
<?php

    function foo($a, $b) {
        return $a - $b;
    }
    
    echo foo(2, 3);  // return -1
    echo foo(3, 2);  // return 1
    
    echo foo(a: 2, b: 3);  // return -1
    echo foo(b: 2, a: 3);  // return 1

?>
```

## See Also

+ [PHP 8.0 feature focus: Named Arguments](https://upsun.com/blog/php-8-0-named-arguments/)
+ [Named Arguments (blog)](https://sebastiandedeyne.com/named-arguments/)
+ [PHP: Named arguments are your friends](https://darkghosthunter.medium.com/php-named-arguments-are-your-friends-8076959b2f11/)
+ [Opting out of Named Parameters in PHP 8.0](https://php.watch/articles/no-named-arguments-docblock-attribute)

Related : [Positional Parameters](Positional Parameters), [Colon](Colon), [Option](Option), [Streamlining](Streamlining)
