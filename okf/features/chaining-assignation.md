---
type: "classic bug"
title: "Chaining Assignation"
description: "Chaining assignation, also called chained assignment or assignment chaining, is the ability to assign the same value to several variables in a single expression, using successive ``=`` operators."
resource: "https://www.php.net/manual/en/language.operators.assignment.php"
tags: ["operator", "feature", "classic bug"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Chaining Assignation

Chaining assignation, also called chained assignment or assignment chaining, is the ability to assign the same value to several variables in a single expression, using successive ``=`` operators.

The assignment is evaluated from right to left: the rightmost value is assigned first, then the result propagates leftward. Each ``=`` operator returns the assigned value, which becomes the operand of the next assignment.

Note that magic methods such as ``__set()`` and ``__get()`` are never called during chaining assignments. Writing ``$a = $obj->b = 8;`` will not trigger ``__set()`` on ``$obj``.

```php
<?php

    // Basic chaining assignation
    $a = $b = $c = 0;
    // $a, $b, $c are all 0
    
    // Right-to-left evaluation
    $x = ($y = 5) + 3;
    // $y is 5, $x is 8
    
    // Chaining with a function call
    $arr = $count = count([1, 2, 3]);
    // both $arr and $count are 3

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.assignment.php](https://www.php.net/manual/en/language.operators.assignment.php)

## See Also
- [Operator Precedence](https://www.php.net/manual/en/language.operators.precedence.php)
- [Hidden Traps with Chained Assignments](https://www.exakat.io/hidden-traps-with-chained-assignments/)

## Related
- [Assignment](/features/assignment.md)
- [__set() Method](/features/__set.md)
- [__get() Method](/features/__get.md)
- [Chaining](/features/chaining.md)
- [Chaining New Without Parenthesis](/features/chaining-new-without-parenthesis.md)

