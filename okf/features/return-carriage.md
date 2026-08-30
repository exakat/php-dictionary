---
type: "character"
title: "Return Carriage"
description: "A return carriage is a whitespace character, that historically represents moving the cursor to the beginning of the line, without advancing to the next line."
resource: "https://en.wikipedia.org/wiki/Carriage_return"
tags: ["character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Return Carriage

A return carriage is a whitespace character, that historically represents moving the cursor to the beginning of the line, without advancing to the next line.

A return carriage is represented by the escape sequence ``\r``, in double quote strings. It is also the ASCII code 13.

Return carriage are important when formatting code, as they are at the end of a line.

```php
<?php

    echo "\r";
    echo chr(13); // ASCII code 13

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Carriage_return](https://en.wikipedia.org/wiki/Carriage_return)

## See Also
- [CRLF](https://developer.mozilla.org/en-US/docs/Glossary/CRLF)

## Related
- [Line Feed](/features/line-feed.md)
- [New Line](/features/new-line.md)

