# Garbage Collection
Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values. 

PHP allocate memory as it needs, when variables and objects are created in the code. Sometimes, those variables are destroyed, using explicit ``unset()`` calls, or implicitly, when leaving a method or destroying an object. 

To speed up the process, PHP postpone memory cleaning until the end of the application, or when it reaches some internal threshold. Then, it review all the currently allocated variables, and when they are not used anymorem, that is when the reference counter is down to 0, it removes them.

As garbage collection requires pausing the execution, PHP only runs it on-demand, via ``gc_collect_cycles()`` calls, or once every ten thousands objects to clear.

Garbage collection is needed to handle circular reference: objects that mutually reference each other, and which requires some processing to identify as dead data.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/garbage-collection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/garbage-collection.html","name":"Garbage Collection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:41:30 +0000","dateModified":"Mon, 13 Jul 2026 18:41:30 +0000","description":"Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Garbage Collection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Explicit Garbage Collection 
    gc_collect_cycles();

    // implicit garbage collection
    // well,... difficult to illustrate, right?

?>
```

**[Documentation](https://www.php.net/manual/en/features.gc.php)**
## See Also

+ [Easy to understand PHP garbage collection mechanism](https://medium.com/geekculture/easy-to-understand-php-garbage-collection-mechanism-ee5c5bde5a5d)

## Related

+ [Zval](zval.ini.html)
+ [References](reference.ini.html)
+ [Reference Count](reference-count.ini.html)
+ [Circular Reference](circular-reference.ini.html)
+ [unset()](unset.ini.html)
+ [Weakmap](weakmap.ini.html)
+ [Memory](memory.ini.html)
+ [Memory Leak](memory-leak.ini.html)
+ [Ownership](borrow-checking.ini.html)
+ [Linear Type](linear-type.ini.html)
+ [Memory Arena](memory-arena.ini.html)
+ [Object Lifecycle](object-lifecycle.ini.html)
+ [Shutdown](shutdown.ini.html)
