# Hash Table
A hash table is a data structure that stores key-value pairs, and uses a hash function to compute an index, called a bucket, from the key, so that a value can be inserted, looked up, or deleted in average constant time ``O(1)``, regardless of the size of the table. It is one of the most used data structures in computing, backing associative arrays, sets, caches, and database indexes alike.

Collisions, two keys hashing to the same bucket, are unavoidable once the table grows, and are resolved either through chaining, where each bucket holds a small list, or through open addressing, which probes for the next free slot. A hash table's performance degrades if the hash function distributes keys poorly, or if the table is not resized as it fills up.

Every PHP array is, internally, an ordered hash table: the Zend Engine's ``HashTable`` C structure maps both integer and string keys to a bucket, while a separate doubly linked list preserves insertion order. This is why PHP arrays iterate in a deterministic, insertion order, unlike hash tables in many other languages.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-table.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-table.html","name":"Hash Table","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:26:03 +0000","dateModified":"Wed, 19 Aug 2026 08:26:03 +0000","description":"A hash table is a data structure that stores key-value pairs, and uses a hash function to compute an index, called a bucket, from the key, so that a value can be inserted, looked up, or deleted in average constant time O(1), regardless of the size of the table","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-table.html"]}],"alternateName":["hashtable"],"keywords":["data structure","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random-access.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rainbow-table.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bucket.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Hash_table"},{"@type":"CreativeWork","name":"PHP's HashTable implementation","url":"https:\/\/www.phpinternalsbook.com\/php5\/hashtables\/basic_structure.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hash-table"}]}]}</script>
```php
<?php

    // PHP's associative array is a hash table
    $ages = [];
    $ages['Alice'] = 30; // 'Alice' is hashed to find its bucket
    $ages['Bob']   = 25;

    echo $ages['Alice']; // O(1) average lookup

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Hash_table)**
## See Also

+ [PHP's HashTable implementation](https://www.phpinternalsbook.com/php5/hashtables/basic_structure.html)

## Related

+ [Hash](hash.html)
+ [Array, []](array.html)
+ [Random Access](random-access.html)
+ [Rainbow Table](rainbow-table.html)
+ [Bucket](bucket.html)
