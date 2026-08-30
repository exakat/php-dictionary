---
type: "PHP Feature"
title: "Concrete Method"
description: "A concrete method is a method that has code."
resource: "https://www.php.net/manual/en/language.oop5.abstract.php"
tags: ["abstract", "class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/language.oop5.abstract.php](https://www.php.net/manual/en/language.oop5.abstract.php)

## See Also
- [PHP: Abstract Classes, Interfaces, and Traits Explained](https://medium.com/@Amir_M4A/in-the-world-of-php-programming-there-are-several-key-concepts-that-developers-need-to-understand-b2ed1916287f)

## Related
- [Final Keyword](/features/final.md)
- [Concrete Class](/features/concrete.md)
- [Abstract Method](/features/abstract-method.md)
- [Abstract Class](/features/abstract-class.md)

