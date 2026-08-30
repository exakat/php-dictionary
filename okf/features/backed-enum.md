---
type: "PHP Feature"
title: "Backed Enum"
description: "Backed enums are enumeration which a string or integer equivalent for each of its cases."
resource: "https://www.php.net/manual/en/language.types.enumerations.php"
tags: ["php interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Backed Enum

Backed enums are enumeration which a string or integer equivalent for each of its cases. Each equivalent, like the cases names, must be distinct. They also must be of the type of the backed enumeration: not type juggling on numeric strings or integers happens.

Non backed enumerations are called unbacked enumerations.

```php
<?php

enum Suits: string {
    case HEART = 'heart';
    case CLUB = 'club';
    case DIAMOND = 'diamond';
    case SPADE = 'spade';
}

enum Prime_digits: int {
    case TWO = 2;
    case THREE = 3;
    case FIVE = 5;
    case SEVEN = 7;
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.enumerations.php](https://www.php.net/manual/en/language.types.enumerations.php)

## See Also
- [Using PHP Backed Enums in Laravel with Testing](https://dev.to/tegos/using-php-backed-enums-in-laravel-with-testing-1f6)

## Related
- [Enumeration (enum)](/features/enum.md)
- [Unbacked Enum](/features/unbacked-enum.md)
- [Backed](/features/backed.md)
- [http_build_query()](/features/http_build_query.md)

## Details
- PHP since: 8.1

