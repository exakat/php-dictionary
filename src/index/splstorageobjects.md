# SplStorageObjects
The ``SplObjectStorage`` class provides a list for objects: it may also the values with the same object, making it an efficient object set.

``SplObjectStorage`` is part of the Standard PHP Library, ``SPL``, available since version 5.1. It stores a collection of objects, using the object itself, rather than its content, as the key: internally, it relies on the object's unique handle, so two different instances with identical properties are treated as two distinct entries, while the same instance is always recognized, even if referenced through different variables. Each stored object may optionally be associated with a piece of data, making the structure work both as a set of unique objects, and as a map from objects to arbitrary values.

The class implements ``Countable``, ``Iterator``, ``ArrayAccess``, and ``Serializable``, so it supports ``count()``, ``foreach`` iteration, and access through the array syntax, ``$storage[$object]``, in addition to its own dedicated methods such as ``attach()``, ``detach()``, and ``contains()``. Because comparing objects by identity would otherwise require manual bookkeeping, typically an array keyed by ``spl_object_hash()`` or ``spl_object_id()``, ``SplObjectStorage`` is commonly used to track visited nodes while walking a graph, to associate metadata with objects without modifying their own properties, or to implement the Identity Map pattern.

Since PHP 8.0, the ``WeakMap`` class offers a related, but distinct, capability: like ``SplObjectStorage``, it maps objects to values, but it holds only weak references to its keys, allowing them to be garbage collected when no other reference to them remains, which ``SplObjectStorage`` does not do.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstorageobjects.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstorageobjects.html","name":"SplStorageObjects","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:46:47 +0000","dateModified":"Fri, 14 Aug 2026 08:46:47 +0000","description":"The SplObjectStorage class provides a list for objects: it may also the values with the same object, making it an efficient object set","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstorageobjects.html"]}],"keywords":["dataset","map"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobjectstorage.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weakmap.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.splobjectstorage.php"},{"@type":"CreativeWork","name":"SplObjectStorage Class","url":"https:\/\/medium.com\/@vishwa.chikate\/php-splobjectstorage-class-530ff5b5aab7"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"splstorageobjects"}]}]}</script>
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
