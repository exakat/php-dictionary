---
type: "PHP Feature"
title: "Inequality"
description: "Inequalities are the mathematical comparison of values, with the ``>``, ``>=``, ``<`` and ``<=`` operators."
resource: "https://www.php.net/manual/en/language.operators.comparison.php"
tags: ["math", "comparison"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Inequality

Inequalities are the mathematical comparison of values, with the ``>``,  ``>=``,  ``<`` and ``<=`` operators.

Unlike the equality operators, they do not have a strict version, which takes into account the type of the values. Hence, the compared values are always adapted to each other's type.

```php
<?php

// displays false
var_dump("3" > 3);

// displays true
var_dump(4 >= 0)

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.comparison.php](https://www.php.net/manual/en/language.operators.comparison.php)

## See Also
- [PHP hack: Testing for inequality in switch statements](https://dev.to/zenulabidin/php-hack-testing-for-inequality-in-switch-statements-253d)

## Related
- [Equal Operator](/features/equal.md)

