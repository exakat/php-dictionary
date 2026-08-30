---
type: "token"
title: "Ellipsis"
description: "Ellipsis operator is the ``...`` operator."
resource: "https://en.wikipedia.org/wiki/Ellipsis"
tags: ["token", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Ellipsis

Ellipsis operator is the ``...`` operator. It also bears the name of three dots, and even ``dot dot dot``. 

It is used to implements the array spread feature, and the variadic arguments. The actual feature depends on the context. 

Ellipsis is the classic punctuation description of the operator, and it applies to both features.

```php
<?php

$array = [1, 2, 3];
$more = [...$array, 4, 5];

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Ellipsis](https://en.wikipedia.org/wiki/Ellipsis)

## See Also
- [The many uses of ... ellipsis operator in PHP](https://www.amitmerchant.com/the-many-uses-of-ellipsis-operator-in-php/)
- [The Splat Operator In PHP](https://www.hashbangcode.com/article/splat-operator-php)

## Related
- [Array Spread](/features/array-spread.md)
- [Variadic](/features/variadic.md)
- [Three Dots](/features/three-dots.md)

## Details
- PHP since: 5.6

