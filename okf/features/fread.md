---
type: "PHP Feature"
title: "fread()"
description: "``fread()`` is a PHP native function that reads up to ``length`` bytes from the file pointer referenced by ``stream``."
resource: "https://www.php.net/manual/en/function.fread.php"
tags: ["function", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# fread()

``fread()`` is a PHP native function that reads up to ``length`` bytes from the file pointer referenced by ``stream``. It is one of the fundamental file reading functions.

Key characteristics:

+ Returns a string of up to ``length`` bytes, or ``false`` on failure
+ Reads binary-safe data, making it suitable for both text and binary files
+ Stops reading when EOF, end of file, is reached or the specified length is reached
+ For character encodings like UTF-8, reading by byte length may split multi-byte characters; consider using ``fgetc()`` or ``fgets()`` for text files

``fread()`` is typically used after ``fopen()`` and should be paired with ``fclose()`` to free resources. For reading entire files at once, ``file_get_contents()`` is more convenient. For line-by-line reading, ``fgets()`` is preferred.

```php
<?php

    $fp = fopen('data.txt', 'r');
    if ($fp) {
        // Read first 100 bytes
        $content = fread($fp, 100);
        echo $content;

        // Read remaining content
        $remaining = fread($fp, filesize('data.txt') - 100);
        echo $remaining;

        fclose($fp);
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.fread.php](https://www.php.net/manual/en/function.fread.php)

## See Also
- [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

## Related
- [fopen()](/features/fopen.md)
- [fgets()](/features/fgets.md)
- [fgetc()](/features/fgetc.md)
- [file_get_contents()](/features/file_get_contents.md)
- [File](/features/file.md)
- [Stream](/features/stream.md)
- [fclose()](/features/fclose.md)
- [fwrite()](/features/fwrite.md)
- [fseek()](/features/fseek.md)
- [ftell()](/features/ftell.md)
- [rewind()](/features/rewind.md)
- [Readable](/features/readable.md)
- [Binary](/features/binary.md)
- [Resource Leak](/features/resource-leak.md)

## Details
- Extension: ext-standard

