---
type: "PHP Feature"
title: "OuterIterator"
description: "``OuterIterator`` is a PHP interface that extends ``Iterator`` to represent iterators that wrap other iterators."
resource: "https://www.php.net/manual/en/class.outeriterator.php"
tags: ["interface", "iterator", "spl"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# OuterIterator

``OuterIterator`` is a PHP interface that extends ``Iterator`` to represent iterators that wrap other iterators. It adds a single method, ``getInnerIterator()``, which returns the inner iterator being wrapped.

``OuterIterator`` is the foundation of PHP's iterator decoration pattern: classes such as ``IteratorIterator``, ``FilterIterator``, ``MapIterator``, ``LimitIterator``, and ``RecursiveIteratorIterator`` all implement it.

Implementing ``OuterIterator`` allows building custom iterator decorators that add behaviour, such as filtering, mapping, or limiting, on top of any existing ``Traversable`` without modifying the wrapped object.

```php
<?php

    class DoubleValueIterator extends IteratorIterator implements OuterIterator
    {
        public function current(): mixed
        {
            return parent::current() * 2;
        }
    }
    
    $array = new ArrayIterator([1, 2, 3, 4]);
    $doubled = new DoubleValueIterator($array);
    
    foreach ($doubled as $value) {
        echo $value . PHP_EOL; // 2, 4, 6, 8
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.outeriterator.php](https://www.php.net/manual/en/class.outeriterator.php)

## See Also
- [Standard PHP Library From A to Z](https://tuhinbepari.medium.com/standard-php-library-from-a-to-z-9bcb4d7b3aa8)
- [Using SPL Iterators, Part 1](https://www.sitepoint.com/using-spl-iterators-1/)

## Related
- [Iterator](/features/iterator.md)
- [IteratorAggregate](/features/iteratoraggregate.md)
- [RecursiveIterator](/features/recursiveiterator.md)
- [Standard PHP Library (SPL)](/features/spl.md)
- [Traversable](/features/traversable.md)
- [PHP Native Interfaces](/features/php-interface.md)

## Details
- PHP since: 5.1
- Extension: ext-spl

