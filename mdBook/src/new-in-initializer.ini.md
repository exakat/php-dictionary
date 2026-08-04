# New In Initializers
It is possible to use a new expression for default values of static variables, parameter and constants. 

It is not possible to use a new operator in a property definition. All elements of the instantiation must be constants, literal or constants or class constant, and available at calling time.
```php
<?php

    class B {
        function __construct(private int $i) {}
    }
    
    function headers($a = new B(3)) : B {
        return $a;
    }

?>
```

## See Also

+ [Initialize objects right into the constructor parameters in PHP 8.1](https://www.amitmerchant.com/initialize-objects-right-into-the-constructor-parameters-in-php-81/)

Related : [new](new), [Static Variables](Static Variables), [Constants](Constants), [Static Constant](Static Constant), [Parameter](Parameter)
