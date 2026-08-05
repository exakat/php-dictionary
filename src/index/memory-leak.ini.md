# Memory Leak
A memory leak is the allocation of memory, without its deallocation when that memory is not needed anymore. 

As PHP manage the memory itself, memory leaks happen in different situations: 

+ Accumulation of data, without release. For example, an array that collect new data and never removes them.
+ Circular reference: objects or variables keep a link one onto each other, and the PHP garbage collector see them in use.
+ Disabled garbage collector: the garbage collector was disabled, and does not perform
+ Bugs: sometimes, the memory usage is not voluntary.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/memory-leak.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/memory-leak.ini.html","name":"Memory Leak","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:16 +0000","dateModified":"Fri, 19 Jun 2026 21:25:16 +0000","description":"A memory leak is the allocation of memory, without its deallocation when that memory is not needed anymore","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Memory Leak.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Memory_leak)**
## See Also

+ [Preventing Memory Leaks in PHP: Best Practices for Efficient Memory Management](https://medium.com/@aji658911/preventing-memory-leaks-in-php-best-practices-for-efficient-memory-management-beac555020f2)

## Related

+ [Circular Reference](circular-reference.ini.html)
+ [Garbage Collection](garbage-collection.ini.html)
+ [Leak](leak.ini.html)
+ [Resource Leak](resource-leak.ini.html)
