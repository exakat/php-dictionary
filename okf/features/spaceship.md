---
type: "PHP Feature"
title: "Spaceship Operator"
description: "Spaceship operator is an operator which reports if a value is larger, equal or smaller than another value."
resource: "https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.spaceship-op"
tags: ["operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Spaceship Operator

Spaceship operator is an operator which reports if a value is larger, equal or smaller than another value. It returns 1, 0 or -1 in each case, respectively.

The spaceship operator may be replaced by a ``-`` minus sign, if the compared values are correct. It may also be replaced with ``!=``, since ``-1`` and ``1`` are both cast to ``true``.

The spaceship operator got its name from its resemblance to a flying saucer. Battleship operator, or death star operator do not exist.

```php
<?php

    $a = 1;
    $b = 3;
    
    print $a <=> $b;

?>
```

## Documentation
- [https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.spaceship-op](https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.spaceship-op)

## See Also
- [Weird operators in PHP](https://www.exakat.io/en/weird-operators-in-php/)
- [What Is the PHP Spaceship Operator?](https://www.designcise.com/web/tutorial/what-is-the-php-spaceship-operator)

## Related
- [Comparison](/features/comparison.md)
- [Minus One -1](/features/minus-one.md)

## Details
- PHP since: 7.0

