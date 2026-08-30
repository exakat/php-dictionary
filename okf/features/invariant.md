---
type: "type"
title: "Type Invariant"
description: "A type invariant is a data container whose type can't change between a parent class and a child class."
resource: "https://en.wikipedia.org/wiki/Covariance_and_contravariance_(computer_science)"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Type Invariant

A type invariant is a data container whose type can't change between a parent class and a child class. This is the case of properties.

The child type must be a subtype of the parent type and the parent type must be a subtype of the child type. This implies that the types are equal.

Invariance is the third type of variance, with contravariance and covariance.

```php
<?php

class p {
    protected string $p;
}

class q extends p {
    // same a above
    protected string $p;
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Covariance_and_contravariance_(computer_science)](https://en.wikipedia.org/wiki/Covariance_and_contravariance_(computer_science))

## See Also
- [Type variance in PHP](https://www.npopov.com/2021/11/08/Type-variance-in-PHP.html)

## Related
- [Covariance](/features/type-covariance.md)
- [Contravariance](/features/type-contravariance.md)

