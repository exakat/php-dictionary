---
type: "PHP Feature"
title: "Iterator"
description: "An iterator is an object which can be traversed with a ``foreach()`` loop."
resource: "https://www.php.net/manual/en/class.iterator.php"
tags: ["iterator", "interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Iterator

An iterator is an object which can be traversed with a ``foreach()`` loop. 

``Iterator`` is an interface, which shall be implemented by objects. There are also a list of default iterators in the SPL extension.

An iterator may be turned into an array, with the ``iterator_to_array()`` function. Arrays may be used as iterator natively, or used as an object with the ``ArrayObject`` class.

```php
<?php

    class myIterator implements Iterator { /**/ }
    
    $it = new myIterator;
    
    foreach($it as $key => $value) {
        var_dump($key, $value);
        echo "\n";
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.iterator.php](https://www.php.net/manual/en/class.iterator.php)

## See Also
- [Modern PHP Developer - Iterator](https://startutorial.com/view/modern-php-developer-iterator)
- [Iterator in PHP](https://refactoring.guru/design-patterns/iterator/php/example)

## Related
- [Standard PHP Library (SPL)](/features/spl.md)
- [Traversal](/features/traversal.md)
- [foreach()](/features/foreach.md)
- [ArrayObject](/features/arrayobject.md)
- [DirectoryIterator](/features/directoryiterator.md)
- [iterator_to_array()](/features/iterator_to_array.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [RecursiveIterator](/features/recursiveiterator.md)
- [IteratorAggregate](/features/iteratoraggregate.md)
- [OuterIterator](/features/outeriterator.md)
- [RecursiveArrayIterator](/features/recursivearrayiterator.md)
- [RecursiveDirectoryIterator](/features/recursivedirectoryiterator.md)
- [SeekableIterator](/features/seekableiterator.md)
- [SplDoublyLinkedList](/features/spldoublylinkedlist.md)
- [SplFileObject](/features/splfileobject.md)
- [SplObjectStorage](/features/splobjectstorage.md)

