---
type: "PHP Feature"
title: "Filter_var()"
description: "``filter_var()`` filters a single variable with a specified filter, either validating its content or sanitizing it."
resource: "https://www.php.net/manual/en/function.filter-var.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Filter_var()

``filter_var()`` filters a single variable with a specified filter, either validating its content or sanitizing it.

The first argument is the value to filter. The second argument is one of the ``FILTER_VALIDATE_*`` or ``FILTER_SANITIZE_*`` constants, such as ``FILTER_VALIDATE_EMAIL``, ``FILTER_VALIDATE_INT`` or ``FILTER_SANITIZE_FULL_SPECIAL_CHARS``, defaulting to ``FILTER_DEFAULT`` when omitted.

Validation filters return the filtered value, converted to the expected type, or ``false`` when the value does not pass validation. Since ``false`` is also a legitimate filtered value for some filters, it is recommended to compare the result with ``===`` rather than relying on truthiness. An optional third argument accepts flags and options, such as a regular expression for ``FILTER_VALIDATE_REGEXP``.

```php
<?php

    $email = 'user@example.com';
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        print 'Invalid email address';
    } else {
        print 'Valid email address';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.filter-var.php](https://www.php.net/manual/en/function.filter-var.php)

## See Also
- [PHP: Validate Filters](https://www.php.net/manual/en/filter.constants.php#constant.filter-validate-bool)
- [PHP: Sanitize Filters](https://www.php.net/manual/en/filter.constants.php#constant.filter-sanitize-string)

## Related
- [filter](/features/filter.md)
- [php://filter](/features/php-filter.md)
- [Preg_match](/features/preg_match.md)
- [is_int()](/features/is_int.md)
- [is_string()](/features/is_string.md)
- [Sanitation](/features/sanitation.md)

## Details
- PHP since: 5.2
- Extension: ext-filter

