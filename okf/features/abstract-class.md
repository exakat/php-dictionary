---
type: "PHP Feature"
title: "Abstract Class"
description: "An abstract class is a class that cannot be instantiated directly."
resource: "https://www.php.net/manual/en/language.oop5.abstract.php"
tags: ["abstract", "class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/language.oop5.abstract.php](https://www.php.net/manual/en/language.oop5.abstract.php)

## See Also
- [PHP: Abstract Classes, Interfaces, and Traits Explained](https://medium.com/@Amir_M4A/in-the-world-of-php-programming-there-are-several-key-concepts-that-developers-need-to-understand-b2ed1916287f)

## Related
- [Final Keyword](/features/final.md)
- [Concrete Class](/features/concrete.md)
- [Abstract Method](/features/abstract-method.md)
- [Concrete Method](/features/concrete-method.md)
- [Base Class](/features/base-class.md)
- [Base](/features/base.md)
- [Method Resolution Order (MRO)](/features/mro.md)

