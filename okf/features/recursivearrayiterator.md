---
type: "PHP Feature"
title: "RecursiveArrayIterator"
description: "``RecursiveArrayIterator`` extends ``ArrayIterator`` to allow recursive iteration over nested arrays and objects."
resource: "https://www.php.net/manual/en/class.recursivearrayiterator.php"
tags: ["spl", "iterator", "array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# RecursiveArrayIterator

``RecursiveArrayIterator`` extends ``ArrayIterator`` to allow recursive iteration over nested arrays and objects. It implements ``RecursiveIterator``, so it works with ``RecursiveIteratorIterator`` to traverse multidimensional arrays depth-first.

```php
<?php

    $array = ['a', ['b', 'c'], ['d', ['e', 'f']]];
    $iterator = new RecursiveIteratorIterator(
        new RecursiveArrayIterator($array)
    );
    
    foreach ($iterator as $value) {
        echo $value . PHP_EOL;
    }
    // a b c d e f

?>
```

## Documentation
- [https://www.php.net/manual/en/class.recursivearrayiterator.php](https://www.php.net/manual/en/class.recursivearrayiterator.php)

## See Also
- [Using SPL Iterators, Part 1](https://www.sitepoint.com/using-spl-iterators-1/)
- [PHP: Doing Recursion With Recursive IteratorIterators](https://dev.to/gbhorwood/php-doing-recursion-with-recursive-iteratoriterators-fj1)

## Related
- [Standard PHP Library (SPL)](/features/spl.md)
- [Iterator](/features/iterator.md)
- [Array, []](/features/array.md)
- [Recursion](/features/recursion.md)
- [Recursive Array](/features/recursive-array.md)
- [RecursiveIterator](/features/recursiveiterator.md)
- [SplSubject](/features/splsubject.md)

## Details
- PHP since: 5.1
- Extension: ext-spl

