# strict_types
``strict_types`` is an execution directive, that makes PHP more strict when applying the types. In particular, it doesn't cast scalar values automatically, but raise an error. 

``strict_types`` is an option per file, and is set with the ``declare()`` function.
```php
<?php

    declare(strict_types=1);
    
    function foo(int $a) {}
    
    foo(1);
    foo(1.3);
    //Fatal error: Uncaught TypeError: foo(): Argument #1 ($a) must be of type int, float given,

?>
```

## See Also

+ [PHP strict_types](https://www.phptutorial.net/php-tutorial/php-strict_types/)
+ [The way declare(strict_types=1) works in PHP](https://dev.to/rocksheep/the-way-stricttypes-works-in-php-eb7)
+ [What is PHP's declare(strict_types=1); and why you should use it](https://backendtea.com/post/php-declare-strict-types/)
+ [PHP RFC: Unify PHP's typing modes (aka remove strict_types declare)](https://github.com/Girgias/unify-typing-modes-rfc)

Related : [Type System](Type System), [declare()](declare()), [__toString() Method](__toString() Method), [Type Checking](Type Checking), [Type Coercion](Type Coercion), [Strict](Strict), [Type System](Type System), [Type Widening](Type Widening)
