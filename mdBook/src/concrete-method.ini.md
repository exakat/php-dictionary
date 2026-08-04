# Concrete Method
A concrete method is a method that has code. It is usually the opposite of an ``abstract`` method.

A concrete method may be part of an abstract class or not. It may also be overwritten, in a child class, though it is not compulsory, no always the case.

Interfaces cannot have concrete methods.
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

Related : [Final Keyword](Final Keyword), [Concrete Class](Concrete Class), [Abstract Method](Abstract Method), [Abstract Class](Abstract Class)
