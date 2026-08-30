---
type: "extension"
title: "filter"
description: "The ``filter`` extension is a built-in extension that provides an efficient way to filter, validate and sanitize data."
resource: "https://www.php.net/manual/en/book.xmlwriter.php"
tags: ["extension", "validation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# filter

The ``filter`` extension is a built-in extension that provides an efficient way to filter, validate and sanitize data. Give it a string, and check that it satisfies a specific format.

``filter`` works on incoming data, such as ``$_GET`` or ``$_POST``, but also on free variables.

```php
<?php

$data = [
    'age' => '123 years',
    'name'  => 'John Doe',
];

$filters = [
    'age'   => FILTER_VALIDATE_INT,
    'name'   => FILTER_SANITIZE_ENCODED,
];

print_r(filter_var_array($data, $filters));

?>
```

## Documentation
- [https://www.php.net/manual/en/book.xmlwriter.php](https://www.php.net/manual/en/book.xmlwriter.php)

## See Also
- [PHP Filter and Filter Constant](https://www.geeksforgeeks.org/php-filter-and-filter-constant/)

## Related
- [Extensions](/features/extension.md)
- [Validation](/features/validation.md)
- [Sanitation](/features/sanitation.md)
- [Incoming Data](/features/incoming-data.md)
- [php://filter](/features/php-filter.md)
- [Ctype](/features/ctype.md)
- [Email](/features/email.md)

## Details
- PHP since: 7.0+
- Packagist: [clue/stream-filter](https://packagist.org/packages/clue/stream-filter)
- Packagist: [laminas/laminas-filter](https://packagist.org/packages/laminas/laminas-filter)

