---
type: "character"
title: "Carriage Return"
description: "A carriage return is a whitespace character, that historically represents moving the cursor to the beginning of the line, without changing line."
resource: "https://en.wikipedia.org/wiki/Carriage_return"
tags: ["character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Carriage Return

A carriage return is a whitespace character, that historically represents moving the cursor to the beginning of the line, without changing line. It is often combined to the line feed: on a typewriter, that combination is needed to move the carriage to the beginning of the next line. This does not apply anymore on computers.

A carriage return is represented by the escape sequence ``\r``, in double quote strings. It is also the ASCII code 13.

Carriage return are important when formatting code, as they are at the end of a line.

```php
<?php

    echo "\r";
    echo chr(13); // ASCII code 13

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Carriage_return](https://en.wikipedia.org/wiki/Carriage_return)

## See Also
- [PHP: Predefined Constants](https://www.php.net/manual/en/reserved.constants.php)
- [Newline](https://en.wikipedia.org/wiki/Newline)

## Related
- [New Line](/features/new-line.md)
- [Line Feed](/features/line-feed.md)
- [American Standard Code for Information Interchange (ASCII)](/features/ascii.md)
- [PHP_EOL](/features/php_eol.md)

