---
type: "PHP Feature"
title: "Byte"
description: "A byte is a unit of digital information storage that typically consists of 8 bits."
resource: "https://en.wikipedia.org/wiki/Byte"
tags: ["string"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Byte

A byte is a unit of digital information storage that typically consists of 8 bits. It is the fundamental building block for representing data in computers. A byte can store values ranging from 0 to 255, in an unsigned 8-bit representation.

PHP uses bytes when manipulating strings. Bytes are characters, as long as the string uses ASCII representation, which is by default. Characters might be larger than a byte, and they become multi-bytes.

```php
<?php

    $string = abcd;

    echo strlen($string); // 4

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Byte](https://en.wikipedia.org/wiki/Byte)

## See Also
- [Byte | Definition & Facts | Britannica](https://www.britannica.com/technology/byte)
- [What are Bits and Bytes?](https://www.w3schools.com/programming/prog_bits_and_bytes.php)

## Related
- [Character](/features/character.md)
- [Multi-byte](/features/multi-byte.md)
- [American Standard Code for Information Interchange (ASCII)](/features/ascii.md)

