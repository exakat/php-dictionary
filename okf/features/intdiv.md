---
type: "PHP Feature"
title: "intdiv()"
description: "``intdiv()`` is a PHP native function, that computes the integer division between two integer."
resource: "https://www.php.net/manual/en/function.intdiv.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# intdiv()

``intdiv()`` is a PHP native function, that computes the integer division between two integer. The integer division of ``a`` by ``b`` express the number ``a`` as a function of ``b``, such as ``a = k * b + c``.

``intdiv()`` returns the ``k`` value, which is the quotient. It is an integer. The remainder, ``c`` is accessible with the modulo operator ``%``. There is no operator equivalent to ``intdiv()``.

The integer division is a special case of the division, which works on decimal numbers.

```php
<?php

$a = 15;

$b = 6;

$k = intdiv($a, $b); // 2 
$c = $a % $b; // 3

echo $k * $b + $c;

?>
```

## Documentation
- [https://www.php.net/manual/en/function.intdiv.php](https://www.php.net/manual/en/function.intdiv.php)

## See Also
- [Modulo (Wikipedia)](https://en.wikipedia.org/wiki/Modulo)
- [fdiv](https://www.php.net/manual/en/function.fdiv.php)

## Related
- [Modulo](/features/modulo.md)
- [Division](/features/division.md)

