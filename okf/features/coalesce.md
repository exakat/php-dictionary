---
type: "PHP Feature"
title: "Coalesce Operator"
description: "The coalesce operator ``??``, also called the null coalesce or null ternary operator, returns its first operand if it is set and not NULL."
resource: "https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce"
tags: ["operator", "error suppression"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Coalesce Operator

The coalesce operator ``??``, also called the null coalesce or null ternary operator, returns its first operand if it is set and not NULL. Otherwise it will return its second operand. It was introduced in version 7.0 to replace the common but verbose ``isset($x) ? $x : $default`` pattern, while also silencing the notice that would normally be raised when reading an undefined variable, array key, or property.

The operator is chainable: ``$a ?? $b ?? $c`` evaluates left to right and returns the first operand that is set and not NULL, falling through to the last operand otherwise. Since PHP 7.4, it also has an assignment form, ``??=``, which assigns the right-hand value only if the left-hand variable is currently unset or NULL, making it convenient for lazily initializing defaults.

Because ``??`` only checks for NULL, it is not a general-purpose replacement for the ternary operator: falsy-but-non-NULL values such as ``0``, ``""``, or ``false`` are returned unchanged rather than replaced by the fallback.

```php
<?php

    class X { }
    
    // instantiation
    $x = new X;
    
    // cloning
    $y = clone $x;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce)

## See Also
- [Null Coalescing Operator (??)](https://riptutorial.com/php/example/7164/null-coalescing-operator-----)
- [PHP ternary operator vs null coalescing operator](https://stackoverflow.com/questions/34571330/php-ternary-operator-vs-null-coalescing-operator)

## Related
- [Ternary Operator](/features/ternary.md)
- [Colon](/features/colon.md)
- [If Then Else](/features/if-then.md)
- [Short Ternary Operator](/features/short-ternary.md)
- [Conditional Structures](/features/conditional-structure.md)
- [Double](/features/double.md)
- [Nullsafe](/features/nullsafe.md)
- [Question Mark ?](/features/question-mark.md)
- [Streamlining](/features/streamlining.md)

## Details
- PHP since: 7.0+

