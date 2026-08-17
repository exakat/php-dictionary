# Random Access
Random access is the ability to read or write any element of a data structure, or any byte of a file, directly, in constant time, without having to traverse the elements that precede it. It is opposed to sequential access, where reaching the n-th element requires visiting every element before it first.

Arrays and hash maps typically offer random access: a PHP array, whether indexed or associative, is actually an ordered hash map under the hood, and supports ``O(1)`` average-time access to any key, be it ``$array[5]`` or ``$array['name']``. Linked lists, by contrast, only offer sequential access: reaching the n-th node means walking the list from its head.

Random access also applies to files: ``fopen()`` combined with ``fseek()`` lets a program jump directly to any offset of a file and read or write from there, instead of reading it sequentially from the start. This is essential for large files, or for formats such as fixed-length record files, where the position of a given record can be computed directly.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random-access.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random-access.html","name":"Random Access","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:11:31 +0000","dateModified":"Fri, 14 Aug 2026 08:11:31 +0000","description":"Random access is the ability to read or write any element of a data structure, or any byte of a file, directly, in constant time, without having to traverse the elements that precede it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Random Access.html"]}],"alternateName":["direct-access"],"keywords":["concept","datastructure","performance"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-table.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fseek.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Random_access"},{"@type":"CreativeWork","name":"Sequential access","url":"https:\/\/en.wikipedia.org\/wiki\/Sequential_access"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"random-access"}]}]}</script>
```php
<?php

    $array = ['a', 'b', 'c', 'd'];
    echo $array[2]; // random access: 'c', without reading 'a' and 'b' first

    $handle = fopen('data.bin', 'rb');
    fseek($handle, 100); // jump directly to byte 100
    $chunk = fread($handle, 10);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Random_access)**
## See Also

+ [Sequential access](https://en.wikipedia.org/wiki/Sequential_access)

## Related

+ [Array, []](array.html)
+ [Hash Table](hash-table.html)
+ [fseek()](fseek.html)
