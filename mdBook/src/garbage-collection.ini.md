# Garbage Collection
Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values. 

PHP allocate memory as it needs, when variables and objects are created in the code. Sometimes, those variables are destroyed, using explicit ``unset()`` calls, or implicitly, when leaving a method or destroying an object. 

To speed up the process, PHP postpone memory cleaning until the end of the application, or when it reaches some internal threshold. Then, it review all the currently allocated variables, and when they are not used anymorem, that is when the reference counter is down to 0, it removes them.

As garbage collection requires pausing the execution, PHP only runs it on-demand, via ``gc_collect_cycles()`` calls, or once every ten thousands objects to clear.

Garbage collection is needed to handle circular reference: objects that mutually reference each other, and which requires some processing to identify as dead data.
```php
<?php

    // Explicit Garbage Collection 
    gc_collect_cycles();

    // implicit garbage collection
    // well,... difficult to illustrate, right?

?>
```

## See Also

+ [Easy to understand PHP garbage collection mechanism](https://medium.com/geekculture/easy-to-understand-php-garbage-collection-mechanism-ee5c5bde5a5d)

Related : [Zval](Zval), [References](References), [Reference Count](Reference Count), [Circular Reference](Circular Reference), [unset()](unset()), [Weakmap](Weakmap), [Memory](Memory), [Memory Leak](Memory Leak), [Ownership](Ownership), [Linear Type](Linear Type), [Memory Arena](Memory Arena), [Object Lifecycle](Object Lifecycle), [Shutdown](Shutdown)
