---
type: "PHP Feature"
title: "FileSystemIterator"
description: "The ``FilesystemIterator`` class is part of the SPL Library and is used for iterating over the contents of a directory."
resource: "https://www.php.net/manual/en/class.filesystemiterator.php"
tags: ["iterator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# FileSystemIterator

The ``FilesystemIterator`` class is part of the SPL Library and is used for iterating over the contents of a directory. It extends the DirectoryIterator class and provides additional features for working with file system entries.

```php
<?php

    $it = new FilesystemIterator(dirname(__FILE__), FilesystemIterator::CURRENT_AS_FILEINFO);
    foreach ($it as $fileinfo) {
        echo $fileinfo->getFilename() . \n;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.filesystemiterator.php](https://www.php.net/manual/en/class.filesystemiterator.php)

## See Also
- [DirectoryIterator](https://www.php.net/manual/en/class.directoryiterator.php)
- [RecursiveDirectoryIterator](https://www.php.net/manual/en/class.recursivedirectoryiterator.php)
- [SPL](https://www.php.net/manual/en/book.spl.php)

## Related
- [DirectoryIterator](/features/directoryiterator.md)

## Details
- Extension: ext-spl

