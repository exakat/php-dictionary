# Traversal
A traversal is the process of listing all elements in a data structure. 

``foreach()`` is a command to do a traversal on an array, an object or an iterable object. It is also possible to use an iterator.

Traversal may be recursive: for example, the recursive iterators in the SPL library features the ``RecursiveArrayIterator`` class, which traverses multi-dimensional arrays.

Traversal of a tree or graph datastructure turns the graph into a array-like list.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/traversal.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/traversal.ini.html","name":"Traversal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A traversal is the process of listing all elements in a data structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Traversal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Iterator](iterator.ini.html)
+ [foreach()](foreach.ini.html)
+ [Loops](loop.ini.html)
