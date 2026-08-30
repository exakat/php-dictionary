---
type: "character"
title: "New Line"
description: "A new-line ``\\n`` character."
resource: "https://www.php.net/manual/en/language.types.string.php"
tags: ["character", "portability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# New Line

A new-line ``\n`` character. It may be represented by this string sequence, or an actual new line, within a string, or, also by the ``PHP_EOL`` native constant. 

PHP uses the ``\r\f`` representation for a new line: it is a combination of line feed and return carriage. This is the Linux standard. The ``PHP_EOL`` constant depends on the running platform: its value is adapted to the underlying OS.

By convention, PHP files are expected to end on a new line.

It was possible to use new lines within a namespace name, until PHP 8.0. This is not possible anymore.

```php
<?php

    $string = "one new line
another new line\nAnd then another new line" . PHP_EOL

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.string.php](https://www.php.net/manual/en/language.types.string.php)

## See Also
- [Newline (\n) in PHP](https://ssojet.com/special-characters/newline-n-in-php)

## Related
- [Line Feed](/features/line-feed.md)
- [Return Carriage](/features/return-carriage.md)
- [PHP Constants](/features/php-constant.md)
- [Carriage Return](/features/carriage-return.md)

