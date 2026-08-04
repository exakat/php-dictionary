# Overriding
Overriding is an OOP concept where a child class provides its own implementation of a method that already exists in a parent class.

Child classes may override constant values, properties and methods. 

When overriding, visibility cannot be reduced. A ``protected`` method or constant may become ``public``, but not ``private``. A constant

The ``#[Override]`` attribute is a helper tool to ensure that a child method overrides a parent method. It is the complement of the ``abstract`` keyword.

Incompatible overriding is not always detected at linting time: this happens when the overriding definition is parsed before the overridden definition.
```php
<?php

class MyParentClass {
    function foo() {}
}

class MyChildClass {
    function foo() {}
}

?>
```

## See Also

+ [Function overloading and Overriding in PHP](https://www.geeksforgeeks.org/php/function-overloading-and-overriding-in-php/)

Related : [Override Attribute](Override Attribute), [Abstract Keyword](Abstract Keyword), [Overwrite](Overwrite), [PHP Native Attributes](PHP Native Attributes), [PHP Native Attribute](PHP Native Attribute)
