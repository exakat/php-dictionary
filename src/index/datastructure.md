# Data Structure
A data structure is a way of organizing and storing data in memory to enable efficient access and modification. PHP's primary data structures are the classes and arrays, which include indexed arrays, associative arrays, anonymous classes and nested structures in a single construct.

For more specialized needs, the spl and ds extensions offer types beyond the default PHP ones.

Choosing the right data structure has a direct impact on algorithmic complexity and memory usage.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html","name":"Data Structure","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 07:52:36 +0000","dateModified":"Fri, 14 Aug 2026 07:52:36 +0000","description":"A data structure is a way of organizing and storing data in memory to enable efficient access and modification","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Data Structure.html"]}],"alternateName":["data-structure"],"keywords":["data"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ds.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deque.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/map.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tree.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algorithmic-complexity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/big-o-notation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bucket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/handle.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pair.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sequence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spldoublylinkedlist.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobjectstorage.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.spl.php"},{"@type":"CreativeWork","name":"Data Structures for PHP (ds extension)","url":"https:\/\/www.php.net\/manual\/en\/book.ds.php"},{"@type":"CreativeWork","name":"SPL Data Structures","url":"https:\/\/www.php.net\/manual\/en\/spl.datastructures.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"datastructure"}]}]}</script>
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
