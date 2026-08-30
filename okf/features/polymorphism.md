---
type: "concept"
title: "Polymorphism"
description: "Polymorphism is a fundamental concept in object-oriented programming, or OOP."
resource: "https://www.php.net/manual/en/language.oop5.inheritance.php"
tags: ["oop", "concept", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Polymorphism

Polymorphism is a fundamental concept in object-oriented programming, or OOP. It allows different classes to be treated as instances of a common base class, interface, or abstract class, and it allows writing code that works with these objects without needing to know their specific types.

Polymorphism is achieved through method overriding and interfaces. A class may only extend a single parent class, though that parent may itself extend another, forming a chain of inheritance. On the other hand, implementing interfaces can be arbitrarily chosen for any class and its children, and a class may implement several interfaces at once.

```php
<?php

    class Object {}
    
    // the interfaces are empty for better readability
    interface hasMedian {}
    
    interface hasInscribedCircle {}
    
    class Triangle extends Object implements hasInscribedCircle, hasMedian {}
    
    class Square extends Object implements hasInscribedCircle {}
    
    class Pentagon extends Object {}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.inheritance.php](https://www.php.net/manual/en/language.oop5.inheritance.php)

## See Also
- [PHP Polymorphism Explained ( By Examples )](https://www.scaler.com/topics/php-tutorial/polymorphism-in-php/)
- [Polymorphism in PHP With Example](https://mohasin-dev.medium.com/polymorphism-in-php-with-example-83de1792c89d)

## Related
- [Interface](/features/interface.md)
- [Class](/features/class.md)
- [Inheritance](/features/inheritance.md)
- [Trait](/features/trait.md)
- [Generics](/features/generics.md)
- [instanceof](/features/instanceof.md)
- [Intersection Type](/features/intersection-type.md)
- [is_a()](/features/is_a.md)
- [OOP (Object Oriented Programming)](/features/oop.md)
- [Monomorphization](/features/monomorphization.md)
- [Existential Type](/features/existential-type.md)
- [Higher-Kinded Type](/features/higher-kinded-type.md)
- [Mixin](/features/mixin.md)
- [Row Polymorphism](/features/row-polymorphism.md)
- [Sealed Class](/features/sealed-class.md)
- [Multiple Dispatch](/features/multiple-dispatch.md)
- [Pattern](/features/pattern.md)
- [Structural Typing](/features/structural-typing.md)
- [Type Class](/features/type-class.md)

