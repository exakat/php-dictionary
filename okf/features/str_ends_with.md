---
type: "PHP Feature"
title: "str_ends_with()"
description: "``str_ends_with()`` is a built-in PHP function that checks that the string ends with the specified suffix."
resource: "https://www.php.net/manual/en/function.str-ends-with.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# str_ends_with()

``str_ends_with()`` is a built-in PHP function that checks that the string ends with the specified suffix.

``str_ends_with()`` is case-sensitive. Use ``strtolower()`` to remove case, and make case-insensitive comparisons. It has a complementary function called ``str_starts_with()``.

```php
<?php

    var_dump(str_starts_with('abc', 'a')); // false
    var_dump(str_starts_with('abc', 'b')); // false
    var_dump(str_starts_with('abc', 'c')); // true

?>
```

## Documentation
- [https://www.php.net/manual/en/function.str-ends-with.php](https://www.php.net/manual/en/function.str-ends-with.php)

## See Also
- [PHP: str_starts_with()](https://www.php.net/manual/en/function.str-starts-with.php)
- [PHP RFC: Add str_starts_with and str_ends_with functions](https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions)

## Related
- [str_starts_with()](/features/str_starts_with.md)
- [strpos](/features/strpos.md)

