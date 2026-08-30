---
type: "PHP Feature"
title: "String Increment"
description: "String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings."
resource: "https://www.php.net/manual/en/language.operators.increment.php"
tags: ["feature", "trick", "so-php", "easter-egg"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# String Increment

String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings. 

These strings last character's ASCII code is incremented by one, with possible extension of the string when the letters reach ``z`` and ``Z``. 

This feature, when based on ``++`` is deprecated, and shall be removed in version 9. It has been replaced by the ``str_increment()`` function, which has the same feature, though not implicit in the engine anymore. It is also extended with It has been replaced by the ``str_decrement()``.

A deprecation message is active since PHP 8.3.

```php
<?php

    $s = 'y';
    echo ++$s; // z
    echo ++$s; // aa 
    echo ++$s; // ab
    
    $s = 'Y';
    echo ++$s; // Z
    echo ++$s; // AA
    echo ++$s; // AA

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.increment.php](https://www.php.net/manual/en/language.operators.increment.php)

## See Also
- [str_decrement](https://www.php.net/manual/en/function.str-decrement.php)
- [str_increment](https://www.php.net/manual/en/function.str-increment.php)

## Related
- [Increment](/features/increment.md)
- [String](/features/string.md)
- [American Standard Code for Information Interchange (ASCII)](/features/ascii.md)
- [Type Juggling](/features/type-juggling.md)
- [Deprecation](/features/deprecation.md)

## Details
- PHP until: 9.0
- Deprecated: 8.3

