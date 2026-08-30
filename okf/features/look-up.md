---
type: "concept"
title: "Look-up"
description: "A look-up is the operation of retrieving a value from a data structure by key, index, or identity."
resource: "https://en.wikipedia.org/wiki/Lookup_table"
tags: ["concept", "performance"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Look-up

A look-up is the operation of retrieving a value from a data structure by key, index, or identity. It is one of the most fundamental operations in programming, and its efficiency depends on the underlying structure: ``O(1)`` for hash tables, ``O(log n)`` for sorted arrays or trees, and ``O(n)`` for linear search.

The most common look-up structures are associative arrays, which use hash tables internally and offer average ``O(1)`` access by string or integer key. Objects, SPL data structures, and databases serve as look-up sources in larger systems.

Look-up tables are a specific pattern where a computation is replaced by a precomputed array indexed by the input. They trade memory for speed by eliminating repeated calculations.

Look-ups also appear implicitly in many places: variable resolution, function dispatch, method resolution, and class autoloading are all look-up operations performed by the engine itself.

Understanding look-up complexity matters for performance-sensitive code: choosing a hash-based structure over a sequential scan can change an ``O(n)`` bottleneck into an ``O(1)`` operation.

```php
<?php

    // Simple look-up in an associative array
    $countryNames = [
        'FR' => 'France',
        'DE' => 'Germany',
        'JP' => 'Japan',
    ];
    
    $code = 'FR';
    $name = $countryNames[$code] ?? 'Unknown'; // O(1) look-up
    
    // Look-up table replacing a computation
    $dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    $dayName = $dayNames[date('w')]; // index look-up instead of switch/match

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Lookup_table](https://en.wikipedia.org/wiki/Lookup_table)

## See Also
- [Hash table (Wikipedia)](https://en.wikipedia.org/wiki/Hash_table)
- [Big O notation (Wikipedia)](https://en.wikipedia.org/wiki/Big_O_notation)

## Related
- [Hash Table](/features/hash-table.md)
- [Array, []](/features/array.md)
- [Pattern](/features/pattern.md)
- [Big-o-notation](/features/big-o-notation.md)
- [Memoization](/features/memoization.md)

