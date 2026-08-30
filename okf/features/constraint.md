---
type: "concept"
title: "Constraint"
description: "A constraint is a syntactic or semantic restriction on how a language construct may be used."
resource: "https://phplang.org/spec/03-terms-and-definitions.html"
tags: ["concept", "specification"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Constraint

A constraint is a syntactic or semantic restriction on how a language construct may be used. Constraints are the rules a program must satisfy beyond mere grammatical correctness: for example, a ``break`` statement is only valid inside a loop or ``switch``, and a class marked ``final`` cannot be extended.

Violating a constraint typically produces a compile-time error, though some constraints are only checked at run time. Code that violates a constraint the engine does not check at all is a common source of undefined behavior.

```php
<?php

    final class Sealed {}

    // violates a constraint: a final class cannot be extended
    class Broken extends Sealed {}

?>
```

## Documentation
- [https://phplang.org/spec/03-terms-and-definitions.html](https://phplang.org/spec/03-terms-and-definitions.html)

## See Also
- [PHP Constraints](https://modelina.org/docs/constraints/php)

## Related
- [Behavior](/features/behavior.md)
- [Undefined Behavior](/features/undefined-behavior.md)
- [Syntax Error](/features/syntax-error.md)
- [Final Keyword](/features/final.md)

