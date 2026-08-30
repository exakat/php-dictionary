---
type: "PHP Feature"
title: "Short Ternary Operator"
description: "The expression ``(expr1) ?: (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to ``empty()``, and ``expr3`` if ``expr1`` evaluates to ``false``."
resource: "https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary"
tags: ["feature", "operator", "syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Short Ternary Operator

The expression ``(expr1) ?: (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to ``empty()``, and ``expr3`` if ``expr1`` evaluates to ``false``.

It is a short version of the ternary operator, and it is often used to set default values in a concise way.

```php
<?php

    $action = $_POST['action'] ?: 'default';

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary)

## See Also
- [Shorthand Comparisons in PHP](https://stitcher.io/blog/shorthand-comparisons-in-php)

## Related
- [Ternary Operator](/features/ternary.md)
- [Coalesce Operator](/features/coalesce.md)
- [Empty](/features/empty.md)
- [False](/features/false.md)

## Details
- PHP since: 5.3+

