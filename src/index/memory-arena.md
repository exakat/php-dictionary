# Memory Arena
A memory arena is a large, contiguous block of memory that is pre-allocated upfront and then carved into smaller pieces on demand. Rather than calling the system allocator individually for each object, code requests slices from the arena, which simply advances an internal pointer. When the arena is done, the entire block is freed in a single operation.

The pattern trades deallocation granularity for speed and locality. Individual objects in an arena cannot be freed independently; the whole region is reclaimed at once when the arena's lifetime ends. This makes arenas well-suited for short-lived, batch-style work such as parsing, compilation, or request processing where many small allocations are created together and discarded together.

PHP's Zend Engine uses arena allocators internally for per-request memory. The ``emalloc``/``efree`` family of functions that extensions use are backed by a per-request arena that is wiped at the end of each request, making object-by-object deallocation unnecessary. OPcache similarly uses dedicated memory regions for its shared memory segment. PHP's JIT compiler uses arenas for generated machine code buffers.

From a PHP developer's perspective, arenas are invisible: the engine manages them automatically. Understanding them helps explain why PHP's per-request memory model is efficient and why ``memory_limit`` is enforced at the request level rather than the object level.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/memory-arena.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/memory-arena.html","name":"Memory Arena","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:55:39 +0000","dateModified":"Sat, 11 Jul 2026 14:55:39 +0000","description":"A memory arena is a large, contiguous block of memory that is pre-allocated upfront and then carved into smaller pieces on demand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Memory Arena.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Region-based_memory_management)**
## See Also

+ [PHP internals: memory management](https://www.phpinternalsbook.com/php7/memory_management/zend_memory_manager.html)

## Related

+ [Memory](memory.ini.html)
+ [memory\_limit](memory_limit.ini.html)
+ [Garbage Collection](garbage-collection.ini.html)
+ [Zval](zval.ini.html)
+ [Opcache](opcache.ini.html)
+ [Just In Time (JIT)](jit.ini.html)
+ [Shared Memory](shared-memory.ini.html)
+ [Memory Leak](memory-leak.ini.html)
+ [php://memory](php-memory.ini.html)
