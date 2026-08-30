---
type: "PHP Feature"
title: "str_starts_with()"
description: "``str_starts_with()`` is a built-in PHP function that checks that the string starts with the specified prefix."
resource: "https://www.php.net/manual/en/function.str-starts-with.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# str_starts_with()

``str_starts_with()`` is a built-in PHP function that checks that the string starts with the specified prefix.

``str_starts_with()`` is a case-sensitive. Use ``strtolower()`` to remove case, and make case-insensitive comparisons. It has an complementary function called ``str_ends_with()``.

```php
<?php

    var_dump(str_starts_with('abc', 'a')); // true
    var_dump(str_starts_with('abc', 'b')); // false
    var_dump(str_starts_with('abc', 'ab')); // true
    var_dump(str_starts_with('abc', 'abc')); // true
    var_dump(str_starts_with('abc', 'abcd')); // false

?>
```

## Documentation
- [https://www.php.net/manual/en/function.str-starts-with.php](https://www.php.net/manual/en/function.str-starts-with.php)

## See Also
- [PHP: str_ends_with()](https://www.php.net/manual/en/function.str-ends-with.php)
- [PHP RFC: Add str_starts_with and str_ends_with functions](https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions)

## Related
- [str_ends_with()](/features/str_ends_with.md)
- [strpos](/features/strpos.md)

