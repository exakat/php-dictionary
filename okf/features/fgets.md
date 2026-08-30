---
type: "PHP Feature"
title: "fgets()"
description: "``fgets()`` is a PHP native function that reads a single line from an open file pointer, up to and including the next newline character, or until an optional ``length`` limit of bytes is reached."
resource: "https://www.php.net/manual/en/function.fgets.php"
tags: ["function", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# fgets()

``fgets()`` is a PHP native function that reads a single line from an open file pointer, up to and including the next newline character, or until an optional ``length`` limit of bytes is reached. It returns the line as a string, or ``false`` when the end of file, EOF, is reached.

Key characteristics:

+ Stops at the first ``\n`` found, or after ``length - 1`` bytes if a length is provided
+ The trailing newline is kept in the returned string, and often needs to be trimmed with ``rtrim()`` or ``trim()``
+ Binary-safe

``fgets()`` is the standard way to process a text file line by line, for instance log files or CSV files, without loading the whole file into memory, unlike ``file()`` or ``file_get_contents()``. It is commonly combined with ``feof()`` to detect the end of the stream.

```php
<?php

    $fp = fopen('access.log', 'r');
    if ($fp) {
        while (($line = fgets($fp)) !== false) {
            echo trim($line) . PHP_EOL;
        }
        fclose($fp);
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.fgets.php](https://www.php.net/manual/en/function.fgets.php)

## See Also
- [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

## Related
- [fgetc()](/features/fgetc.md)
- [fread()](/features/fread.md)
- [fopen()](/features/fopen.md)
- [fclose()](/features/fclose.md)
- [File](/features/file.md)
- [Stream](/features/stream.md)
- [Comma Separated Values (CSV)](/features/csv.md)

## Details
- Extension: ext-standard

