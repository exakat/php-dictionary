---
type: "PHP Feature"
title: "SplFileObject"
description: "``SplFileObject`` is an SPL class that offers an object-oriented interface for reading and writing files."
resource: "https://www.php.net/manual/en/class.splfileobject.php"
tags: ["spl", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# SplFileObject

``SplFileObject`` is an SPL class that offers an object-oriented interface for reading and writing files. It extends ``SplFileInfo`` and implements ``SeekableIterator``, allowing line-by-line iteration over a file with a ``foreach`` loop.

``SplFileObject`` supports reading modes ``r`` and ``r+``, writing modes ``w`` and ``a``, and CSV parsing via the ``setFlags()`` method combined with the ``READ_CSV`` flag.

It is a convenient alternative to the procedural ``fopen()``/``fgets()``/``fclose()`` trio when an object-oriented approach is preferred.

```php
<?php

    $file = new SplFileObject('data.txt', 'r');
    $file->setFlags(SplFileObject::DROP_NEW_LINE);

    foreach ($file as $line) {
        echo $line . PHP_EOL;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.splfileobject.php](https://www.php.net/manual/en/class.splfileobject.php)

## See Also
- [Reading large files in PHP with SplFileObject](https://write.corbpie.com/reading-large-files-in-php-with-splfileobject/)
- [php native SplFileObject class in CTF](https://medium.com/@lyltvip/php-native-splfileobject-class-in-ctf-b5c1355c0340)

## Related
- [Standard PHP Library (SPL)](/features/spl.md)
- [SplFileInfo](/features/splfileinfo.md)
- [Iterator](/features/iterator.md)
- [fopen()](/features/fopen.md)
- [File](/features/file.md)

## Details
- PHP since: 5.1
- Extension: ext-spl

