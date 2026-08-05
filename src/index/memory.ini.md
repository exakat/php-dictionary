# Memory
Memory refers to the portion of server RAM that PHP uses to execute scripts. 

Whenever a PHP application runs, it needs memory to load the PHP engine, parse the code, store data and various caches.

Memory usage is controlled by the ``memory_limit`` directive, and functions like ``get_memory_usage()``. 

PHP handles the memory management, and there is little more to do beyond setting the overall limit, although some features may become memory hungry easily, such as ``array_merge()`` in loops, or the ``N+1 query`` problem.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/memory.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/memory.ini.html","name":"Memory","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:08 +0000","dateModified":"Fri, 19 Jun 2026 21:25:08 +0000","description":"Memory refers to the portion of server RAM that PHP uses to execute scripts","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Memory.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.memory-limit)**
## Related

+ [memory\_limit](memory_limit.ini.html)
+ [Circular Reference](circular-reference.ini.html)
+ [Free](free.ini.html)
+ [Garbage Collection](garbage-collection.ini.html)
+ [Shared Memory](shared-memory.ini.html)
+ [Treemap](treemap.ini.html)
