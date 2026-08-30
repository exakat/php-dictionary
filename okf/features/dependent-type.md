---
type: "type"
title: "Dependent Type"
description: "A dependent type is a type whose definition depends on a value."
resource: "https://en.wikipedia.org/wiki/Dependent_type"
tags: ["type", "dependent type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Dependent Type

A dependent type is a type whose definition depends on a value. 

PHP does not support dependent type explicitly, though several situations behaves in a similar manner.

```php
<?php

    print abs(-1); // 1, as integer
    print abs(-1.33); // 1.33, as float

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Dependent_type](https://en.wikipedia.org/wiki/Dependent_type)

## See Also
- [The Future of Programming is Dependent Types](https://medium.com/background-thread/the-future-of-programming-is-dependent-types-programming-word-of-the-day-fcd5f2634878)

## Related
- [Type System](/features/type.md)
- [Type Inference](/features/type-inference.md)

