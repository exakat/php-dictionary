---
type: "extension"
title: "Standard PHP Library (SPL)"
description: "The Standard PHP Library, the SPL, is a collection of interfaces and classes that are meant to solve common problems."
resource: "https://www.php.net/manual/en/book.spl.php"
tags: ["extension", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Standard PHP Library (SPL)

The Standard PHP Library, the SPL, is a collection of interfaces and classes that are meant to solve common problems.

SPL offers features, functions, classes and interfaces in many different fields: iterators, data structures, files, exceptions, and observers. 

One of the most famous SPL features is the function ``spl_autoload_register()``, which register an autoload handler.

```php
<?php

    // SPL and autoloading
    spl_autoload_register(function ($class) {
        include 'classes/' . $class . '.class.php';
    });
    
    if ($object instanceof Countable) {
        $count = count($object);
    } elseif ($object instanceof Traversable) {
        $count = iterator_count($object);
    } else {
        print "Can't count this";
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/book.spl.php](https://www.php.net/manual/en/book.spl.php)

## See Also
- [PHP and SPL: Standard PHP Library Functions and Classes](https://reintech.io/blog/php-spl-standard-library-functions-classes)

## Related
- [Class Autoloading](/features/autoload.md)
- [Datastack](/features/datastack.md)
- [DirectoryIterator](/features/directoryiterator.md)
- [Iterator](/features/iterator.md)
- [UnexpectedValueException](/features/unexpectedvalueexception.md)
- [Data Structure](/features/datastructure.md)
- [OuterIterator](/features/outeriterator.md)
- [Overflow](/features/overflow.md)
- [RecursiveIterator](/features/recursiveiterator.md)
- [IteratorAggregate](/features/iteratoraggregate.md)
- [RecursiveArrayIterator](/features/recursivearrayiterator.md)
- [RecursiveDirectoryIterator](/features/recursivedirectoryiterator.md)
- [SeekableIterator](/features/seekableiterator.md)
- [SplDoublyLinkedList](/features/spldoublylinkedlist.md)
- [SplFileInfo](/features/splfileinfo.md)
- [SplFileObject](/features/splfileobject.md)
- [SplObjectStorage](/features/splobjectstorage.md)
- [SplObserver](/features/splobserver.md)
- [SplSubject](/features/splsubject.md)

