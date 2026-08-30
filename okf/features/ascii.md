---
type: "acronym"
title: "American Standard Code for Information Interchange (ASCII)"
description: "ASCII is a character encoding standard used to represent text in computers and electronic devices."
resource: "https://en.wikipedia.org/wiki/ASCII"
tags: ["acronym", "encoding"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# American Standard Code for Information Interchange (ASCII)

ASCII is a character encoding standard used to represent text in computers and electronic devices. It assigns a unique number, or code, to each character, allowing text to be stored and processed digitally.

PHP handles ASCII characters with the functions ``ord()`` and ``chr()``.

```php
<?php

$string = 'abdc';

echo ord($string[1]); // b = 98

echo chr(100); // d

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/ASCII](https://en.wikipedia.org/wiki/ASCII)

## See Also
- [Converting to and from ASCII](http://www.hackingwithphp.com/4/7/3/converting-to-and-from-ascii)
- [A Guide to PHP’s chr() Function: Working with ASCII](https://clouddevs.com/php/chr-function/)

## Related
- [Byte](/features/byte.md)
- [Character](/features/character.md)
- [Carriage Return](/features/carriage-return.md)
- [Line Feed](/features/line-feed.md)
- [Multi-byte](/features/multi-byte.md)
- [String Increment](/features/string-increment.md)

