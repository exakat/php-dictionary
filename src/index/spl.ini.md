# Standard PHP Library (SPL)
The Standard PHP Library, the SPL, is a collection of interfaces and classes that are meant to solve common problems.

SPL offers features, functions, classes and interfaces in many different fields: iterators, data structures, files, exceptions, and observers. 

One of the most famous SPL features is the function ``spl_autoload_register()``, which register an autoload handler.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/spl.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/spl.ini.html","name":"Standard PHP Library (SPL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:18:52 +0000","dateModified":"Mon, 06 Jul 2026 10:18:52 +0000","description":"The Standard PHP Library, the SPL, is a collection of interfaces and classes that are meant to solve common problems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Standard PHP Library (SPL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // SPL and autoloading
    spl_autoload_register(function ($class) {
        include 'classes/' . $class . '.class.php';
    });
    
    if ($object instanceof Countable) {
        $count = count($object);
    } elseif ($object instanceof Traversable) {
        $count = iterator_count($object);
    } else {
        print "Can't count this";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/book.spl.php)**
## See Also

+ [PHP and SPL: Standard PHP Library Functions and Classes](https://reintech.io/blog/php-spl-standard-library-functions-classes)

## Related

+ [Class Autoloading](autoload.ini.html)
+ [Datastack](datastack.ini.html)
+ [DirectoryIterator](directoryiterator.ini.html)
+ [Iterator](iterator.ini.html)
+ [UnexpectedValueException](unexpectedvalueexception.ini.html)
+ [Data Structure](datastructure.ini.html)
+ [OuterIterator](outeriterator.ini.html)
+ [Overflow](overflow.ini.html)
+ [RecursiveIterator](recursiveiterator.ini.html)
+ [IteratorAggregate](iteratoraggregate.ini.html)
+ [RecursiveArrayIterator](recursivearrayiterator.ini.html)
+ [RecursiveDirectoryIterator](recursivedirectoryiterator.ini.html)
+ [SeekableIterator](seekableiterator.ini.html)
+ [SplDoublyLinkedList](spldoublylinkedlist.ini.html)
+ [SplFileInfo](splfileinfo.ini.html)
+ [SplFileObject](splfileobject.ini.html)
+ [SplObjectStorage](splobjectstorage.ini.html)
+ [SplObserver](splobserver.ini.html)
+ [SplSubject](splsubject.ini.html)
