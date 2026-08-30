---
type: "PHP Feature"
title: "fclose()"
description: "``fclose()`` is a PHP native function that closes an open file pointer, previously created with ``fopen()``, ``fsockopen()``, or similar functions."
resource: "https://www.php.net/manual/en/function.fclose.php"
tags: ["function", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# fclose()

``fclose()`` is a PHP native function that closes an open file pointer, previously created with ``fopen()``, ``fsockopen()``, or similar functions. It returns ``true`` on success, ``false`` on failure.

Closing a stream releases the underlying resource, file descriptor, socket, back to the operating system. Forgetting to call ``fclose()`` leads to a resource leak: on long-running processes, such as CLI scripts, workers or daemons, this can exhaust the number of file descriptors available to the process.

In most short-lived web requests, PHP automatically closes any remaining open handles at the end of the script, but explicit ``fclose()`` calls remain good practice, and are mandatory as soon as many files are opened in a loop, or the process runs indefinitely.

```php
<?php

    $fp = fopen('data.txt', 'r');
    if ($fp) {
        $content = fread($fp, filesize('data.txt'));
        fclose($fp);
        echo $content;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.fclose.php](https://www.php.net/manual/en/function.fclose.php)

## See Also
- [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

## Related
- [fopen()](/features/fopen.md)
- [fread()](/features/fread.md)
- [fwrite()](/features/fwrite.md)
- [fgets()](/features/fgets.md)
- [fgetc()](/features/fgetc.md)
- [ftell()](/features/ftell.md)
- [rewind()](/features/rewind.md)
- [Resource Leak](/features/resource-leak.md)
- [Stream](/features/stream.md)
- [File](/features/file.md)

## Details
- Extension: ext-standard

