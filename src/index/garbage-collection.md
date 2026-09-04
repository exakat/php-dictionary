# Garbage Collection
Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values. 

PHP allocates memory as it needs, when variables and objects are created in the code. Sometimes, those variables are destroyed, using explicit ``unset()`` calls, or implicitly, when leaving a method or destroying an object.

To speed up the process, PHP postpones memory cleaning until the end of the application, or when it reaches some internal threshold. Then, it reviews all the currently allocated variables, and when they are not used anymore, that is when the reference counter is down to 0, it removes them.

As garbage collection requires pausing the execution, PHP only runs it on-demand, via ``gc_collect_cycles()`` calls, or once every ten thousand objects to clear.

Garbage collection is needed to handle circular reference: objects that mutually reference each other, and which requires some processing to identify as dead data.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html","name":"Garbage Collection","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:25:51 +0000","dateModified":"Wed, 19 Aug 2026 08:25:51 +0000","description":"Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html"]}],"alternateName":["gc"],"keywords":["php engine"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zval.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference-count.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circular-reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weakmap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory-leak.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/borrow-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linear-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory-arena.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-lifecycle.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shutdown.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/features.gc.php"},{"@type":"CreativeWork","name":"Easy to understand PHP garbage collection mechanism","url":"https:\/\/medium.com\/geekculture\/easy-to-understand-php-garbage-collection-mechanism-ee5c5bde5a5d"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"garbage-collection"}]}]}</script>
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

+ [Zval](zval.html)
+ [References](reference.html)
+ [Reference Count](reference-count.html)
+ [Circular Reference](circular-reference.html)
+ [unset()](unset.html)
+ [Weakmap](weakmap.html)
+ [Memory](memory.html)
+ [Memory Leak](memory-leak.html)
+ [Ownership](borrow-checking.html)
+ [Linear Type](linear-type.html)
+ [Memory Arena](memory-arena.html)
+ [Object Lifecycle](object-lifecycle.html)
+ [Shutdown](shutdown.html)
