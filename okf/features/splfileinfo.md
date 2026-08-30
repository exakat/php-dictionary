---
type: "PHP Feature"
title: "SplFileInfo"
description: "``SplFileInfo`` provides an object-oriented interface to query information about a file or directory: its path, type, permissions, size, modification time, and more."
resource: "https://www.php.net/manual/en/class.splfileinfo.php"
tags: ["spl", "filesystem", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# SplFileInfo

``SplFileInfo`` provides an object-oriented interface to query information about a file or directory: its path, type, permissions, size, modification time, and more.

It is the base class for ``SplFileObject``, which also reads and writes the file, and ``DirectoryIterator``. When iterating with ``FilesystemIterator`` or ``RecursiveDirectoryIterator``, each entry is an ``SplFileInfo`` instance.

```php
<?php

    $file = new SplFileInfo('/var/www/html/index.php');
    echo $file->getBasename();   // index.php
    echo $file->getExtension();  // php
    echo $file->getSize();       // size in bytes
    echo $file->getMTime();      // last modification timestamp
    
    if ($file->isReadable()) {
        $obj = $file->openFile('r');
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.splfileinfo.php](https://www.php.net/manual/en/class.splfileinfo.php)

## See Also
- [SPL](https://www.php.net/manual/en/book.spl.php)

## Related
- [Standard PHP Library (SPL)](/features/spl.md)
- [File](/features/file.md)
- [File System](/features/filesystem.md)
- [SplFileObject](/features/splfileobject.md)
- [DirectoryIterator](/features/directoryiterator.md)
- [SplSubject](/features/splsubject.md)

## Details
- PHP since: 5.1.2
- Extension: ext-spl

