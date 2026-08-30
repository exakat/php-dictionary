---
type: "concept"
title: "Constant Scalar Expression"
description: "A constant scalar expression is an expression that can be evaluated at compile time and consists only of scalar values, constants, and some operators operators."
resource: "https://wiki.php.net/rfc/const_scalar_exprs"
tags: ["concept", "constant", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Constant Scalar Expression

A constant scalar expression is an expression that can be evaluated at compile time and consists only of scalar values, constants, and some operators operators. 

Constant scalar expressions are used to initialize constants, and default values for parameters and properties.

```php
<?php

    const A = 1;
    const B = A + 10;

?>
```

## Documentation
- [https://wiki.php.net/rfc/const_scalar_exprs](https://wiki.php.net/rfc/const_scalar_exprs)

## See Also
- [PHP: Syntax - Manual](https://www.php.net/manual/en/language.constants.syntax.php)
- [PHP RFC: New in Initializers](https://wiki.php.net/rfc/new_in_initializers)

## Related
- [Constants](/features/constant.md)
- [Parameter](/features/parameter.md)
- [Scalar Types](/features/scalar-type.md)
- [Expression](/features/expression.md)

## Details
- PHP since: 5.6+

