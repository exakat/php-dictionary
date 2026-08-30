---
type: "disambiguation"
title: "Plus +"
description: "``+`` is a native PHP operator, which has three usages: + The addition, as in mathematics, on numbers."
resource: "https://www.php.net/manual/en/language.operators.arithmetic.php"
tags: ["disambiguation", "character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Plus +

``+`` is a native PHP operator, which has three usages: 

+ The addition, as in mathematics, on numbers. This works on integers and floats.
+ The merging of arrays. This merge sets the keys once, then omits the next values. This is distinct from ``array_merge()``.
+ The + sign in front of a number, to make it explicitly positive. This is optional, and may be repeated.

```php
<?php

    $a = 1 + 2; // 3
    
    $b = [1, 2] + [3, 4, 5]; // [1,2, 5]
    
    $c = +6; // 6 

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.arithmetic.php](https://www.php.net/manual/en/language.operators.arithmetic.php)

## See Also
- [Another cast to int](https://php-tips.readthedocs.io/en/latest/tips/cast_to_int.html)

## Related
- [array_merge()](/features/array_merge.md)
- [Sign](/features/sign.md)
- [Addition](/features/addition.md)
- [Minus -](/features/minus.md)

