---
type: "token"
title: "Double Arrow"
description: "The double arrow is the PHP token ``=>``."
resource: "https://www.php.net/manual/en/language.types.array.php"
tags: ["token"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Double Arrow

The double arrow is the PHP token ``=>``. It is an arrow, and the equal sign as body of the arrow gives it its name of double arrow.

The double arrow is used in several situations: 

+ With arrow functions: ``fn($a) => $a + 1;``
+ In arrays, to distinguish the key from the value: ``['a' => 3]``
+ In list, to distinguish the key from the value: ``['a' => $b] = ['a' => 4]``
+ In yield, to distinguish the key from the value: ``yield 'a' => $b;``
+ In property hooks, to start the body of the hook: ``private $p { get => $this->p; }``

``=>`` has no relationship with ``<=``, which is a comparison operator, nor with ``->``, which is the object operator.

```php
<?php

    $array = ['a' => 3, 3];

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.array.php](https://www.php.net/manual/en/language.types.array.php)

## See Also
- [List of Parser Tokens](https://www.php.net/manual/en/tokens.php)
- [Understanding the Difference between -> and => in PHP and Laravel](https://medium.com/@tajbidtousif/understanding-the-difference-between-and-in-php-and-laravel-60f8a38fc5be)

## Related
- [Arrow Functions](/features/arrow-function.md)
- [List](/features/list.md)
- [Yield](/features/yield.md)
- [Property Hook](/features/property-hook.md)
- [Comparison](/features/comparison.md)
- [Object Operator ->](/features/object-operator.md)

