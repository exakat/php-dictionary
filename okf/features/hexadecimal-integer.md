---
type: "PHP Feature"
title: "Hexadecimal Integer"
description: "Hexadecimal integers are integers with an hexadecimal representation."
resource: "https://www.php.net/manual/en/language.types.integer.php"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Hexadecimal Integer

Hexadecimal integers are integers with an hexadecimal representation. Their value is the same, yet their are written in a different way than the common decimal. 

Hexadecimal has native support with the ``0x123`` format. There is also support for hexadecimal characters, inside double-quote strings, with the ``\xhh`` syntax.

There are functions to convert from and to hexadecimal format: ``hexdec()``, ``dechex()`` and ``base_convert()``, from ten to sixteen, and then, with an arbitrary base, up to 36.

PHP also has special syntax for binary and octal numbers.

```php
<?php

    $twenty    = 0x14;
    $twentyToo = 20;
    
    $i = "\x69"; // i is the 105 ASCII code
    $i = 'i';

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.integer.php](https://www.php.net/manual/en/language.types.integer.php)

## See Also
- [Hexadecimal on Wikipedia](https://en.wikipedia.org/wiki/Hexadecimal)

## Related
- [Binary Integer](/features/binary-integer.md)
- [Octal Integer](/features/octal-integer.md)
- [Base](/features/base.md)

