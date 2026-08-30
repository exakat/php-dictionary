---
type: "concept"
title: "Tuple"
description: "A tuple is a fixed-size, ordered collection of values, where each position may hold a different type, and the type of the whole tuple is the sequence of its element types, such as Rust's ``(i32, String, bool)`` or Python's ``(1, 'a', True)``."
resource: "https://en.wikipedia.org/wiki/Tuple"
tags: ["concept", "type", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Tuple

A tuple is a fixed-size, ordered collection of values, where each position may hold a different type, and the type of the whole tuple is the sequence of its element types, such as Rust's ``(i32, String, bool)`` or Python's ``(1, 'a', True)``. Unlike an array or a list, a tuple's length and per-position types are fixed at compile time, and are checked by the type system.

Tuples are typically used for lightweight, unnamed grouping of a small number of related values, such as returning two values from a function without declaring a structure or class for the purpose.

PHP has no native, typed tuple. A plain indexed array can hold mixed values at fixed positions, and list assignment ``[$a, $b] = $pair;`` can destructure it, but the array's size and per-position types are not tracked or enforced anywhere; ``array{int, string, bool}`` shapes exist only as PHPDoc annotations understood by static analyzers, not by the engine.

```php
<?php

    // Untyped and unchecked: any size, any types, at any position.
    $pair = [1, 'a'];
    [$number, $letter] = $pair;

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Tuple](https://en.wikipedia.org/wiki/Tuple)

## See Also
- [Python: Tuples and Sequences](https://docs.python.org/3/tutorial/datastructures.html#tuples-and-sequences)
- [Rust: The Tuple Type](https://doc.rust-lang.org/std/primitive.tuple.html)

## Related
- [List](/features/list.md)
- [Array, []](/features/array.md)
- [Record Type](/features/record-type.md)
- [Struct Type](/features/struct-type.md)
- [Multiple Return Values](/features/multiple-return-value.md)

