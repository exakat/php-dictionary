# Iterator
An iterator is an object which can be traversed with a ``foreach()`` loop. 

``Iterator`` is an interface, which shall be implemented by objects. There are also a list of default iterators in the SPL extension.

An iterator may be turned into an array, with the ``iterator_to_array()`` function. Arrays may be used as iterator natively, or used as an objet with the ``ArrayObject`` class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iterator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iterator.ini.html","name":"Iterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"An iterator is an object which can be traversed with a ``foreach()`` loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Iterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Standard PHP Library (SPL)](spl.ini.html)
+ [Traversal](traversal.ini.html)
+ [foreach()](foreach.ini.html)
+ [ArrayObject](arrayobject.ini.html)
+ [DirectoryIterator](directoryiterator.ini.html)
+ [iterator\_to\_array()](iterator_to_array.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
+ [RecursiveIterator](recursiveiterator.ini.html)
+ [IteratorAggregate](iteratoraggregate.ini.html)
+ [OuterIterator](outeriterator.ini.html)
+ [RecursiveArrayIterator](recursivearrayiterator.ini.html)
+ [RecursiveDirectoryIterator](recursivedirectoryiterator.ini.html)
+ [SeekableIterator](seekableiterator.ini.html)
+ [SplDoublyLinkedList](spldoublylinkedlist.ini.html)
+ [SplFileObject](splfileobject.ini.html)
+ [SplObjectStorage](splobjectstorage.ini.html)
