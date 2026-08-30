---
type: "concept"
title: "Format"
description: "Format is a set of rules to structure a piece of text, and make it parsable by a specific engine."
resource: "https://en.wikipedia.org/wiki/File_format"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Format

Format is a set of rules to structure a piece of text, and make it parsable by a specific engine. A piece of text may be in the format: then, it is usable as a command for another technology. 

Formats have various shapes. Here are some examples of formats: 

+ ``SQL`` Structure Query Language: ``SELECT column FROM table`` 
+ Date and time: ``2020-01-01`` 
+ ``sprintf()``, with ``%d 9`` 
+ Regular expressions
+ ``YAML``
+ ``INI``
+ ``CSV``
+ ``JSON``

It is possible to define one's custom format. Common formats have comprehensive specifications, such as how to build them, and assorted tools, to encode, decode, use, combine, etc.

```php
<?php

    // displays 123 with 9 characters, and fills with dots any empty characters
    // ......123
    echo sprintf("%'.9d\n", 123);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/File_format](https://en.wikipedia.org/wiki/File_format)

## See Also
- [sprintf](https://www.php.net/manual/en/function.sprintf.php)
- [date](https://www.php.net/manual/en/function.date.php)

## Related
- [String](/features/string.md)
- [Comma Separated Values (CSV)](/features/csv.md)
- [YAML Ain't Markup Language (YAML)](/features/yaml.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Data](/features/data.md)
- [sprintf](/features/sprintf.md)
- [printf()](/features/printf.md)
- [INI](/features/ini.md)
- [Leading Zero Means Octal](/features/leading-zero-means-octal.md)
- [Markdown](/features/markdown.md)

