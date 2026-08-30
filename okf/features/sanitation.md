---
type: "PHP Feature"
title: "Sanitation"
description: "Sanitation is the process to clean data and remove any unwanted parts."
resource: "https://www.php.net/manual/en/filter.examples.validation.php"
tags: ["chore"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Sanitation

Sanitation is the process to clean data and remove any unwanted parts. The data may end up modified by this process, sometimes quite a lot. There are native and extension functions to perform sanitation, as long as components.

```php
<?php

    echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;

?>
```

## Documentation
- [https://www.php.net/manual/en/filter.examples.validation.php](https://www.php.net/manual/en/filter.examples.validation.php)

## See Also
- [Data sanitization](https://en.wikipedia.org/wiki/Data_sanitization)

## Related
- [Validation](/features/validation.md)
- [filter](/features/filter.md)
- [Parse](/features/parse.md)
- [Parser](/features/parser.md)
- [HTMLPurifier](/features/htmlpurifier.md)

## Details
- Packagist: [waavi/sanitizer](https://packagist.org/packages/waavi/sanitizer)

