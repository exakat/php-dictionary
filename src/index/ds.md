# Data Structure
Data Structures, is a PHP extension which provides efficient data structures, provided as an alternative to the array. It is available since PHP 7.

In particular, it provides the following structures: 

+ Collection
+ Sequence
+ Vector
+ Deque
+ Map
+ Pair
+ Set
+ Stack
+ Queue
+ PriorityQueue.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ds.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ds.html","name":"Data Structure","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Data Structures, is a PHP extension which provides efficient data structures, provided as an alternative to the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Data Structure.html"]}],"keywords":["datastructure"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pair.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sequence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/medium.com\/@rtheunissen\/efficient-data-structures-for-php-7-9dda7af674cd"},{"@type":"CreativeWork","name":"ext-ds","url":"https:\/\/www.geeksforgeeks.org\/php\/php-dsset-functions-complete-reference\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ds"}]}]}</script>
```php
<?php

    $stack = [];
    $stack[] = first;
    $stack[] = second;
    // same as array_push($stack, second);
    
    echo array_pop($stack); // Outputs: second

?>
```

**[Documentation](https://medium.com/@rtheunissen/efficient-data-structures-for-php-7-9dda7af674cd)**
## See Also

+ [ext-ds](https://www.geeksforgeeks.org/php/php-dsset-functions-complete-reference/)

## Related

+ [Collection](collection.html)
+ [Set](set.html)
+ [Hash](hash.html)
+ [Stack](stack.html)
+ [Queue](queue.html)
+ [Pair](pair.html)
+ [Sequence](sequence.html)
+ [Datastack](datastack.html)
+ [Data Structure](datastructure.html)
