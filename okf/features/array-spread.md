---
type: "PHP Feature"
title: "Array Spread"
description: "Array spread is the ellipsis operator, applied to an array."
resource: "https://www.php.net/manual/en/migration74.new-features.php#migration74.new-features.standard.array-merge-no-args"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Array Spread

Array spread is the ellipsis operator, applied to an array. Then, the array itself is replaced by each of its own elements, as if each element was spread from the array.

```php
<?php

$a = [1,2,3];
$b = [...$a, 4,5];

// $b === [1,2,3,4,5];

?>
```

## Documentation
- [https://www.php.net/manual/en/migration74.new-features.php#migration74.new-features.standard.array-merge-no-args](https://www.php.net/manual/en/migration74.new-features.php#migration74.new-features.standard.array-merge-no-args)

## See Also
- [PHP Spread Operator](https://www.phptutorial.net/php-tutorial/php-spread-operator/)

## Related
- [Ellipsis](/features/ellipsis.md)
- [Three Dots](/features/three-dots.md)
- [Variadic](/features/variadic.md)

## Details
- PHP since: 7.4

