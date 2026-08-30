---
type: "keyword"
title: "Modifier"
description: "A modifier is a keyword that changes the behavior or properties of a class element, such as property, method, or constant."
resource: "https://www.php.net/manual/en/language.oop5.php"
tags: ["oop", "syntax", "keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Modifier

A modifier is a keyword that changes the behavior or properties of a class element, such as property, method, or constant. PHP supports several categories of modifiers:

Visibility modifiers control access to class members:

+ ``public``: accessible from anywhere, by default
+ ``protected``: accessible within the class and its subclasses
+ ``private``: accessible only within the declaring class

Other modifiers:

+ ``static``: belongs to the class itself rather than instances
+ ``abstract``: declares a class or method that must be implemented by subclasses
+ ``final``: prevents a class from being extended or a method from being overridden
+ ``readonly``: makes a property immutable after initialization
+ ``readonly class``: makes all properties readonly

Modifiers are essential for implementing encapsulation, polymorphism, and other OOP principles. They enforce design constraints at the language level, improving code safety and clarity.

```php
<?php

    abstract class Shape {
        protected float $area;

        abstract public function calculate(): float;

        final public function describe(): string {
            return 'This shape has an area of ' . $this->calculate();
        }
    }

    class Circle extends Shape {
        public function __construct(
            private readonly float $radius
        ) {}

        public function calculate(): float {
            return pi() * $this->radius;
        }
    }

    $c = new Circle(5);
    echo $c->describe();

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.php](https://www.php.net/manual/en/language.oop5.php)

## See Also
- [PHP Visibility](https://www.php.net/manual/en/language.oop5.php#language.oop5.visibility)
- [PHP Class Keywords](https://www.php.net/manual/en/language.oop5.php#language.oop5.basic.class)

## Related
- [Visibility](/features/visibility.md)
- [Private Visibility](/features/private.md)
- [Protected Visibility](/features/protected.md)
- [Public Visibility](/features/public.md)
- [static](/features/static.md)
- [Abstract Keyword](/features/abstract.md)
- [Final Keyword](/features/final.md)
- [Readonly](/features/readonly.md)
- [Data Hiding](/features/data-hiding.md)
- [Encapsulation](/features/encapsulation.md)
- [OOP (Object Oriented Programming)](/features/oop.md)
- [Properties](/features/property.md)
- [Method](/features/method.md)
- [Static Constant](/features/class-constant.md)

