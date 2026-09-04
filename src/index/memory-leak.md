# Memory Leak
A memory leak is the allocation of memory, without its deallocation when that memory is not needed anymore. 

As PHP manages the memory itself, memory leaks happen in different situations:

+ Accumulation of data, without release. For example, an array that collects new data and never removes them.
+ Circular reference: objects or variables keep a link one onto each other, and the PHP garbage collector sees them in use.
+ Disabled garbage collector: the garbage collector was disabled, and does not perform collection
+ Bugs: sometimes, the memory usage is not voluntary.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory-leak.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory-leak.html","name":"Memory Leak","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:48:43 +0000","dateModified":"Wed, 19 Aug 2026 06:48:43 +0000","description":"A memory leak is the allocation of memory, without its deallocation when that memory is not needed anymore","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory-leak.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circular-reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leak.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource-leak.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Memory_leak"},{"@type":"CreativeWork","name":"Preventing Memory Leaks in PHP: Best Practices for Efficient Memory Management","url":"https:\/\/medium.com\/@aji658911\/preventing-memory-leaks-in-php-best-practices-for-efficient-memory-management-beac555020f2"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"memory-leak"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Memory_leak)**
## See Also

+ [Preventing Memory Leaks in PHP: Best Practices for Efficient Memory Management](https://medium.com/@aji658911/preventing-memory-leaks-in-php-best-practices-for-efficient-memory-management-beac555020f2)

## Related

+ [Circular Reference](circular-reference.html)
+ [Garbage Collection](garbage-collection.html)
+ [Leak](leak.html)
+ [Resource Leak](resource-leak.html)
