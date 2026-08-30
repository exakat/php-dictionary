---
type: "concept"
title: "Structural Pattern Matching"
description: "Structural pattern matching, found in Rust, ``Haskell``, ``Scala``, and ``OCaml``, matches a value against a shape that mirrors the value's own structure, and simultaneously binds the pieces it finds to new variables."
resource: "https://en.wikipedia.org/wiki/Pattern_matching"
tags: ["concept", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Structural Pattern Matching

Structural pattern matching, found in Rust, ``Haskell``, ``Scala``, and ``OCaml``, matches a value against a shape that mirrors the value's own structure, and simultaneously binds the pieces it finds to new variables. A pattern such as ``Some(Point { x, y })`` both checks that the value is the ``Some`` case of an option, wrapping a ``Point``, and extracts ``x`` and ``y`` in a single step; matches are typically checked exhaustively by the compiler, which rejects code that omits a possible case.

This differs from plain destructuring, which only extracts values assuming the shape is already known to match, and from PHP's own ``match`` expression, which compares a scalar subject against literal values or ranges, but cannot look inside a value's structure or bind its sub-parts.

PHP has no structural pattern matching: it is in the works for a future version, possibly PHP 9.0. The ``match`` expression compares a value with ``===`` against a flat list of candidates; it cannot descend into an array's or object's fields, cannot bind sub-values to variables as part of the comparison, and enforces no exhaustiveness over a class hierarchy or enum's cases beyond throwing ``UnhandledMatchError`` at runtime for unmatched inputs. Extracting values still requires a separate destructuring step, such as list assignment, done after the fact and unconditionally.

```php
<?php

    // match() compares scalars; it cannot destructure $shape's fields.
    $area = match (true) {
        $shape instanceof Circle => M_PI * $shape->radius ** 2,
        $shape instanceof Rectangle => $shape->width * $shape->height,
        default => throw new UnhandledMatchError('unknown shape'),
    };

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Pattern_matching](https://en.wikipedia.org/wiki/Pattern_matching)

## See Also
- [Rust Book: Pattern Matching](https://doc.rust-lang.org/book/ch06-02-match.html)
- [match](https://www.php.net/manual/en/control-structures.match.php)

## Related
- [Pattern Matching](/features/pattern-matching.md)
- [Algebraic Data Type](/features/algebraic-data-type.md)
- [Sum Type](/features/sum-type.md)
- [List](/features/list.md)

