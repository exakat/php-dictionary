---
type: "PHP Feature"
title: "Ctype"
description: "``ctype`` is a set of functions used for character type checking."
resource: "https://www.php.net/manual/en/book.ctype.php"
tags: ["core"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Ctype

``ctype`` is a set of functions used for character type checking. These functions are primarily designed to determine the type of characters in a string. They are useful for tasks such as input validation, data processing, and character manipulation. The ctype functions are part of PHP's standard library.

```php
<?php

    $strings = ['KjgWZC', 'arf12'];
    foreach ($strings as $testcase) {
        if (ctype_alpha($testcase)) {
            echo "The string $testcase consists of all letters.\n";
        } else {
            echo "The string $testcase does not consist of all letters.\n";
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/book.ctype.php](https://www.php.net/manual/en/book.ctype.php)

## See Also
- [An Introduction to Ctype Functions](https://www.sitepoint.com/an-introduction-to-ctype-functions/)

## Related
- [filter](/features/filter.md)

## Details
- Extension: ext-ctype

