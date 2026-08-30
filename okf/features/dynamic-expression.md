---
type: "PHP Feature"
title: "Dynamic Expression"
description: "A dynamic expression is an expression that is only wholly defined at execution time."
resource: "https://www.php.net/manual/en/language.expressions.php"
tags: ["pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Dynamic Expression

A dynamic expression is an expression that is only wholly defined at execution time. It needs to collect pieces of information before processing. This applies to elements that are usually static, such as class, function, method, constants, not to parameters which are expected to be variable.

```php
<?php

    $config = new ConfigFile();

    $function = $config->sortingMethod; // sort, or rsort
    $function($array);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.expressions.php](https://www.php.net/manual/en/language.expressions.php)

## See Also
- [Variable variables](https://www.php.net/manual/en/language.variables.variable.php)
- [Variable Functions](https://www.php.net/manual/en/functions.variable-functions.php)

## Related
- [Static Expression](/features/static-expression.md)

