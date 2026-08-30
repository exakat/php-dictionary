---
type: "character"
title: "Line Feed"
description: "A line feed is a whitespace character, that historically represents moving the cursor to the next line, without going back to the beginning of the line."
resource: "https://en.wikipedia.org/wiki/Newline"
tags: ["character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Line Feed

A line feed is a whitespace character, that historically represents moving the cursor to the next line, without going back to the beginning of the line.

A line feed is represented by the escape sequence ``\f``, in double quote strings. It is also the ASCII code 12.

Line feed are important when formatting code, as they are at the end of a line.

```php
<?php

    echo "\f";
    echo chr(12); // ASCII code 12

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Newline](https://en.wikipedia.org/wiki/Newline)

## See Also
- [Double quoted strings escape sequences](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double)
- [Carriage return (Wikipedia)](https://en.wikipedia.org/wiki/Carriage_return)

## Related
- [New Line](/features/new-line.md)
- [Carriage Return](/features/carriage-return.md)
- [American Standard Code for Information Interchange (ASCII)](/features/ascii.md)
- [Return Carriage](/features/return-carriage.md)

