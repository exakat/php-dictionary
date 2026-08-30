---
type: "PHP Feature"
title: "Yoda Condition"
description: "Yoda condition is a way to write a condition by using any literal value on the left, instead of the right."
resource: "https://en.wikipedia.org/wiki/Yoda_conditions"
tags: ["coding convention", "best practice"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Yoda Condition

Yoda condition is a way to write a condition by using any literal value on the left, instead of the right.

This prevents errors where the comparison operator is shortened, and turned into an assignation, which is usually true.

```php
<?php

    // Yoda condition
    if (0 == $a) {}
    
    // Assignation, instead of comparison and bug
    if ($a = 0) {}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Yoda_conditions](https://en.wikipedia.org/wiki/Yoda_conditions)

## See Also
- [Why using Yoda conditions you should probably not be](https://dev.to/greg0ire/why-using-yoda-conditions-you-should-probably-not)
- [Rule yoda_style](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html)

## Related
- [Coding Conventions](/features/coding-convention.md)
- [Pattern](/features/pattern.md)
- [Condition](/features/condition.md)
- [Explicit Boolean Comparison](/features/explicit-boolean-comparison.md)

