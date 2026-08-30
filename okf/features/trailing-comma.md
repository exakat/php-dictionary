---
type: "PHP Feature"
title: "Trailing Comma"
description: "The trailing comma is the possibility to leave the last element of a list empty."
resource: "https://www.php.net/manual/en/functions.arguments.php#functions.arguments"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Trailing Comma

The trailing comma is the possibility to leave the last element of a list empty. This is for presentation reasons. In particular, VCS will be able to treat the last line just like any other previous line, with a final comma. This reduces the amount of diff.

Trailing commas were introduced progressively. In version 7.2, in use statements; in version 7.3, in method calls; in version 8.0, in method declarations; in older versions, in array declarations.

```php
<?php

    $a = [1,
          2,
          3,
          // Adding a new element in this array only creates
          // a one line diff, when using the trailing comma
         ];

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.arguments.php#functions.arguments](https://www.php.net/manual/en/functions.arguments.php#functions.arguments)

## See Also
- [How I learned to stop worrying and love the trailing comma](https://c-harrison.medium.com/how-i-learned-to-stop-worrying-and-love-the-trailing-comma-480f3a73d203)

## Related
- [Comma](/features/comma.md)
- [Convention](/features/convention.md)

## Details
- PHP since: 7.2

