---
type: "PHP Feature"
title: "hypot()"
description: "``hypot()`` is a PHP native function, that computes the length of the hypotenuse on a right triangle, given the length of the two other sides."
resource: "https://www.php.net/manual/en/function.hypot.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# hypot()

``hypot()`` is a PHP native function, that computes the length of the hypotenuse on a right triangle, given the length of the two other sides.

``hypot()`` is the same as calculating ``sqrt(pow($a, 2) + pow($b, 2))`` or ``sqrt($a ** 2 + $b ** 2)``. It is also the length of a segment from the origin to a point of coordinates ``($a, $b)``.

```php
<?php

    $x = 3;
    $y = 4;
    var_dump(hypot($x, $y));

?>
```

## Documentation
- [https://www.php.net/manual/en/function.hypot.php](https://www.php.net/manual/en/function.hypot.php)

## See Also
- [Pythagorean theorem](https://en.wikipedia.org/wiki/Pythagorean_theorem)

## Related
- [sqrt()](/features/sqrt.md)

