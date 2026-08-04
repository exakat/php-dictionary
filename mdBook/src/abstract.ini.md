# Abstract Keyword
PHP has ``abstract`` classes, properties and methods. Classes defined as abstract cannot be instantiated, and any class that contains at least one abstract method, or property hook, must also be abstract.

PHP does not support abstract constants, so a class constant must be defined with a value, although it may be overwritten in a child class.

Traits may have abstract methods, and they don't have to be labelled abstract. On the other hand, any class that holds such a trait must either overwrite the abstract methods, or be itself declared abstract. 

Interfaces acts has implicit and systematic abstract classes: each of the methods in an interface is implicitly considered abstract.

An abstract method may be made concrete. It cannot be turned back into an abstract method later. 

An abstract method cannot be private: being abstract means that the method must be defined in a child, while private means the method is not shared with child class. protected and public are both fine.

An abstract method cannot be final: being abstract means that the method must be defined in a child, while final means the method cannot be overwritten. 

Static methods may be declared abstract.

abstract applies to the property, and is used by either or both of the ``get`` and ``set`` hook. At least one of them has to be without a body, as should be any abstract method.

```php
<?php

    abstract class AbstractClass
    {
    
        // the abstract keyword is on the property
        public abstract string $p {
            set;
            get => 'abc';  
        }

        // Force Extending class to define this method
        abstract protected function getValue();
        abstract protected function prefixValue($prefix);
    
        // abstract property
        abstract public $p { get; }
    
        // Common method
        public function printOut() {
            print $this->getValue() . "\n";
        }
    }

?>
```

## See Also

+ [Interfaces vs Abstract Classes in PHP](https://ashallendesign.co.uk/blog/interfaces-vs-abstract-classes-in-php)
+ [Testing Abstract Classes in PHP using Anonymous Classes](https://www.otsch.codes/blog/testing-abstract-classes-in-php-using-anonymous-classes)
+ [Why (nearly) every PHP class you write should be abstract or final](https://matthewdaly.co.uk/blog/2023/08/13/why-nearly-every-php-class-you-write-should-be-abstract-or-final/)

Related : [Abstraction](Abstraction), [Concrete Class](Concrete Class), [Object](Object), [Overriding](Overriding), [Final Keyword](Final Keyword), [Private Visibility](Private Visibility), [static](static), [Property Hook](Property Hook)
