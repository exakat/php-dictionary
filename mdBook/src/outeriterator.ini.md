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

Related : [Iterator](Iterator), [IteratorAggregate](IteratorAggregate), [RecursiveIterator](RecursiveIterator), [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [Traversable](Traversable), [PHP Native Interfaces](PHP Native Interfaces)
