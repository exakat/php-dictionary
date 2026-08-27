# Weakmap
``WeakMap`` is a special object type: it is a map, or key–value storage, where the keys are objects and the stored values are automatically removed when the object key is no longer referenced anywhere else in the program.

``WeakMap`` may be considered an associative array, where the keys must be objects. It also doesn't prevent objects from being garbage-collected.

``WeakMap`` was introduced in version 8.0.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weakmap.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weakmap.html","name":"Weakmap","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:41:39 +0000","dateModified":"Tue, 11 Aug 2026 14:41:39 +0000","description":"WeakMap is a special object type: it is a map, or key\u2013value storage, where the keys are objects and the stored values are automatically removed when the object key is no longer referenced anywhere else in the program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weakmap.html"]}],"keywords":["php class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstorageobjects.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource-leak.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.weakmap.php"},{"@type":"CreativeWork","name":"Hacking PHP\u2019s WeakMap for Value Object D\u00d7","url":"https:\/\/withinboredom.info\/posts\/hacking-phps-weakmap-for-value-object-dx\/"},{"@type":"CreativeWork","name":"WeakMaps a hidden gem in PHP","url":"https:\/\/flareapp.io\/blog\/weakmaps-a-hidden-gem-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"weakmap"}]}]}</script>
```php
<?php

    $weakMap = new WeakMap();
    
    $obj = new stdClass();
    $weakMap[$obj] = 'some data';
    
    echo $weakMap[$obj]; // some data
    
    // Now unset $obj:
    unset($obj);
    
    // The entry is automatically removed from the WeakMap
    var_dump($weakMap); // empty WeakMap

?>
```

**[Documentation](https://www.php.net/manual/en/class.weakmap.php)**
## See Also

+ [Hacking PHP’s WeakMap for Value Object D×](https://withinboredom.info/posts/hacking-phps-weakmap-for-value-object-dx/)
+ [WeakMaps a hidden gem in PHP](https://flareapp.io/blog/weakmaps-a-hidden-gem-in-php)

## Related

+ [Array, []](array.html)
+ [SplStorageObjects](splstorageobjects.html)
+ [Garbage Collection](garbage-collection.html)
+ [Resource Leak](resource-leak.html)
