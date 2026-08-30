---
type: "concept"
title: "Arcane"
description: "Arcane refers to weird and obscure features, that are unknown, unused or forgotten: sometimes, all at the same time."
tags: ["concept", "adjective", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Arcane

Arcane refers to weird and obscure features, that are unknown, unused or forgotten: sometimes, all at the same time. They have been with the language for a long time, and they eventually drop from the feature list.

+ It is possible to use ``++`` on a string containing variables. In that case, trailing letters are augmented by one. 
+ ``strpos()`` used to accept an integer as second argument: it would convert it automatically to its ASCII equivalent
+ ``range()`` used to produce all the values between the interval boundaries, even when the boundaries where one string and one integer 
+ Logical operators works on strings, and then, produce strings.

```php
<?php

    $a = 'b';
    echo ++$a; // c
    
    // 98 is b
    print strpos('abc', 99); // 1
    // This was removed in PHP 8.0

    var_dump(a & 'A' );    // 'A'
    var_dump(a & 'B' );    // '@'

?>
```

## See Also
- [The Dark Corners of PHP: Lesser-Known Features and Quirks](https://medium.com/@makalin/the-dark-corners-of-php-lesser-known-features-and-quirks-04abc4b163e6)
- [PHP: Deprecated Features - Manual](https://www.php.net/manual/en/migration74.deprecated.php)

## Related
- [Deprecated](/features/deprecated.md)

