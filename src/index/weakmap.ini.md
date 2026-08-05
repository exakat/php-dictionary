# Weakmap
``WeakMap`` is a special object type: it is a map, or key–value storage, where the keys are objects and the stored values are automatically removed when the object key is no longer referenced anywhere else in your program.

``WeakMap`` may be considered as an associative array, where the keys must be objects. It also doesn't prevent objects from being garbage-collected.

``WeakMap`` was introduced in version 8.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/weakmap.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/weakmap.ini.html","name":"Weakmap","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 29 Jun 2026 09:32:47 +0000","dateModified":"Mon, 29 Jun 2026 09:32:47 +0000","description":"``WeakMap`` is a special object type: it is a map, or key\u2013value storage, where the keys are objects and the stored values are automatically removed when the object key is no longer referenced anywhere else in your program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Weakmap.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Array, []](array.ini.html)
+ [SplStorageObjects](splstorageobjects.ini.html)
+ [Garbage Collection](garbage-collection.ini.html)
+ [Resource Leak](resource-leak.ini.html)
