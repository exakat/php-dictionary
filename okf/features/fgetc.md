---
type: "PHP Feature"
title: "fgetc()"
description: "``fgetc()`` is a PHP native function that reads a single character from an open file pointer."
resource: "https://www.php.net/manual/en/function.fgetc.php"
tags: ["function", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# fgetc()

``fgetc()`` is a PHP native function that reads a single character from an open file pointer. It returns a string containing one byte, or ``false`` when the end of the file, EOF, is reached.

Key characteristics:

+ Reads exactly one byte per call, making it the slowest way to read a file, but the finest-grained
+ Returns ``false`` on EOF, which must be checked with ``===`` since ``"0"`` or an empty string are otherwise valid, falsy-looking results
+ Binary-safe, like the other stream functions

``fgetc()`` is typically used to build custom character-by-character parsers, for instance for CSV-like formats with unusual quoting rules, or for reading protocols where the message boundary is not a newline. For line-based reading, ``fgets()`` is far more efficient; for reading arbitrary chunks, ``fread()`` is preferred.

```php
<?php

    $fp = fopen('data.txt', 'r');
    if ($fp) {
        while (($char = fgetc($fp)) !== false) {
            echo $char;
        }
        fclose($fp);
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.fgetc.php](https://www.php.net/manual/en/function.fgetc.php)

## See Also
- [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

## Related
- [fgets()](/features/fgets.md)
- [fread()](/features/fread.md)
- [fopen()](/features/fopen.md)
- [fclose()](/features/fclose.md)
- [Stream](/features/stream.md)
- [File](/features/file.md)
- [Binary](/features/binary.md)

## Details
- Extension: ext-standard

