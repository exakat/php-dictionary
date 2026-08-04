# Memory Leak
A memory leak is the allocation of memory, without its deallocation when that memory is not needed anymore. 

As PHP manage the memory itself, memory leaks happen in different situations: 

+ Accumulation of data, without release. For example, an array that collect new data and never removes them.
+ Circular reference: objects or variables keep a link one onto each other, and the PHP garbage collector see them in use.
+ Disabled garbage collector: the garbage collector was disabled, and does not perform
+ Bugs: sometimes, the memory usage is not voluntary.
## See Also

+ [Preventing Memory Leaks in PHP: Best Practices for Efficient Memory Management](https://medium.com/@aji658911/preventing-memory-leaks-in-php-best-practices-for-efficient-memory-management-beac555020f2)

Related : [Circular Reference](Circular Reference), [Garbage Collection](Garbage Collection), [Leak](Leak), [Resource Leak](Resource Leak)
