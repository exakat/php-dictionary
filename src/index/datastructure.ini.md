# Data Structure
A data structure is a way of organizing and storing data in memory to enable efficient access and modification. PHP's primary data structure are the classes and arrays, which include indexed arrays, associative arrays, anonymous classes and nested structures in a single construct.

For more specialized needs, the spl and ds extensions offers types beyond the default PHP ones.

Choosing the right data structure has a direct impact on algorithmic complexity and memory usage.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/datastructure.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/datastructure.ini.html","name":"Data Structure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A data structure is a way of organizing and storing data in memory to enable efficient access and modification","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Data Structure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    use Ds\Vector;
    use Ds\Map;
    
    $vector = new Vector([1, 2, 3]);
    $map    = new Map(['key' => 'value']);
    
    $stack = new SplStack();
    $stack->push('first');

?>
```

**[Documentation](https://www.php.net/manual/en/book.spl.php)**
## See Also

+ [Data Structures for PHP (ds extension)](https://www.php.net/manual/en/book.ds.php)
+ [SPL Data Structures](https://www.php.net/manual/en/spl.datastructures.php)

## Related

+ [Array, []](array.ini.html)
+ [Data Structure](ds.ini.html)
+ [Standard PHP Library (SPL)](spl.ini.html)
+ [Collection](collection.ini.html)
+ [Deque](deque.ini.html)
+ [SplStack](splstack.ini.html)
+ [Map](map.ini.html)
+ [Tree](tree.ini.html)
+ [Queue](queue.ini.html)
+ [Algorithmic Complexity](algorithmic-complexity.ini.html)
+ [Big-o-notation](big-o-notation.ini.html)
+ [Bucket](bucket.ini.html)
+ [Handle](handle.ini.html)
+ [Pair](pair.ini.html)
+ [Pop](pop.ini.html)
+ [Sequence](sequence.ini.html)
+ [Set](set.ini.html)
+ [SplDoublyLinkedList](spldoublylinkedlist.ini.html)
+ [SplObjectStorage](splobjectstorage.ini.html)

## Related packages

+ [php-ds/php-ds](https://packagist.org/packages/php-ds/php-ds)
