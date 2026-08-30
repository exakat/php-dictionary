---
type: "PHP Feature"
title: "trim"
description: "The ``trim()`` function is used to remove whitespaces from the beginning and end of a string, at the same time."
resource: "https://www.php.net/manual/en/function.trim.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# trim

The ``trim()`` function is used to remove whitespaces from the beginning and end of a string, at the same time. 

By default, it removes any of the following characters from the start and end of the string:

+ Space ``" "``
+ Horizontal tab ``\t``
+ Newline ``\n``
+ Carriage return ``\r``
+ Null-byte ``\0``

Unbreakable spaces are not considered here, nor any other character, unless specified.

This function does not support multi-byte characters. It actually uses single-byte characters, and may leave inconsistent characters, or, with luck, it may actually remove the characters. Multibyte trim shall be done with ``mb_trim()``.

``trim()`` removes all the provided characters, as long as it finds them leading or trailing the string. It is not possible to remove only one character with this function.

``trim()`` is completed with ``ltrim()``, which is removing characters on the left part of the string, and  with ``rtrim()``, which is removing characters on the right part of the string.

```php
<?php

    $string = "\n\t PHP ";
    $trimmed = trim($string);
    // 'PHP'

    $b = 'aaaaaab';
    print trim($a, 'a'); //b

    $a = '我是法国人';
    print $a;               //我是法国人
    print trim($a, '人我'); //��法国 

?>
```

## Documentation
- [https://www.php.net/manual/en/function.trim.php](https://www.php.net/manual/en/function.trim.php)

## See Also
- [How to trim strings with PHP](https://benjamincrozat.com/php-trim)

## Related
- [Non Breakable Spaces](/features/non-breakable-space.md)

