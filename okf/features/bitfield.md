---
type: "PHP Feature"
title: "Bitfield"
description: "A bitfield is a data structure that packs multiple related boolean flags or small integers into a single integer or sequence of bits, where each bit or group of bits represents a distinct value or state."
resource: "https://en.wikipedia.org/wiki/Bit_field"
tags: ["data structure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Bitfield

A bitfield is a data structure that packs multiple related boolean flags or small integers into a single integer or sequence of bits, where each bit or group of bits represents a distinct value or state.

Bitfields are stored as integers. They may be specified with the binary integer notation, which makes the individual bits visible.

```php
<?php

    $bitfield = 0b111; // 7

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Bit_field](https://en.wikipedia.org/wiki/Bit_field)

## See Also
- [How to use bitmasks in PHP](https://medium.com/codex/how-to-use-bitmasks-in-php-a594be597fd3)

## Related
- [Bitmask](/features/bitmask.md)
- [Bitwise Operators](/features/bitwise-operator.md)
- [Constant Combination](/features/constant-combinaison.md)
- [integer](/features/integer.md)

## Details
- Packagist: [thesmart/bitfield](https://packagist.org/packages/thesmart/bitfield)

