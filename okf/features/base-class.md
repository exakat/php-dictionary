---
type: "PHP Feature"
title: "Base Class"
description: "A base class, also called a superclass or a parent class, is a class that serves as the root of an inheritance hierarchy."
resource: "https://www.php.net/manual/en/language.oop5.inheritance.php"
tags: ["class", "oop"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Base Class

A base class, also called a superclass or a parent class, is a class that serves as the root of an inheritance hierarchy. Other classes extend it to inherit its properties and methods.

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

## Documentation
- [https://www.php.net/manual/en/language.oop5.inheritance.php](https://www.php.net/manual/en/language.oop5.inheritance.php)

## See Also
- [PHP Inheritance - GeeksforGeeks](https://www.geeksforgeeks.org/php/what-is-inheritance-in-php/)
- [Understanding Class Inheritance (Child and Parent Classes) in Object-Oriented PHP](https://wpshout.com/courses/object-oriented-php-for-wordpress-developers/understanding-class-inheritance-child-and-parent-classes-in-object-oriented-php/)

## Related
- [Inheritance](/features/inheritance.md)
- [extends](/features/extends.md)
- [parent](/features/parent.md)
- [Abstract Class](/features/abstract-class.md)
- [Child Class](/features/child-class.md)
- [Subclass](/features/subclass.md)
- [Class](/features/class.md)
- [Interface](/features/interface.md)
- [Base](/features/base.md)

