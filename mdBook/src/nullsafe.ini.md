# Nullsafe
A nullsafe operator is able to carry a function or fail graciously to ``null``. In particular, it won't stop the execution with a fatal error. 

There are two PHP operators that are nullsafe: 

+ Nullsafe object operator ``?->``
+ Nullsafe-coalesce ``??``.
```php
<?php

    $a = foo();
    
    $b = $a?->method();
    
    $b = $a?->chain1?->chain2?->method();
    
    // foo may return null
    function foo() : ?A { }

?>
```

## See Also

+ [Mastering Null Safety in PHP 8: A Comprehensive Guide to Using the Null Safe Operator](https://medium.com/@prevailexcellent/mastering-null-safety-in-php-8-a-comprehensive-guide-to-using-the-null-safe-operator-47835ba1140b)
+ [PHP 8.0: Null-safe operator](https://php.watch/versions/8.0/null-safe-operator)

Related : [Object Operator ->](Object Operator ->), [Coalesce Operator](Coalesce Operator), [Streamlining](Streamlining)
