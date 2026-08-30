---
type: "PHP Feature"
title: "strtolower()"
description: "``strtolower()`` converts all ASCII alphabetic characters in a string to lowercase."
resource: "https://www.php.net/manual/en/function.strtolower.php"
tags: ["native function", "string"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# strtolower()

``strtolower()`` converts all ASCII alphabetic characters in a string to lowercase.

It only handles the 26 ASCII letters, from ``A`` to ``Z``. Characters outside the ASCII range, such as accented letters or characters from non-Latin scripts, are not converted. For Unicode-aware lowercase, use ``mb_strtolower()``, which respects the encoding of the string.

``strtolower()`` is commonly used when comparing strings in a case-insensitive manner, building slugs, or normalising input.

```php
<?php

    echo strtolower('Hello World');  // hello world
    echo strtolower('PHP 8.4');      // php 8.4

    // Unicode-aware version
    echo mb_strtolower('Héllo', 'UTF-8'); // héllo

?>
```

## Documentation
- [https://www.php.net/manual/en/function.strtolower.php](https://www.php.net/manual/en/function.strtolower.php)

## See Also
- [PHP strtoupper() and strtolower() Functions: A Complete Guide](https://reintech.io/blog/php-strtoupper-strtolower-functions-complete-guide)

## Related
- [strtoupper()](/features/strtoupper.md)
- [String](/features/string.md)
- [Slug](/features/slug.md)
- [Multibyte String](/features/mbstring.md)
- [Idempotent](/features/idempotent.md)
- [setlocale](/features/setlocale.md)

