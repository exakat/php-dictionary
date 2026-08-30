---
type: "extension"
title: "zlib extension"
description: "The ``zlib`` extension provides functions to handle the zlib compression format: read, write and access arbitrary parts of files."
resource: "https://www.php.net/manual/en/book.zlib.php"
tags: ["extension"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# zlib extension

The ``zlib`` extension provides functions to handle the zlib compression format: read, write and access arbitrary parts of files. It also provides a compression format for the output of PHP.

There is also a PHP wrapper for zlib, when the ``zlib`` extension is compiled: ``zlib://``.

```php
<?php

    $lines = gzfile('somefile.gz');
    foreach ($lines as $line) {
        echo $line . PHP_EOL;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/book.zlib.php](https://www.php.net/manual/en/book.zlib.php)

## See Also
- [Using zlib for Page Compression](https://www.pair.com/support/kb/using-zlib-for-page-compression/)
- [Introducing streaming zlib compression and decompression with ReactPHP](https://clue.engineering/2020/introducing-reactphp-zlib)

## Related
- [zip Extension](/features/zip.md)
- [bzip2 Extension](/features/bzip2.md)
- [File](/features/file.md)
- [PHP Wrappers](/features/php-wrapper.md)

## Details
- Extension: ext-zlib

