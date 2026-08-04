# Abstract Method
An abstract method is a method that has no code. It also use the ``abstract`` option in the syntax.

An abstract method serves as a blueprint for other methods: it host class is intended to be subclassed. 

Interfaces only have abstract methods.

Abstract constructors cannot use promoted properties.
```php
<?php

abstract class AbstractClass { 
    abstract function foo(); // abstract method

    function goo() {
        return 1;
    } // concrete method
}

class ConcreteClass extends AbstractClass{

    function foo() {
        return 2;
    } // concrete method

    // No need to redefine the concrete methods.
    // Yet, it is still possible
}

?>
```

## See Also

+ [PHP: Abstract Classes, Interfaces, and Traits Explained](https://medium.com/@Amir_M4A/in-the-world-of-php-programming-there-are-several-key-concepts-that-developers-need-to-understand-b2ed1916287f)

Related : [Final Keyword](Final Keyword), [Concrete Class](Concrete Class), [Concrete Method](Concrete Method), [Abstract Class](Abstract Class)
