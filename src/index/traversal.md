# Traversal
A traversal is the process of listing all elements in a data structure. 

``foreach()`` is a command to do a traversal on an array, an object or an iterable object. It is also possible to use an iterator.

Traversal may be recursive: for example, the recursive iterators in the SPL library feature the ``RecursiveArrayIterator`` class, which traverses multi-dimensional arrays.

Traversal of a tree or graph data structure turns the graph into an array-like list.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversal.html","name":"Traversal","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:49:15 +0000","dateModified":"Wed, 19 Aug 2026 06:49:15 +0000","description":"A traversal is the process of listing all elements in a data structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Traversal.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreach.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/loop.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Graph_traversal"},{"@type":"CreativeWork","name":"Using PHP Arrays: A Guide for Beginners","url":"https:\/\/www.sitepoint.com\/php-arrays-tutorial\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"traversal"}]}]}</script>
```php
<?php

    $array = range(0, 9);
    
    foreach($array as $item) {
        print "$item\n";
        // list digits from 0 to 9
    }
    
    // adds 10, 11, 12 to the previous array
    // in a separate 
    $array[] = [10, 11, 12];
    
    $iterator = new RecursiveArrayIterator($array);
    foreach($iterator as $item) {
        print "$item\n";
        // list digits from 0 to 12
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Graph_traversal)**
## See Also

+ [Using PHP Arrays: A Guide for Beginners](https://www.sitepoint.com/php-arrays-tutorial/)

## Related

+ [Iterator](iterator.html)
+ [foreach()](foreach.html)
+ [Loops](loop.html)
