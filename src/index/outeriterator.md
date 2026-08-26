# OuterIterator
``OuterIterator`` is a PHP interface that extends ``Iterator`` to represent iterators that wrap other iterators. It adds a single method, ``getInnerIterator()``, which returns the inner iterator being wrapped.

``OuterIterator`` is the foundation of PHP's iterator decoration pattern: classes such as ``IteratorIterator``, ``FilterIterator``, ``MapIterator``, ``LimitIterator``, and ``RecursiveIteratorIterator`` all implement it.

Implementing ``OuterIterator`` allows building custom iterator decorators that add behaviour, such as filtering, mapping, or limiting, on top of any existing ``Traversable`` without modifying the wrapped object.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/outeriterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/outeriterator.html","name":"OuterIterator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:46:20 +0000","dateModified":"Fri, 07 Aug 2026 09:46:20 +0000","description":"OuterIterator is a PHP interface that extends Iterator to represent iterators that wrap other iterators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/outeriterator.html"]}],"keywords":["interface","iterator","spl"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iteratoraggregate.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursiveiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.outeriterator.php"},{"@type":"CreativeWork","name":"Standard PHP Library From A to Z","url":"https:\/\/tuhinbepari.medium.com\/standard-php-library-from-a-to-z-9bcb4d7b3aa8"},{"@type":"CreativeWork","name":"Using SPL Iterators, Part 1","url":"https:\/\/www.sitepoint.com\/using-spl-iterators-1\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"outeriterator"}]}]}</script>
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
## See Also

+ [Standard PHP Library From A to Z](https://tuhinbepari.medium.com/standard-php-library-from-a-to-z-9bcb4d7b3aa8)
+ [Using SPL Iterators, Part 1](https://www.sitepoint.com/using-spl-iterators-1/)

## Related

+ [Iterator](iterator.html)
+ [IteratorAggregate](iteratoraggregate.html)
+ [RecursiveIterator](recursiveiterator.html)
+ [Standard PHP Library (SPL)](spl.html)
+ [Traversable](traversable.html)
+ [PHP Native Interfaces](php-interface.html)
