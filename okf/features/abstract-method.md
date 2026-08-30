---
type: "PHP Feature"
title: "Abstract Method"
description: "An abstract method is a method that has no code."
resource: "https://www.php.net/manual/en/language.oop5.abstract.php"
tags: ["abstract", "class", "abstract-class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Abstract Method

An abstract method is a method that has no code. It also uses the ``abstract`` option in the syntax.

An abstract method serves as a blueprint for other methods: its host class is intended to be subclassed.

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

## Documentation
- [https://www.php.net/manual/en/language.oop5.abstract.php](https://www.php.net/manual/en/language.oop5.abstract.php)

## See Also
- [PHP: Abstract Classes, Interfaces, and Traits Explained](https://medium.com/@Amir_M4A/in-the-world-of-php-programming-there-are-several-key-concepts-that-developers-need-to-understand-b2ed1916287f)

## Related
- [Final Keyword](/features/final.md)
- [Concrete Class](/features/concrete.md)
- [Concrete Method](/features/concrete-method.md)
- [Abstract Class](/features/abstract-class.md)

