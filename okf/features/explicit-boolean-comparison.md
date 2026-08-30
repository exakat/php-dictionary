---
type: "PHP Feature"
title: "Explicit Boolean Comparison"
description: "The Explicit Boolean Comparison is the syntax convention that includes a literal value when using a boolean as a condition."
resource: "https://www.php.net/manual/en/language.operators.comparison.php"
tags: ["comparison"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Explicit Boolean Comparison

The Explicit Boolean Comparison is the syntax convention that includes a literal value when using a boolean as a condition. 

Explicit boolean comparison may be redundant, when the compared value is already a boolean. PHP also does an implicit cast to boolean before using variables in conditions. 

On the other hand, type juggling may yield unexpected results, and lead to bugs.

```php
<?php

if ($var === true) {} 

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.comparison.php](https://www.php.net/manual/en/language.operators.comparison.php)

## See Also
- [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)
- [Type Juggling](https://www.php.net/manual/en/language.types.type-juggling.php)

## Related
- [Yoda Condition](/features/yoda.md)

