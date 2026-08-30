---
type: "concept"
title: "List Comprehension"
description: "A list comprehension is an expression-level syntax for building a new collection by describing it declaratively: a source, a transformation, and an optional filter, all in a single readable expression, as in Python's ``[x * 2 for x in items if x > 0]`` or Haskell's ``[x * 2 | x <- items, x > 0]``."
resource: "https://en.wikipedia.org/wiki/List_comprehension"
tags: ["concept", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# List Comprehension

A list comprehension is an expression-level syntax for building a new collection by describing it declaratively: a source, a transformation, and an optional filter, all in a single readable expression, as in Python's ``[x * 2 for x in items if x > 0]`` or Haskell's ``[x * 2 | x <- items, x > 0]``. It is meant to read like the set-builder notation it is named after.

Because it is a single expression rather than a sequence of statements, a list comprehension can be nested, assigned, or passed as an argument directly, and many languages let the compiler fuse the filtering and mapping steps into a single pass.

PHP has no list comprehension syntax. The same result requires either an explicit loop that pushes onto an accumulator array, or a chain of ``array_map()`` and ``array_filter()`` calls, both of which are statements or nested function calls rather than a single declarative expression, and ``array_filter()`` followed by ``array_map()`` walks the array twice unless carefully reordered.

```php
<?php

    // PHP equivalent of [x * 2 for x in items if x > 0]
    $doubled = array_map(
        fn ($x) => $x * 2,
        array_filter($items, fn ($x) => $x > 0)
    );

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/List_comprehension](https://en.wikipedia.org/wiki/List_comprehension)

## See Also
- [array_filter()](https://www.php.net/manual/en/function.array-filter.php)

## Related
- [array_map()](/features/array_map.md)
- [Generator](/features/generator.md)
- [Functional Programming](/features/functional-programming.md)

