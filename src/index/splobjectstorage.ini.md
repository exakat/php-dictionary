# SplObjectStorage
``SplObjectStorage`` provides a map from objects to arbitrary data, or a set of objects. Objects are used as keys, so each object appears only once. The associated data slot is optional.

It is commonly used to manage observers in the Observer pattern, to associate metadata with objects without modifying them, and as an object-keyed dictionary.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/splobjectstorage.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/splobjectstorage.ini.html","name":"SplObjectStorage","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 18:57:10 +0000","dateModified":"Mon, 06 Jul 2026 18:57:10 +0000","description":"``SplObjectStorage`` provides a map from objects to arbitrary data, or a set of objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/SplObjectStorage.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $storage = new SplObjectStorage();
    
    $obj1 = new stdClass();
    $obj2 = new stdClass();
    
    $storage->attach($obj1, 'data for obj1');
    $storage->attach($obj2, 'data for obj2');
    
    foreach ($storage as $object) {
        echo $storage->getInfo() . PHP_EOL;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.splobjectstorage.php)**
## Related

+ [Standard PHP Library (SPL)](spl.ini.html)
+ [Data Structure](datastructure.ini.html)
+ [Collection](collection.ini.html)
+ [Object](object.ini.html)
+ [Iterator](iterator.ini.html)
+ [SplStorageObjects](splstorageobjects.ini.html)
+ [SplSubject](splsubject.ini.html)
