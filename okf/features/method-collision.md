---
type: "PHP Feature"
title: "Method Collision"
description: "A method collision happens when a trait is imported in a class, and it holds a method that already exists in the class."
resource: "https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict"
tags: ["trait"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Method Collision

A method collision happens when a trait is imported in a class, and it holds a method that already exists in the class.

To solve such a collision, the code must use ``insteadof`` and ``use`` keywords, in the ``use`` expression.

There is no collision between the imported trait and the parent of the class, as the trait has priority over the parent. There is also no collision when a trait imports another trait: the last method has precedence.

```php
<?php

trait T {
    function foo() { echo __METHOD__; }
}

trait U {
    function foo() { echo __METHOD__; }
}

class C {
    use u, t {
        use t::foo instead of u;
    }
}

new c()->goo();
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict](https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict)

## See Also
- [PHP Tutorial => Conflict Resolution](https://riptutorial.com/php/example/7271/conflict-resolution)
- [What are Traits in PHP and how to avoid collision](https://medium.com/@sandeep20284/what-are-traits-in-php-and-how-to-avoid-collision-a01feaea22bc)

## Related
- [Trait](/features/trait.md)
- [Insteadof](/features/insteadof.md)
- [Use In Traits](/features/use-trait.md)
- [Method](/features/method.md)

