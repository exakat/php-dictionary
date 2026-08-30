---
type: "PHP Feature"
title: "str_replace()"
description: "``str_replace()`` is a PHP native function that replaces all occurrences of a search string with a replacement string."
resource: "https://www.php.net/manual/en/function.str-replace.php"
tags: ["native function", "string"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# str_replace()

``str_replace()`` is a PHP native function that replaces all occurrences of a search string with a replacement string.

The search and replace arguments may be arrays, allowing several substitutions to be applied in a single call. When arrays are used, each replaced value is scanned again for further matches, which may lead to unexpected double substitutions, unlike ``strtr()``.

The search is case-sensitive. ``str_ireplace()`` is the case-insensitive counterpart.

An optional fourth argument, passed by reference, receives the number of replacements performed.

```php
<?php

    echo str_replace('World', 'PHP', 'Hello World'); // Hello PHP

    // Array of search/replace pairs
    $search  = ['Hello', 'World'];
    $replace = ['Hi', 'Earth'];
    echo str_replace($search, $replace, 'Hello World'); // Hi Earth

    // Case-insensitive version
    echo str_ireplace('world', 'PHP', 'Hello World'); // Hello PHP

    // Counting replacements
    str_replace('o', '0', 'Hello World', $count);
    echo $count; // 2

?>
```

## Documentation
- [https://www.php.net/manual/en/function.str-replace.php](https://www.php.net/manual/en/function.str-replace.php)

## See Also
- [PHP: strtr()](https://www.php.net/manual/en/function.strtr.php)
- [PHP: preg_replace()](https://www.php.net/manual/en/function.preg-replace.php)

## Related
- [strtr()](/features/strtr.md)
- [String](/features/string.md)
- [strpos](/features/strpos.md)
- [preg_replace()](/features/preg_replace.md)

