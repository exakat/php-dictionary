---
type: "keyword"
title: "Default"
description: "``default`` is a PHP keyword, used with ``switch()`` and ``match()`` structures."
resource: "https://www.php.net/manual/en/control-structures.switch.php"
tags: ["keyword", "disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Default

``default`` is a PHP keyword, used with ``switch()`` and ``match()`` structures. It represents any case that was not already considered.

In a ``switch()`` statement, ``default`` is optional, and may be placed anywhere among the ``case`` labels, though it is conventionally written last. It is only executed when none of the ``case`` values matches the tested expression, using loose comparison, ``==``. If a ``switch()`` has no ``default`` and no ``case`` matches, the statement simply does nothing, and execution continues after the block. Unlike ``case``, ``default`` never needs a value, since it always matches by exclusion.

In a ``match()`` expression, introduced in version 8.0, ``default`` plays the same role, but the comparison uses strict equality ``===``, and a missing ``default`` combined with no matching arm throws an ``UnhandledMatchError`` at runtime, rather than doing nothing. Because ``match()`` is an expression, its ``default`` arm must also return a value, just like every other arm.

Static analysis tools often flag a ``switch()`` without a ``default`` case as a potential source of silently unhandled values, especially when the tested expression can later gain new possible values, such as an enum case or a class constant.

```php
<?php

    switch ($i) {
        case 0:
            echo 'i equals 0';
            break;
        case 1:
            echo 'i equals 1';
            break;
        default:
            echo 'i is not 0 nor 1';
            break;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.switch.php](https://www.php.net/manual/en/control-structures.switch.php)

## See Also
- [PHP match vs. switch – What's the Difference?](https://www.designcise.com/web/tutorial/what-is-the-difference-between-match-and-switch-in-php)
- [Switch vs Match in PHP: Choosing the Right Control Structure for Your Code](https://www.themagentoblog.com/2023/07/17/switch-vs-match-in-php-choosing-the-right-control-structure-for-your-code/)

## Related
- [Switch](/features/switch.md)
- [Match](/features/match.md)
- [Case](/features/case.md)
- [Default Value](/features/default-value.md)
- [Switch Case](/features/switch-case.md)
- [Switch Default](/features/switch-default.md)

