---
type: "PHP Feature"
title: "fopen()"
description: "``fopen()`` is a PHP native function which opens a file."
resource: "https://www.php.net/manual/en/function.fopen.php"
tags: ["file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# fopen()

``fopen()`` is a PHP native function which opens a file. It returns a file description, also called handle, that may be used with other PHP file functions to read and write data from and to the files.

``fopen()`` may also be replaced by the ``SplFileObject`` class, which provides an OOP syntax alternative to access files.

```php
<?php

    $fp = fopen('/tmp/test.txt', 'r');
    fwrite($fp, 'PHP rocks!');
    fclose($fp);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.fopen.php](https://www.php.net/manual/en/function.fopen.php)

## See Also
- [PHP Open File](https://www.phptutorial.net/php-tutorial/php-open-file/)

## Related
- [File](/features/file.md)
- [Permission](/features/permission.md)
- [Writeable](/features/writeable.md)
- [Readable](/features/readable.md)
- [SplFileObject](/features/splfileobject.md)
- [$http_response_header](/features/$http_response_header.md)
- [File Mode](/features/file-mode.md)
- [Resource Leak](/features/resource-leak.md)
- [Text](/features/text.md)
- [Handle](/features/handle.md)
- [Universal Resource Locator (URL)](/features/url.md)
- [fread()](/features/fread.md)
- [fseek()](/features/fseek.md)
- [ftell()](/features/ftell.md)
- [rewind()](/features/rewind.md)
- [fclose()](/features/fclose.md)
- [fgetc()](/features/fgetc.md)
- [fgets()](/features/fgets.md)
- [fwrite()](/features/fwrite.md)

## Details
- Extension: ext-file

