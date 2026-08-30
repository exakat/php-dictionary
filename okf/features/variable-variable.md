---
type: "PHP Feature"
title: "Variable Variables"
description: "Variable variables refer to a feature that allows to use the value of a variable as the name of another variable."
resource: "https://www.php.net/manual/en/language.variables.variable.php"
tags: ["feature", "variable"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Variable Variables

Variable variables refer to a feature that allows to use the value of a variable as the name of another variable. It provides a way to dynamically create and access variables based on runtime values.

Variable variables are denoted by the double dollar sign ``$$`` followed by the name of the variable stored in another variable. More dollar signs may be compounded, though it is rare.

```php
<?php

$a = 'b';
$b = 'c';

echo $$b;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.variables.variable.php](https://www.php.net/manual/en/language.variables.variable.php)

## See Also
- [The Dangers of PHP's $$](https://andy-carter.com/blog/the-dangers-of-php-variable-variables)

## Related
- [Variables](/features/variable.md)
- [Static Variables](/features/static-variable.md)
- [compact()](/features/compact.md)
- [extract()](/features/extract.md)
- [Global Variables](/features/global-variable.md)
- [global Scope](/features/global.md)
- [$GLOBALS](/features/$globals.md)
- [Superglobal Variables](/features/superglobal.md)
- [Dollar $](/features/dollar.md)
- [Dynamic](/features/dynamic.md)

