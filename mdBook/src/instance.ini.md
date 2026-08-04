# instance
An instance is an object of a class. The class provides the definitions of the behavior of that object, while the object holds the specific data, that makes it unique and distinguishable. 

The creation of an instance, called instantiation, is done with the ``new`` keyword.
```php
<?php

class X {
    private int $property;
    
    function __construct(int $arg) {
        $this->propety = $arg;
    }
}

$object = new X(2);

?>
```

Related : [Class](Class), [Object](Object), [new](new), [Constructor](Constructor), [Non-instantiable](Non-instantiable), [Reflection](Reflection)
