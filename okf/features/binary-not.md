---
type: "character"
title: "Binary Not Operator"
description: "The tilde ``~`` operator returns the opposite value, bit by bit."
resource: "https://www.php.net/manual/en/language.operators.bitwise.php"
tags: ["character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Binary Not Operator

The tilde ``~`` operator returns the opposite value, bit by bit. The value is first converted to an integer, then, negated. This operator returns an integer.

``~`` is often confused with ``!``, as some usages quite overlap.

```php
<?php

    $a = 3;     // 3 
    $b = ~$a;   // -4
    $c = !$a;   // false

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.bitwise.php](https://www.php.net/manual/en/language.operators.bitwise.php)

## See Also
- [PHP Tilde Operator (~): Understanding Its Function and Why ~$a Returns -($a + 1)](https://www.w3tutorials.net/blog/what-s-the-function-of-the-bitwise-operator-tilde/)

## Related
- [Not Operator](/features/not.md)
- [Tilde ~](/features/tilde.md)

