---
type: "unsupported"
title: "Mixin"
description: "A mixin is a class-level construct that provides a set of methods intended to be incorporated into other classes, without forming a base-class relationship."
resource: "https://en.wikipedia.org/wiki/Mixin"
tags: ["unsupported", "class", "oop"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Mixin

A mixin is a class-level construct that provides a set of methods intended to be incorporated into other classes, without forming a base-class relationship. Unlike inheritance, a mixin does not impose an ``is-a`` relationship. Unlike an interface, it supplies concrete implementations. Unlike a trait, as PHP defines it, a mixin is itself an instantiable class or a first-class language entity that is composed through language syntax rather than a ``use`` directive inside the class body.

Languages such as Dart, Kotlin via delegation, and Scala via self-types and stackable modifications offer mixins as distinct, class-level features.

PHP does not have mixins. PHP traits are the closest analogue: they provide method reuse without inheritance. However, traits differ from true mixins in several ways:

+ A trait is not a class and cannot be instantiated on its own
+ A trait is composed inside the class definition: it cannot be applied after the fact
+ A trait cannot extend another class; a mixin in some languages can carry its own class hierarchy
+ PHP traits are resolved at compile time; some mixin systems allow run-time composition

PHP interfaces with default implementations as in Java are also a common comparison point, but PHP interfaces carry no implementation at all.

```php
<?php

    // PHP uses traits as the closest equivalent to mixins.
    // They share the intent but differ from class-level mixins.
    
    trait Timestampable {
        private \DateTimeImmutable $createdAt;
    
        public function getCreatedAt(): \DateTimeImmutable {
            return $this->createdAt;
        }
    }
    
    class Article {
        use Timestampable;   // composed here, not applied externally
    }
    
    // A true class-level mixin (as in Dart) would be declared separately
    // and applied without modifying the target class source.

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Mixin](https://en.wikipedia.org/wiki/Mixin)

## See Also
- [Dart mixins](https://dart.dev/language/mixins)

## Related
- [Trait](/features/trait.md)
- [Use In Traits](/features/use-trait.md)
- [Open Class](/features/open-class.md)
- [Polymorphism](/features/polymorphism.md)
- [Method Resolution Order (MRO)](/features/mro.md)

