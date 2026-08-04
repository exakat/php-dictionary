# Abstract Class
An abstract class is a class that cannot be instantiated directly. It has the ``abstract`` option.

An abstract class serves as a blueprint for other classes that extends it, and is intended to be subclassed. It is still possible to access its constants, static properties and static methods. 

An abstract class can contain both regular methods and abstract methods. Regular methods provide common functionality that can be inherited by subclasses, while abstract methods are declared without an implementation. Subclasses of an abstract class must provide an implementation for all the abstract methods defined in the abstract class.
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

Related : [Final Keyword](Final Keyword), [Concrete Class](Concrete Class), [Abstract Method](Abstract Method), [Concrete Method](Concrete Method), [Base Class](Base Class), [Base](Base), [Method Resolution Order (MRO)](Method Resolution Order (MRO))
