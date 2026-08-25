# Standard PHP Library (SPL)
The Standard PHP Library, the SPL, is a collection of interfaces and classes that are meant to solve common problems.

SPL offers features, functions, classes and interfaces in many different fields: iterators, data structures, files, exceptions, and observers. 

One of the most famous SPL features is the function ``spl_autoload_register()``, which register an autoload handler.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html","name":"Standard PHP Library (SPL)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The Standard PHP Library, the SPL, is a collection of interfaces and classes that are meant to solve common problems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html"]}],"keywords":["extension","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autoload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directoryiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unexpectedvalueexception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/outeriterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overflow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursiveiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iteratoraggregate.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivearrayiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivedirectoryiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/seekableiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spldoublylinkedlist.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splfileinfo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splfileobject.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobjectstorage.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobserver.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.spl.php"},{"@type":"CreativeWork","name":"PHP and SPL: Standard PHP Library Functions and Classes","url":"https:\/\/reintech.io\/blog\/php-spl-standard-library-functions-classes"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"spl"}]}]}</script>
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

+ [Class Autoloading](autoload.html)
+ [Datastack](datastack.html)
+ [DirectoryIterator](directoryiterator.html)
+ [Iterator](iterator.html)
+ [UnexpectedValueException](unexpectedvalueexception.html)
+ [Data Structure](datastructure.html)
+ [OuterIterator](outeriterator.html)
+ [Overflow](overflow.html)
+ [RecursiveIterator](recursiveiterator.html)
+ [IteratorAggregate](iteratoraggregate.html)
+ [RecursiveArrayIterator](recursivearrayiterator.html)
+ [RecursiveDirectoryIterator](recursivedirectoryiterator.html)
+ [SeekableIterator](seekableiterator.html)
+ [SplDoublyLinkedList](spldoublylinkedlist.html)
+ [SplFileInfo](splfileinfo.html)
+ [SplFileObject](splfileobject.html)
+ [SplObjectStorage](splobjectstorage.html)
+ [SplObserver](splobserver.html)
+ [SplSubject](splsubject.html)
