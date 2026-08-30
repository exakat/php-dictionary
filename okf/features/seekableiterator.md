---
type: "PHP Feature"
title: "SeekableIterator"
description: "``SeekableIterator`` extends the ``Iterator`` interface by adding a ``seek(int $offset)`` method to jump directly to a specific position without iterating through preceding elements."
resource: "https://www.php.net/manual/en/class.seekableiterator.php"
tags: ["spl", "iterator", "interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# SeekableIterator

``SeekableIterator`` extends the ``Iterator`` interface by adding a ``seek(int $offset)`` method to jump directly to a specific position without iterating through preceding elements.

It is implemented by ``ArrayIterator`` and ``SplFixedArray``. Attempting to seek to an invalid position should throw an ``OutOfBoundsException``.

```php
<?php

    $iterator = new ArrayIterator(['a', 'b', 'c', 'd', 'e']);
    $iterator->seek(3);
    echo $iterator->current(); // d

?>
```

## Documentation
- [https://www.php.net/manual/en/class.seekableiterator.php](https://www.php.net/manual/en/class.seekableiterator.php)

## See Also
- [Basic example of PHP function SeekableIterator::seek()](https://www.basicexamples.com/example/php/seekableiterator-seek)
- [Iterator](https://www.php.net/manual/en/class.iterator.php)

## Related
- [Iterator](/features/iterator.md)
- [Interface](/features/interface.md)
- [Standard PHP Library (SPL)](/features/spl.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [SplSubject](/features/splsubject.md)

## Details
- PHP since: 5.1
- Extension: ext-spl

