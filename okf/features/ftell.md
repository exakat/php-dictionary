---
type: "PHP Feature"
title: "ftell()"
description: "``ftell()`` is a PHP native function that returns the current position of the file pointer for an open file stream."
resource: "https://www.php.net/manual/en/function.ftell.php"
tags: ["function", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# ftell()

``ftell()`` is a PHP native function that returns the current position of the file pointer for an open file stream. The position is measured in bytes from the beginning of the file.

Key characteristics:

+ Returns the current position as an integer, or ``false`` on failure
+ The file pointer position advances as data is read or written
+ Useful for tracking progress through a file or for implementing file-based protocols
+ The position can be changed with ``fseek()`` and reset with ``rewind()``

``ftell()`` is commonly used in combination with ``fseek()`` to implement random access file operations, and with ``fread()`` to determine how much data has been read.

```php
<?php

    $fp = fopen('data.txt', 'r');
    if ($fp) {
        echo 'Initial position: ' . ftell($fp) . "\n"; // 0

        fread($fp, 10);
        echo 'After reading 10 bytes: ' . ftell($fp) . "\n"; // 10

        fseek($fp, 0, SEEK_END);
        echo 'File size: ' . ftell($fp) . "\n";

        fclose($fp);
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.ftell.php](https://www.php.net/manual/en/function.ftell.php)

## See Also
- [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

## Related
- [fseek()](/features/fseek.md)
- [rewind()](/features/rewind.md)
- [fopen()](/features/fopen.md)
- [fread()](/features/fread.md)
- [fwrite()](/features/fwrite.md)
- [File](/features/file.md)
- [Stream](/features/stream.md)
- [fclose()](/features/fclose.md)
- [Resource Leak](/features/resource-leak.md)

## Details
- Extension: ext-standard

