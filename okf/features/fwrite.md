---
type: "PHP Feature"
title: "fwrite()"
description: "``fwrite()`` is a PHP native function that writes a string to an open file pointer."
resource: "https://www.php.net/manual/en/function.fwrite.php"
tags: ["function", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# fwrite()

``fwrite()`` is a PHP native function that writes a string to an open file pointer. It returns the number of bytes written, or ``false`` on failure. ``fputs()`` is a plain alias of ``fwrite()``.

Key characteristics:

+ Writing may stop before the end of the string if the stream refuses more data, so the return value should be checked against ``strlen()`` of the data for reliability
+ An optional ``length`` parameter caps the number of bytes written, even if the string is longer
+ Binary-safe, and works identically on files, pipes, and sockets

``fwrite()`` requires the file pointer to have been opened in a writable mode, such as ``'w'``, ``'a'``, or ``'r+'``, with ``fopen()``. For writing an entire string at once without manually managing a handle, ``file_put_contents()`` is more convenient.

```php
<?php

    $fp = fopen('/tmp/test.txt', 'w');
    if ($fp) {
        fwrite($fp, 'PHP rocks!');
        fclose($fp);
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.fwrite.php](https://www.php.net/manual/en/function.fwrite.php)

## See Also
- [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

## Related
- [fopen()](/features/fopen.md)
- [fclose()](/features/fclose.md)
- [fread()](/features/fread.md)
- [file_put_contents()](/features/file_put_contents.md)
- [File](/features/file.md)
- [Stream](/features/stream.md)
- [Writeable](/features/writeable.md)
- [Resource Leak](/features/resource-leak.md)

## Details
- Extension: ext-standard

