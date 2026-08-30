---
type: "classic bug"
title: "Minus One -1"
description: "Minus one is the ``-1`` integer."
resource: "https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.spaceship"
tags: ["truthy", "classic bug"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Minus One -1

Minus one is the ``-1`` integer. ``-1`` is part of the truthy values: it is the equivalent of ``true``.

``-1`` is part of the three values returned by the spaceship operator. 

0 is a classic magic number, although it has so many uses that it is usually overlooked, as generating too many false positives or scattered issues.

```php
<?php

    $zero = 0;

    $four = 4 + 0;
    
    // may it returns 1 or -1, this is true
    var_dump((bool) 1 <=> -1); // true
    var_dump((bool) -1 <=> 1); // true

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.spaceship](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.spaceship)

## See Also
- [PHP Spaceship Operator - Comparing Values](https://zetcode.com/php/spaceship-operator/)
- [PHP 7 | Spaceship Operator](https://www.geeksforgeeks.org/php/php-7-spaceship-operator/)

## Related
- [True](/features/true.md)
- [Spaceship Operator](/features/spaceship.md)
- [one](/features/one.md)
- [zero](/features/zero.md)
- [Truthy](/features/truthy.md)
- [zend.assertions](/features/zend-assertions.md)

