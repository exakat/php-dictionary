---
type: "concept"
title: "Overflow"
description: "Overflow happens when a value goes beyond a limit: out of its range of existence, the behavior of the value is now unknown."
resource: "https://en.wikipedia.org/wiki/Integer_overflow"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Overflow

Overflow happens when a value goes beyond a limit: out of its range of existence, the behavior of the value is now unknown.

Overflow happens with integers, limited to ``PHP_INT_MAX`` and ``PHP_INT_MIN``, floats ``PHP_FLOAT_MAX`` and ``PHP_FLOAT_MIN``. 

Other situations, such as accessing an array element or a string character beyond its last element, defaults to returning ``null``.

There is a native class called ``OverflowException``, which is emitted when a number gets too large, and may be caught.

```php
<?php

    $a = PHP_INT_MAX;
    $b = (int) ($a +  1);
    
    echo $a.PHP_EOL;
    echo $b;

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Integer_overflow](https://en.wikipedia.org/wiki/Integer_overflow)

## See Also
- [Integers](https://www.php.net/manual/en/language.types.integer.php)
- [How PHP Decides an Integer Is Too Big — Float Coercion and the Silent Overflow](https://medium.com/@annxsa/how-php-decides-an-integer-is-too-big-float-coercion-and-the-silent-overflow-e14845e15f02)

## Related
- [Null](/features/null.md)
- [RangeException](/features/rangeexception.md)
- [Underflow](/features/underflow.md)
- [OverflowException](/features/overflowexception.md)
- [Standard PHP Library (SPL)](/features/spl.md)
- [Edge Case](/features/edge-case.md)

