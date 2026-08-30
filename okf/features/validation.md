---
type: "concept"
title: "Validation"
description: "Validation is the process to check that a data conform to a specific pattern or set of constraints."
resource: "https://www.php.net/manual/en/filter.examples.validation.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Validation

Validation is the process to check that a data conform to a specific pattern or set of constraints. The data is not modified by a validation process. There are PHP extension and external components to perform validation tasks. 

Validation applies to simple values, such as strings or integer; they also apply to larger structures, like XML, JSON or YAML, where the number of simple value is high.

Validation is also called filtering.

```php
<?php

    if (intval($string) > 0) {
        print "The string is an integer";
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/filter.examples.validation.php](https://www.php.net/manual/en/filter.examples.validation.php)

## See Also
- [PHP Form Validation](https://www.geeksforgeeks.org/php-form-validation/)

## Related
- [Sanitation](/features/sanitation.md)
- [Parse](/features/parse.md)
- [Parser](/features/parser.md)
- [Schema](/features/schema.md)
- [Specification](/features/specification.md)
- [filter](/features/filter.md)
- [parse_url()](/features/parse_url.md)
- [is_array()](/features/is_array.md)
- [is_bool()](/features/is_bool.md)
- [is_int()](/features/is_int.md)
- [is_string()](/features/is_string.md)
- [Refinement Type](/features/refinement-type.md)
- [ETL](/features/etl.md)
- [HTMLPurifier](/features/htmlpurifier.md)
- [is_float()](/features/is_float.md)
- [is_numeric()](/features/is_numeric.md)
- [Referential Integrity](/features/referential-integrity.md)

## Details
- Packagist: [respect/validation](https://packagist.org/packages/respect/validation)
- Packagist: [beberlei/assert](https://packagist.org/packages/beberlei/assert)
- Packagist: [lemmon/validator](https://packagist.org/packages/lemmon/validator)
- Extension: ext-filter

