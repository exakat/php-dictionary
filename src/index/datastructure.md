# Data Structure
A data structure is a way of organizing and storing data in memory to enable efficient access and modification. PHP's primary data structure are the classes and arrays, which include indexed arrays, associative arrays, anonymous classes and nested structures in a single construct.

For more specialized needs, the spl and ds extensions offers types beyond the default PHP ones.

Choosing the right data structure has a direct impact on algorithmic complexity and memory usage.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html","name":"Data Structure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A data structure is a way of organizing and storing data in memory to enable efficient access and modification","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Data Structure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Data Structure"}]}]}</script>
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

+ [Array, []](array.html)
+ [Data Structure](ds.html)
+ [Standard PHP Library (SPL)](spl.html)
+ [Collection](collection.html)
+ [Deque](deque.html)
+ [SplStack](splstack.html)
+ [Map](map.html)
+ [Tree](tree.html)
+ [Queue](queue.html)
+ [Algorithmic Complexity](algorithmic-complexity.html)
+ [Big-o-notation](big-o-notation.html)
+ [Bucket](bucket.html)
+ [Handle](handle.html)
+ [Pair](pair.html)
+ [Pop](pop.html)
+ [Sequence](sequence.html)
+ [Set](set.html)
+ [SplDoublyLinkedList](spldoublylinkedlist.html)
+ [SplObjectStorage](splobjectstorage.html)

## Related packages

+ [php-ds/php-ds](https://packagist.org/packages/php-ds/php-ds)
