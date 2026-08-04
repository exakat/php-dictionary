# Memory
Memory refers to the portion of server RAM that PHP uses to execute scripts. 

Whenever a PHP application runs, it needs memory to load the PHP engine, parse the code, store data and various caches.

Memory usage is controlled by the ``memory_limit`` directive, and functions like ``get_memory_usage()``. 

PHP handles the memory management, and there is little more to do beyond setting the overall limit, although some features may become memory hungry easily, such as ``array_merge()`` in loops, or the ``N+1 query`` problem.
Related : [memory_limit](memory_limit), [Circular Reference](Circular Reference), [Free](Free), [Garbage Collection](Garbage Collection), [Shared Memory](Shared Memory), [Treemap](Treemap)
