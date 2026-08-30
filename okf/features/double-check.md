---
type: "concept"
title: "Double Check"
description: "A double check happens when the same characteristics is checked twice."
resource: "https://en.wikipedia.org/wiki/Defensive_programming"
tags: ["concept", "practice"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Double Check

A double check happens when the same characteristics is checked twice. 

Double check evolve naturally from code that does not take into account the entire system it is residing in.

Double check may be explicit, or implicit. The explicit are plainly written in the code, while implicit double check requires context knowledge. 

Double checks are a feature of defensive programming, where everything is checked as needed, to ensure that a previous omission does not go unchecked, even at the cost of effort duplication.

```php
<?php

// This condition is a double check with the one inside the function foo()
// This doublecheck uses 2 identical conditions, with different syntax
if ($j >= 0) {
    foo($j);
}

function foo(int $i): ?int {
    if ($i < 0) {
        return null;
    }
    
    return $i + 1;
}

// Foreach() checks for $items to be empty, and skips itself in that case.
// the empty() check is duplicate
if (!empty($items)) {
    foreach ($items as $item) {
        doSomething();
    }
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Defensive_programming](https://en.wikipedia.org/wiki/Defensive_programming)

## See Also
- [Double-checked locking](https://en.wikipedia.org/wiki/Double-checked_locking)
- [OWASP: Input Validation Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Input_Validation_Cheat_Sheet.html)

## Related
- [Defensive Programming](/features/defensive-programming.md)
- [Useless](/features/useless.md)

