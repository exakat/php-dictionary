---
type: "concept"
title: "Method Resolution Order (MRO)"
description: "Method Resolution Order, or MRO, is the algorithm that determines the order in which base classes are searched when looking up a method or property in an inheritance hierarchy."
resource: "https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict"
tags: ["concept", "oop", "inheritance", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Method Resolution Order (MRO)

Method Resolution Order, or MRO, is the algorithm that determines the order in which base classes are searched when looking up a method or property in an inheritance hierarchy.

PHP MRO applies to class hierarchies, via ``extends`` and trait composition, via ``use``. When a method is called, PHP follows a specific resolution order to find the implementation: the class itself first, then traits, then parent classes, recursively.

For traits, since there may be several of them, PHP uses a priority system: methods defined in the using class override trait methods, and traits listed first take precedence over those listed later. Conflicts between traits must be resolved explicitly using ``insteadof`` and ``as`` operators.

This becomes critical in deep inheritance chains or with multiple traits, where the resolution order may not be immediately obvious and can lead to unexpected behavior if not managed carefully.

```php
<?php

    trait A {
        function hello() { return 'A'; }
    }
    
    trait B {
        function hello() { return 'B'; }
    }
    
    class C {
        use A, B {
            A::hello insteadof B; // MRO: A wins over B
            B::hello as helloB;
        }
    }
    
    $c = new C();
    echo $c->hello();  // A
    echo $c->helloB(); // B

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict](https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict)

## See Also
- [C3 linearization algorithm in Python](https://www.geeksforgeeks.org/python/c3-linearization-algorithm-in-python/)
- [The Python 2.3 Method Resolution Order](https://www.python.org/download/releases/2.3/mro/)

## Related
- [Trait](/features/trait.md)
- [Inheritance](/features/inheritance.md)
- [parent](/features/parent.md)
- [Child Class](/features/child-class.md)
- [Overloading](/features/overloading.md)
- [Override Attribute](/features/override.md)
- [Late Static Binding](/features/late-static-binding.md)
- [Abstract Class](/features/abstract-class.md)

