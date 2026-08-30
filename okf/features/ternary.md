---
type: "PHP Feature"
title: "Ternary Operator"
description: "The expression ``(expr1) ?"
resource: "https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary"
tags: ["feature", "operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Ternary Operator

The expression ``(expr1) ? (expr2) : (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to true, and ``expr3`` if ``expr1`` evaluates to false.

The ternary operator is PHP's only operator that takes three operands. It has existed since the earliest versions of PHP.

Nesting ternary expressions used to be left-associative by default, which often led to confusing and buggy code. PHP 7.4 deprecated nesting ternary expressions without explicit parentheses, and PHP 8.0 turned this into a compile-time error: each nested ternary must now be wrapped in parentheses to clarify the intended evaluation order.

The ternary operator is closely related to the short ternary operator ``?:``, which omits ``expr2`` and returns ``expr1`` itself when it is truthy, and to the null coalescing operator ``??``, which tests for ``null`` instead of truthiness.

The ternary operator doesn't work with references: it only returns values, and the ``&`` operator leads to compilation errors.

```php
<?php

    $action = (empty($_POST['action'])) ? 'default' : $_POST['action'];

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary)

## See Also
- [Ternary Operator in PHP | How to use the PHP Ternary Operator](https://www.codementor.io/@sayantinideb/ternary-operator-in-php-how-to-use-the-php-ternary-operator-x0ubd3po6)

## Related
- [Short Ternary Operator](/features/short-ternary.md)
- [Coalesce Operator](/features/coalesce.md)
- [If Then Else](/features/if-then.md)
- [Binary Operator](/features/binary-operator.md)
- [Colon](/features/colon.md)
- [Operand](/features/operand.md)
- [Unary Operator](/features/unary.md)
- [Nesting](/features/nesting.md)
- [References](/features/reference.md)

## Details
- PHP since: 7.0+

