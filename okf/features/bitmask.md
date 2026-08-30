---
type: "PHP Feature"
title: "Bitmask"
description: "A bitmask is a single integer, or sequence of bits, used to set, clear, or check the state of specific bits in another integer, usually via bitwise operations."
resource: "https://en.wikipedia.org/wiki/Mask_(computing)"
tags: ["data structure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Bitmask

A bitmask is a single integer, or sequence of bits, used to set, clear, or check the state of specific bits in another integer, usually via bitwise operations.

```php
<?php

    $bitfield = 0b111; // 7
    $bitmask  = 0b100; // 4

    $result  = $bitfield | $bitmask; // 0b011 == 3

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Mask_(computing)](https://en.wikipedia.org/wiki/Mask_(computing))

## See Also
- [How to use bitmasks in PHP](https://medium.com/codex/how-to-use-bitmasks-in-php-a594be597fd3)

## Related
- [Bitfield](/features/bitfield.md)
- [Bitwise Operators](/features/bitwise-operator.md)

## Details
- Packagist: [gksh/bitmask](https://packagist.org/packages/gksh/bitmask)

