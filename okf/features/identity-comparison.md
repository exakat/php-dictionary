---
type: "PHP Feature"
title: "Identity Comparison"
description: "The identity comparison ``===`` compares two values, using their respective types, and then, their value."
resource: "https://www.php.net/manual/en/language.operators.comparison.php"
tags: ["comparison"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Identity Comparison

The identity comparison ``===`` compares two values, using their respective types, and then, their value. Both must be identical to pass.

There is also the ``!==`` operator, for distinct values: either the type, or the value.

```php
<?php

var_dump(1 === 1);    // true

var_dump(1 === true); // false
var_dump(1 == true);  // true

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.comparison.php](https://www.php.net/manual/en/language.operators.comparison.php)

## See Also
- [Identity (object-oriented programming) (Wikipedia)](https://en.wikipedia.org/wiki/Identity_(object-oriented_programming))
- [spl_object_id](https://www.php.net/manual/en/function.spl-object-id.php)

## Related
- [Comparison](/features/comparison.md)
- [Hash Comparisons](/features/hash-comparison.md)
- [Identity](/features/identity.md)

