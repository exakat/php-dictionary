---
type: "PHP Feature"
title: "str_contains()"
description: "``str_contains()`` is a PHP native function that checks if a string contains another string."
resource: "https://www.php.net/manual/fr/function.str-contains.php"
tags: ["string"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# str_contains()

``str_contains()`` is a PHP native function that checks if a string contains another string.

The function returns a boolean. It is meant to be a replacement to ``strpos()``, which returns the position of the found string, but is often misused.

The search is case sensitive. There is no case insensitive version of ``str_contains()``. This has to be done by setting the strings to the same case first.

The empty string is always found. ``null`` value is not accepted, but still default to empty string ``''``, so ``true``.

```php
<?php

    var_dump(str_contains('abc', '')); // true
    
    var_dump(str_contains('abc', 'a')); // true
    
    var_dump(str_contains('abc', 'A')); // false
    
    var_dump(str_contains('abc', 'd')); // false
    
    var_dump(str_contains('abc', 'abcabc')); // false
    
    var_dump(str_contains('abc', 'abcabc')); // false

?>
```

## Documentation
- [https://www.php.net/manual/fr/function.str-contains.php](https://www.php.net/manual/fr/function.str-contains.php)

## See Also
- [PHP: strpos()](https://www.php.net/manual/en/function.strpos.php)
- [PHP RFC: str_contains](https://wiki.php.net/rfc/str_contains)

## Related
- [Null](/features/null.md)
- [Empty String](/features/empty-string.md)
- [fnmatch()](/features/fnmatch.md)
- [Preg_match](/features/preg_match.md)
- [strpos](/features/strpos.md)

