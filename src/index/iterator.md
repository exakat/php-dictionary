# Iterator
An iterator is an object which can be traversed with a ``foreach()`` loop. 

``Iterator`` is an interface, which shall be implemented by objects. There are also a list of default iterators in the SPL extension.

An iterator may be turned into an array, with the ``iterator_to_array()`` function. Arrays may be used as iterator natively, or used as an objet with the ``ArrayObject`` class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator.html","name":"Iterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"An iterator is an object which can be traversed with a ``foreach()`` loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Iterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Iterator"}]}]}</script>
```php
<?php

    class myIterator implements Iterator { /**/ }
    
    $it = new myIterator;
    
    foreach($it as $key => $value) {
        var_dump($key, $value);
        echo "\n";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.iterator.php)**
## See Also

+ [Modern PHP Developer - Iterator](https://startutorial.com/view/modern-php-developer-iterator)
+ [Iterator in PHP](https://refactoring.guru/design-patterns/iterator/php/example)

## Related

+ [Standard PHP Library (SPL)](spl.html)
+ [Traversal](traversal.html)
+ [foreach()](foreach.html)
+ [ArrayObject](arrayobject.html)
+ [DirectoryIterator](directoryiterator.html)
+ [iterator\_to\_array()](iterator_to_array.html)
+ [PHP Native Interfaces](php-interface.html)
+ [RecursiveIterator](recursiveiterator.html)
+ [IteratorAggregate](iteratoraggregate.html)
+ [OuterIterator](outeriterator.html)
+ [RecursiveArrayIterator](recursivearrayiterator.html)
+ [RecursiveDirectoryIterator](recursivedirectoryiterator.html)
+ [SeekableIterator](seekableiterator.html)
+ [SplDoublyLinkedList](spldoublylinkedlist.html)
+ [SplFileObject](splfileobject.html)
+ [SplObjectStorage](splobjectstorage.html)
