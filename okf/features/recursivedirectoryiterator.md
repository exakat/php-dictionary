---
type: "PHP Feature"
title: "RecursiveDirectoryIterator"
description: "``RecursiveDirectoryIterator`` extends ``FilesystemIterator`` to recursively traverse an entire directory tree."
resource: "https://www.php.net/manual/en/class.recursivedirectoryiterator.php"
tags: ["spl", "iterator", "filesystem"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# RecursiveDirectoryIterator

``RecursiveDirectoryIterator`` extends ``FilesystemIterator`` to recursively traverse an entire directory tree. Combined with ``RecursiveIteratorIterator``, it visits every file and sub-directory under a root path.

```php
<?php

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator('/path/to/dir', FilesystemIterator::SKIP_DOTS)
    );
    
    foreach ($iterator as $file) {
        if ($file->isFile()) {
            echo $file->getPathname() . PHP_EOL;
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.recursivedirectoryiterator.php](https://www.php.net/manual/en/class.recursivedirectoryiterator.php)

## See Also
- [RecursiveIteratorIterator Class](https://www.php.net/manual/en/class.recursiveiteratoriterator.php)

## Related
- [Standard PHP Library (SPL)](/features/spl.md)
- [Iterator](/features/iterator.md)
- [DirectoryIterator](/features/directoryiterator.md)
- [File System](/features/filesystem.md)
- [DIRECTORY_SEPARATOR](/features/directory_separator.md)
- [RecursiveIterator](/features/recursiveiterator.md)
- [SplSubject](/features/splsubject.md)

## Details
- PHP since: 5.1
- Extension: ext-spl

