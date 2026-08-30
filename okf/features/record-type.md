---
type: "concept"
title: "Record Type"
description: "A record type, also called a data class, is a construct dedicated to grouping named fields into an immutable value, with equality, hashing, and a string representation generated automatically from the field list, rather than written by hand."
resource: "https://en.wikipedia.org/wiki/Record_(computer_science)"
tags: ["concept", "type", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Record Type

A record type, also called a data class, is a construct dedicated to grouping named fields into an immutable value, with equality, hashing, and a string representation generated automatically from the field list, rather than written by hand. Examples include Java's ``record``, Kotlin's ``data class``, C#'s ``record``, and Python's ``dataclass``.

Because the compiler generates the boilerplate, a record type is meant to be declared in a single line per field, and two records are considered equal when all their fields are equal, regardless of identity, unlike ordinary objects which compare by reference by default.

PHP has no dedicated record type. A ``readonly`` class with constructor property promotion approaches the same intent: fields declared once, in the constructor signature, and never reassigned afterward. It still falls short on two points: PHP generates no value-based ``==`` semantics beyond its default shallow object comparison, and it generates no ``__toString()`` or hash from the field list, both of which must be written by hand.

```php
<?php

    // Closest approximation: readonly + promoted properties.
    final class Point {
        public function __construct(
            public readonly float $x,
            public readonly float $y,
        ) {}
    }
    
    $a = new Point(1.0, 2.0);
    $b = new Point(1.0, 2.0);
    var_dump($a == $b);  // true, but by luck of default object comparison
    var_dump($a === $b); // false: identity, not value, equality

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Record_(computer_science)](https://en.wikipedia.org/wiki/Record_(computer_science))

## See Also
- [PHP Readonly Properties](https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties)
- [Constructor Promotion](https://www.php.net/manual/en/language.oop5.decon.php#language.oop5.decon.constructor.promotion)

## Related
- [Readonly](/features/readonly.md)
- [Struct Type](/features/struct-type.md)
- [Tuple](/features/tuple.md)
- [Immutable](/features/immutable.md)
- [Class](/features/class.md)

