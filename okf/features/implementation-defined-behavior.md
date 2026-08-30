---
type: "concept"
title: "Implementation-Defined Behavior"
description: "Implementation-defined behavior is behavior that the language specification leaves to the engine to decide, on the condition that the engine picks one consistent option and documents it."
resource: "https://phplang.org/spec/03-terms-and-definitions.html"
tags: ["concept", "specification"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Implementation-Defined Behavior

Implementation-defined behavior is behavior that the language specification leaves to the engine to decide, on the condition that the engine picks one consistent option and documents it. Unlike undefined behavior, the result is always predictable once the specific engine and its documentation are known.

Examples include the size of an ``int``, 32 or 64 bits, depending on the platform, the precision of ``float`` operations, and the exact wording of engine-generated error messages.

```php
<?php

    // implementation-defined: the size of PHP_INT_MAX depends on the platform
    var_dump(PHP_INT_MAX); // int(9223372036854775807) on a 64-bit build
                           // int(2147483647) on a 32-bit build

?>
```

## Documentation
- [https://phplang.org/spec/03-terms-and-definitions.html](https://phplang.org/spec/03-terms-and-definitions.html)

## See Also
- [Implementation-defined behavior - Wikipedia](https://en.wikipedia.org/wiki/Undefined_behavior#Implementation-defined_behavior)

## Related
- [Behavior](/features/behavior.md)
- [Unspecified Behavior](/features/unspecified-behavior.md)
- [Undefined Behavior](/features/undefined-behavior.md)
- [PHP_INT_MAX](/features/php_int_max.md)

