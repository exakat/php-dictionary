---
type: "concept"
title: "Unused"
description: "Unused is a state of a structure."
resource: "https://en.wikipedia.org/wiki/Dead_code"
tags: ["concept", "dead code", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Unused

Unused is a state of a structure. It has been declared, defined or created, but it is not used, called, read. This is a characteristic of dead code.

Being unused happens to constants, variables, parameters, properties, methods, classes, traits, interfaces, use expressions.

It may also happen to results: some piece of data is calculated, returned, but then, not used. This often leads to a slower execution.

It also happens to propagate: removing an unused function may actually create another unused function, which was only called by the first one.

```php
<?php

    const A = 1;
    const B = 2;

    echo A;

    // B is defined but not used

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Dead_code](https://en.wikipedia.org/wiki/Dead_code)

## See Also
- [Psalm: UnusedClass](https://psalm.dev/docs/running_psalm/issues/UnusedClass/)

## Related
- [Used](/features/used.md)
- [Useless](/features/useless.md)
- [Propagation](/features/propagation.md)

