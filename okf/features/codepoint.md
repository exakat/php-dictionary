---
type: "character"
title: "Codepoint"
description: "A code point is a numerical value that represents a specific character in an encoding system, such as Unicode."
resource: "https://en.wikipedia.org/wiki/Code_point"
tags: ["character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Codepoint

A code point is a numerical value that represents a specific character in an encoding system, such as Unicode. Each character, symbol, or control command in a character set is assigned a unique code point, allowing it to be stored and transmitted in digital systems.

In Unicode, code points are written as U+ followed by a hexadecimal number. For example, the character ``A`` has the code point ``U+0041``.

```php
<?php

    // The ElePHPant code point
    echo $unicodeChar = "\u{1F418}"; //🐘

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Code_point](https://en.wikipedia.org/wiki/Code_point)

## See Also
- [Code point](https://developer.mozilla.org/en-US/docs/Glossary/Code_point)
- [Unicode 14.0](https://www.unicode.org/versions/Unicode14.0.0/ch02.pdf#G25564)
- [All the unicode codepoints](https://codepoints.net/?lang=en)

## Related
- [Unicode](/features/unicode.md)
- [Escape Sequences](/features/escape-sequence.md)

## Details
- Extension: ext-mbstring

