---
type: "classic bug"
title: "Leading Zero Means Octal"
description: "PHP integer syntax has some special formats for binary, octal and hexadecimal formats."
resource: "https://www.php.net/manual/en/language.types.integer.php"
tags: ["integer", "format", "classic bug"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Leading Zero Means Octal

PHP integer syntax has some special formats for binary, octal and hexadecimal formats. In particular, an integer starting with 0 is in octal format. This leads to easy confusion, as the leading 0 is considered neutral.

A new notation with an 0 was introduced in version 8.0: it makes the octal format just as explicit as the binary or the hexadecimal one. 

Octal numbers are mainly used with the ``mkdir()`` function, and special math domains.

```php
<?php

    echo 017; // displays 15
    echo 0o17; // displays 15
    
    echo 17; // displays 17
    
    echo 0x17; // displays 23 (hexadecimal format)

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.integer.php](https://www.php.net/manual/en/language.types.integer.php)

## See Also
- [PHP 8.1: Explicit Octal numeral notation](https://php.watch/versions/8.1/explicit-octal-notation)

## Related
- [integer](/features/integer.md)
- [Octal Integer](/features/octal-integer.md)
- [Numeric Base](/features/numeric-base.md)
- [Format](/features/format.md)

## Details
- PHP since: 8.1

