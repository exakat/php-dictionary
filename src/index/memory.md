# Memory
Memory refers to the portion of server RAM that PHP uses to execute scripts. 

Whenever a PHP application runs, it needs memory to load the PHP engine, parse the code, store data and various caches.

Memory usage is controlled by the ``memory_limit`` directive, and functions like ``memory_get_usage()``.

PHP handles the memory management, and there is little more to do beyond setting the overall limit, although some features may become memory hungry easily, such as ``array_merge()`` in loops, or the ``N+1 query`` problem.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory.html","name":"Memory","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 07:40:49 +0000","dateModified":"Mon, 24 Aug 2026 07:40:49 +0000","description":"Memory refers to the portion of server RAM that PHP uses to execute scripts","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory.html"]}],"keywords":["resource"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory_limit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circular-reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/free.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/treemap.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/ini.core.php#ini.memory-limit"},{"@type":"CreativeWork","name":"Mastering PHP Memory Limits: A Complete Guide","url":"https:\/\/nestify.io\/blog\/php-memory-limit\/"},{"@type":"CreativeWork","name":"PHP Memory Management: How to Monitor Usage, Peaks, and Limits","url":"https:\/\/dev.to\/lifeportal20002010\/php-memory-management-how-to-monitor-usage-peaks-and-limits-4l1a"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"memory"}]}]}</script>
**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.memory-limit)**
## See Also

+ [Mastering PHP Memory Limits: A Complete Guide](https://nestify.io/blog/php-memory-limit/)
+ [PHP Memory Management: How to Monitor Usage, Peaks, and Limits](https://dev.to/lifeportal20002010/php-memory-management-how-to-monitor-usage-peaks-and-limits-4l1a)

## Related

+ [memory\_limit](memory_limit.html)
+ [Circular Reference](circular-reference.html)
+ [Free](free.html)
+ [Garbage Collection](garbage-collection.html)
+ [Shared Memory](shared-memory.html)
+ [Treemap](treemap.html)
