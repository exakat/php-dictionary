---
type: "PHP Feature"
title: "Octal Integer"
description: "Integers can be specified in octal, or base 8, notation."
resource: "https://www.php.net/manual/en/language.types.integer.php"
tags: ["integer"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Octal Integer

Integers can be specified in octal, or base 8, notation. Octal integer syntax starts with ``0o``, zero-o, and only contains digits from 0 to 7.

Initially, octal integers were formatted by simply starting with a initial 0. This features is still available, yet should be replaced with the less confusing syntax with ``0o``.

```php
<?php

    // 12
    $octal = 0O14;
    $octal = 014;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.integer.php](https://www.php.net/manual/en/language.types.integer.php)

## See Also
- [PHP 8.1: Explicit Octal numeral notation](https://php.watch/versions/8.1/explicit-octal-notation)

## Related
- [integer](/features/integer.md)
- [Binary Integer](/features/binary-integer.md)
- [Hexadecimal Integer](/features/hexadecimal-integer.md)
- [Leading Zero Means Octal](/features/leading-zero-means-octal.md)

