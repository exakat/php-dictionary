# OuterIterator
``OuterIterator`` is a PHP interface that extends ``Iterator`` to represent iterators that wrap other iterators. It adds a single method, ``getInnerIterator()``, which returns the inner iterator being wrapped.

``OuterIterator`` is the foundation of PHP's iterator decoration pattern: classes such as ``IteratorIterator``, ``FilterIterator``, ``MapIterator``, ``LimitIterator``, and ``RecursiveIteratorIterator`` all implement it.

Implementing ``OuterIterator`` allows building custom iterator decorators that add behaviour, such as filtering, mapping, or limiting, on top of any existing ``Traversable`` without modifying the wrapped object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/outeriterator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/outeriterator.ini.html","name":"OuterIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``OuterIterator`` is a PHP interface that extends ``Iterator`` to represent iterators that wrap other iterators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/OuterIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/class.outeriterator.php)**
## Related

+ [Iterator](iterator.ini.html)
+ [IteratorAggregate](iteratoraggregate.ini.html)
+ [RecursiveIterator](recursiveiterator.ini.html)
+ [Standard PHP Library (SPL)](spl.ini.html)
+ [Traversable](traversable.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
