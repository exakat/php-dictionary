---
type: "type"
title: "Exhaustiveness"
description: "Exhaustiveness is the property of a pattern-matching or ``switch``-like construct that guarantees every possible case has been handled, checked by the compiler or engine rather than left to the developer to remember."
resource: "https://en.wikipedia.org/wiki/Pattern_matching#Exhaustiveness"
tags: ["type", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Exhaustiveness

Exhaustiveness is the property of a pattern-matching or ``switch``-like construct that guarantees every possible case has been handled, checked by the compiler or engine rather than left to the developer to remember. A construct is exhaustive over a type when it is impossible to reach the end of it without matching a branch.

PHP's ``match`` is close but not exhaustive in this sense: it throws ``UnhandledMatchError`` at runtime if no arm applies, instead of refusing to compile a non-exhaustive match. That still closes an entire class of ``switch`` bugs, silent fallthrough and forgotten ``break``, but the gap is only caught when that code path executes, not before.

True exhaustiveness needs a closed set of cases to check against, which is why it usually appears together with sum types or algebraic data types, such as enumerations with associated values: the compiler can list every case of the type and verify the match covers all of them, or point at exactly the one that is missing. Pattern matching proposals that add structural matching over types and shapes are a step toward this, but full exhaustiveness checking requires the closed, enumerable type that a sum type provides.

```php
<?php

    enum Status { case Draft; case Published; case Archived; }

    // Not exhaustive: throws UnhandledMatchError if a new case is added later
    $label = match ($status) {
        Status::Draft => 'Draft',
        Status::Published => 'Live',
        // Status::Archived is missing
    };

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Pattern_matching#Exhaustiveness](https://en.wikipedia.org/wiki/Pattern_matching#Exhaustiveness)

## See Also
- [Pattern Matching RFC](https://wiki.php.net/rfc/pattern-matching)

## Related
- [Match](/features/match.md)
- [Switch](/features/switch.md)
- [Pattern Matching](/features/pattern-matching.md)
- [Structural Pattern Matching](/features/structural-pattern-matching.md)
- [Sum Type](/features/sum-type.md)
- [Algebraic Data Type](/features/algebraic-data-type.md)
- [UnhandledMatchError](/features/unhandledmatcherror.md)
- [Enumeration (enum)](/features/enum.md)
- [Type System](/features/type-system.md)

