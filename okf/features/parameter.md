---
type: "PHP Feature"
title: "Parameter"
description: "A parameter is a variable in a method definition."
resource: "https://www.php.net/manual/en/functions.arguments.php"
tags: ["parameter", "function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Parameter

A parameter is a variable in a method definition. They have a name, and may have a default value and type. They may also be passed by reference, or by value, which is the default way.

```php
<?php

function foo($parameter) {}

$argument = 1;
foo($argument);

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.arguments.php](https://www.php.net/manual/en/functions.arguments.php)

## See Also
- [PHP Default Parameters](https://www.phptutorial.net/php-tutorial/php-default-parameters/)
- [How to create default function parameter in PHP?](https://www.geeksforgeeks.org/php/how-to-create-default-function-parameter-in-php/)

## Related
- [Argument](/features/argument.md)
- [Comma](/features/comma.md)
- [Constant Scalar Expression](/features/constant-scalar-expression.md)
- [Default Value](/features/default-value.md)
- [Inherited Variable](/features/inherited-variable.md)
- [New In Initializers](/features/new-in-initializer.md)
- [Optional Parameter](/features/optional-parameter.md)

