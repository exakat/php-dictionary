# SplStorageObjects
The ``SplObjectStorage`` class provides a list for objects: it may also the values with the same object, making it an efficient object set.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstorageobjects.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstorageobjects.html","name":"SplStorageObjects","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``SplObjectStorage`` class provides a list for objects: it may also the values with the same object, making it an efficient object set","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SplStorageObjects.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"SplStorageObjects"}]}]}</script>
```php
<?php

    // As an object set
    $s = new SplObjectStorage();
    
    $o1 = new stdClass;
    $o2 = new stdClass;
    $o3 = new stdClass;
    
    $s->attach($o1);
    $s->attach($o2);
    
    var_dump($s->contains($o1)); // true
    var_dump($s->contains($o2)); // true
    var_dump($s->contains($o3)); // false

?>
```

**[Documentation](https://www.php.net/manual/en/class.splobjectstorage.php)**
## See Also

+ [SplObjectStorage Class](https://medium.com/@vishwa.chikate/php-splobjectstorage-class-530ff5b5aab7)

## Related

+ [Object](object.html)
+ [SplObjectStorage](splobjectstorage.html)
+ [Weakmap](weakmap.html)
