---
type: "PHP Feature"
title: "strtoupper()"
description: "``strtoupper()`` converts all ASCII alphabetic characters in a string to uppercase."
resource: "https://www.php.net/manual/en/function.strtoupper.php"
tags: ["native function", "string"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# strtoupper()

``strtoupper()`` converts all ASCII alphabetic characters in a string to uppercase.

It only handles the 26 ASCII letters, from ``a`` to ``z``. Characters outside the ASCII range are not converted. For Unicode-aware uppercase, use ``mb_strtoupper()``, which respects the string encoding.

``strtoupper()`` is used for display normalisation, case-insensitive comparisons, and formatting constants or labels.

```php
<?php

    echo strtoupper('hello world');  // HELLO WORLD
    echo strtoupper('php 8.4');      // PHP 8.4

    // Unicode-aware version
    echo mb_strtoupper('héllo', 'UTF-8'); // HÉLLO

?>
```

## Documentation
- [https://www.php.net/manual/en/function.strtoupper.php](https://www.php.net/manual/en/function.strtoupper.php)

## See Also
- [PHP strtoupper() and strtolower() Functions: A Complete Guide](https://reintech.io/blog/php-strtoupper-strtolower-functions-complete-guide)

## Related
- [strtolower()](/features/strtolower.md)
- [String](/features/string.md)
- [Multibyte String](/features/mbstring.md)
- [setlocale](/features/setlocale.md)

