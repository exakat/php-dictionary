# SplObjectStorage
``SplObjectStorage`` provides a map from objects to arbitrary data, or a set of objects. Objects are used as keys, so each object appears only once. The associated data slot is optional.

It is commonly used to manage observers in the Observer pattern, to associate metadata with objects without modifying them, and as an object-keyed dictionary.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobjectstorage.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobjectstorage.html","name":"SplObjectStorage","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 18:57:10 +0000","dateModified":"Mon, 06 Jul 2026 18:57:10 +0000","description":"SplObjectStorage provides a map from objects to arbitrary data, or a set of objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SplObjectStorage.html"]}],"keywords":["spl","datastructure","object"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstorageobjects.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.splobjectstorage.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"splobjectstorage"}]}]}</script>
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

+ [Standard PHP Library (SPL)](spl.html)
+ [Data Structure](datastructure.html)
+ [Collection](collection.html)
+ [Object](object.html)
+ [Iterator](iterator.html)
+ [SplStorageObjects](splstorageobjects.html)
+ [SplSubject](splsubject.html)
