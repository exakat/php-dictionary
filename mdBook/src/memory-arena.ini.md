# Memory Arena
A memory arena is a large, contiguous block of memory that is pre-allocated upfront and then carved into smaller pieces on demand. Rather than calling the system allocator individually for each object, code requests slices from the arena, which simply advances an internal pointer. When the arena is done, the entire block is freed in a single operation.

The pattern trades deallocation granularity for speed and locality. Individual objects in an arena cannot be freed independently; the whole region is reclaimed at once when the arena's lifetime ends. This makes arenas well-suited for short-lived, batch-style work such as parsing, compilation, or request processing where many small allocations are created together and discarded together.

PHP's Zend Engine uses arena allocators internally for per-request memory. The ``emalloc``/``efree`` family of functions that extensions use are backed by a per-request arena that is wiped at the end of each request, making object-by-object deallocation unnecessary. OPcache similarly uses dedicated memory regions for its shared memory segment. PHP's JIT compiler uses arenas for generated machine code buffers.

From a PHP developer's perspective, arenas are invisible: the engine manages them automatically. Understanding them helps explain why PHP's per-request memory model is efficient and why ``memory_limit`` is enforced at the request level rather than the object level.
## See Also

+ [PHP internals: memory management](https://www.phpinternalsbook.com/php7/memory_management/zend_memory_manager.html)

Related : [Memory](Memory), [memory_limit](memory_limit), [Garbage Collection](Garbage Collection), [Zval](Zval), [Opcache](Opcache), [Just In Time (JIT)](Just In Time (JIT)), [Shared Memory](Shared Memory), [Memory Leak](Memory Leak), [php://memory](php://memory)
