---
type: "concept"
title: "Struct Type"
description: "A ``struct`` is a value type that groups named fields together, as in C, Go, Rust, or Swift."
resource: "https://en.wikipedia.org/wiki/Struct_(C_programming_language)"
tags: ["concept", "type", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Struct Type

A ``struct`` is a value type that groups named fields together, as in C, Go, Rust, or Swift. Unlike a class instance in most object-oriented languages, a ``struct`` value is typically copied by value on assignment or when passed to a function, is allocated inline rather than behind a pointer, and carries no built-in identity or inheritance: two ``struct`` are simply equal when their fields are equal.

``struct`` are commonly used for small, self-contained data, such as a two dimension point or an RGB color, where the overhead of heap allocation and reference semantics would be wasted.

PHP has no ``struct`` type. Every ``class`` instance is a heap-allocated object with reference semantics: assigning an object to a new variable, or passing it to a function, copies the reference, not the object's contents, so mutations through one variable are visible through the other. A PHP ``class`` can imitate the field-grouping role of a ``struct``, but not its value semantics; achieving copy-on-assign behavior requires implementing ``__clone()`` and calling it manually, or declaring the class ``readonly``.

The closest notion of a ``struct`` type is ``stdClass`` which is an empty class, with dynamic properties without type, which may be populated at will, or an ``array``: both notions are actually accessible to the other with casting.

```php
<?php

    class Point {
        public function __construct(public float $x, public float $y) {}
    }
    
    $a = new Point(1.0, 2.0);
    $b = $a;      // copies the reference, not the object
    $b->x = 99.0; // also changes $a->x: PHP objects have reference semantics

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Struct_(C_programming_language)](https://en.wikipedia.org/wiki/Struct_(C_programming_language))

## See Also
- [Record in Wikipedia](https://en.wikipedia.org/wiki/Record_(computer_science))

## Related
- [Class](/features/class.md)
- [Record Type](/features/record-type.md)
- [Value Type](/features/value-type.md)
- [__clone() Method](/features/__clone.md)
- [Readonly](/features/readonly.md)
- [RGB](/features/rgb.md)

