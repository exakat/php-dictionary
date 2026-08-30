---
type: "concept"
title: "Destructuring"
description: "Destructuring is a general programming concept where the individual elements of a compound value, such as an array, a list, or an object, are extracted in one step and bound to separate variables, instead of being accessed one at a time by index or property."
resource: "https://en.wikipedia.org/wiki/Assignment_(computer_science)#Assignment_of_multiple_values"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Destructuring

Destructuring is a general programming concept where the individual elements of a compound value, such as an array, a list, or an object, are extracted in one step and bound to separate variables, instead of being accessed one at a time by index or property.

Many languages have dedicated destructuring syntax that also supports skipping elements, providing default values, capturing remaining elements, and destructuring nested structures in a single expression.

Destructuring is provided by ``list()`` and its short array syntax ``[ ]`` on the left side of an assignment, and by ``foreach()`` when iterating over arrays of arrays. PHP does not support destructuring of arbitrary objects, though ``list()`` may be combined with ArrayAccess-implementing objects.

```php
<?php

    // array destructuring, PHP style
    [$a, $b, $c] = [1, 2, 3];

    // skipping an element
    [$first, , $third] = [1, 2, 3];

    // keyed destructuring
    ['name' => $name, 'age' => $age] = ['name' => 'Ann', 'age' => 30];

    // nested destructuring
    [[$x, $y], [$z]] = [[1, 2], [3]];

    // destructuring while iterating
    foreach ([[1, 2], [3, 4]] as [$left, $right]) {
        echo $left + $right, "\n";
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Assignment_(computer_science)#Assignment_of_multiple_values](https://en.wikipedia.org/wiki/Assignment_(computer_science)#Assignment_of_multiple_values)

## See Also
- [Destructuring assignment (MDN, JavaScript reference used as general illustration)](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment)

## Related
- [List](/features/list.md)
- [Array, []](/features/array.md)
- [Multiple Return Values](/features/multiple-return-value.md)
- [Structural Pattern Matching](/features/structural-pattern-matching.md)
- [Tuple](/features/tuple.md)
- [Assignment](/features/assignment.md)

