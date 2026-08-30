---
type: "PHP Feature"
title: "substr()"
description: "``substr()`` is a PHP native function that extracts a portion of a string, starting at a given position, for an optional given length."
resource: "https://www.php.net/manual/en/function.substr.php"
tags: ["native function", "string"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# substr()

``substr()`` is a PHP native function that extracts a portion of a string, starting at a given position, for an optional given length.

A negative ``start`` counts from the end of the string, rather than the beginning. A negative ``length`` stops the extraction that many characters before the end of the string, rather than counting a number of characters to keep.

When ``start`` is beyond the length of the string, or ``length`` resolves to zero or a negative amount that consumes the whole remaining string, ``substr()`` returns an empty string, since PHP 8.0; before, it could return ``false``.

``substr()`` is byte-oriented: it counts bytes, not characters, which corrupts multi-byte strings such as UTF-8. ``mb_substr()`` should be used instead, whenever the string may contain non-ASCII characters.

```php
<?php

    substr('Hello World', 6);      // 'World'
    substr('Hello World', 0, 5);   // 'Hello'
    substr('Hello World', -5);     // 'World'
    substr('Hello World', 0, -6);  // 'Hello'
    substr('Hello', 10);           // '' (PHP 8+; was false before)

    // byte-oriented: mangles multi-byte characters
    substr('héllo', 0, 2);     // 'h' followed by half of the 'é' byte sequence
    mb_substr('héllo', 0, 2);  // 'hé'

?>
```

## Documentation
- [https://www.php.net/manual/en/function.substr.php](https://www.php.net/manual/en/function.substr.php)

## See Also
- [PHP: mb_substr()](https://www.php.net/manual/en/function.mb-substr.php)
- [Substring - Wikipedia](https://en.wikipedia.org/wiki/Substring)

## Related
- [str_contains()](/features/str_contains.md)
- [strpos](/features/strpos.md)
- [Multi-byte](/features/multi-byte.md)
- [array_slice()](/features/array_slice.md)

