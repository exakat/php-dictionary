---
type: "PHP Feature"
title: "Identical Operator"
description: "Identical is the state of two variables, which contain the same data, with the same type."
resource: "https://www.php.net/manual/en/language.operators.comparison.php"
tags: ["feature", "operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Identical Operator

Identical is the state of two variables, which contain the same data, with the same type. It is the same as equality, without the type-juggling.

Identical operators are ``===``, ``!==``. The ``match()`` command also uses identical comparisons.

```php
<?php

var_dump(0 == "0000"); // true
var_dump(0 === "0");   // false
var_dump(0 === 0);     // true

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.comparison.php](https://www.php.net/manual/en/language.operators.comparison.php)

## See Also
- [How do the PHP equality (== double equals) and identity (=== triple equals) comparison operators differ?](https://www.geeksforgeeks.org/how-do-the-php-equality-double-equals-and-identity-triple-equals-comparison-operators-differ/)

## Related
- [Equal Operator](/features/equal.md)
- [Match](/features/match.md)
- [Relaxed Comparison](/features/relaxed-comparison.md)
- [array_search](/features/array_search.md)
- [strpos](/features/strpos.md)

