---
type: "PHP Feature"
title: "DirectoryIterator"
description: "The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files."
resource: "https://www.php.net/manual/en/class.directoryiterator.php"
tags: ["iterator", "php class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# DirectoryIterator

The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files.

It is an iterator, and may be recursively traversed, like a file system.

```php
<?php

    $iterator = new DirectoryIterator(__DIR__);
    while($iterator->valid()) {
        $file = $iterator->current();
        echo $iterator->key() . " => " . $file->getFilename() . "\n";
        $iterator->next();
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.directoryiterator.php](https://www.php.net/manual/en/class.directoryiterator.php)

## See Also
- [PHP DirectoryIterator: How to Iterate Over a Directory](https://salivity.github.io/php/article/php-directoryiterator-how-to-iterate-over-a-directory)
- [PHP Iterators Part 2: SPL Array Iterator, Directory Iterator, and Filesystem Iterator](https://webmobtuts.com/backend-development/php-iterators-part-2-spl-array-iterator-directory-iterator-and-filesystem-iterator/)

## Related
- [Iterator](/features/iterator.md)
- [Recursion](/features/recursion.md)
- [RecursiveIterator](/features/recursiveiterator.md)
- [RecursiveTreeIterator](/features/recursivetreeiterator.md)
- [Standard PHP Library (SPL)](/features/spl.md)
- [FileSystemIterator](/features/filesystemiterator.md)
- [RecursiveDirectoryIterator](/features/recursivedirectoryiterator.md)
- [SplFileInfo](/features/splfileinfo.md)

