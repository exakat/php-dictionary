# Base Class
A base class is a class that serves as the root of an inheritance hierarchy. Other classes extend it to inherit its properties and methods.

A base class may be concrete, meaning it can be instantiated directly, or it may be abstract, preventing direct instantiation and forcing subclasses to implement its abstract methods.

A PHP class may only extend one base class, but it may implement multiple interfaces.

There are native base classes, like ``Exception`` and ``Error``, from which all exceptions and errors inherit.
```php
<?php

    class Animal {
        public function breathe(): string {
            return 'inhale/exhale';
        }
    }
    
    class Dog extends Animal {
        public function speak(): string {
            return 'woof';
        }
    }
    
    $dog = new Dog();
    echo $dog->breathe(); // inherited from base class

?>
```

Related : [Inheritance](Inheritance), [extends](extends), [parent](parent), [Abstract Class](Abstract Class), [Child Class](Child Class), [Subclass](Subclass), [Class](Class), [Interface](Interface), [Base](Base)
