# Value Type
A value type, as in C#, Swift, or Go, is copied in full whenever it is assigned or passed to a function, rather than shared by reference; two variables holding a value type never alias the same storage. Value types are typically small enough, and lack the identity-based behavior of objects, that the compiler can allocate them on the stack, or inline within another structure, and reclaim them automatically when they go out of scope, without involving the garbage collector or heap allocator at all.

This differs from a reference type, where the variable holds a pointer to shared, heap-allocated storage, and copying the variable only copies the pointer, leaving both variables observing the same underlying data.

Value type are related to stack allocation, though they are not the same.

PHP has exactly two kinds of values with respect to this distinction: scalars, like ``int``, ``float``, ``bool``, ``string``, and arrays behave like value types, copied on assignment, aka cow, courtesy of copy-on-write so the actual duplication is deferred until a mutation would otherwise be observable; every ``object``, without exception, is a reference type, allocated on the heap and shared by reference whenever assigned or passed. PHP gives the programmer no way to declare a class as a value type, and no way to request stack allocation for anything: allocation strategy is entirely up to the engine and is never a choice exposed in the language.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/value-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/value-type.html","name":"Value Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:07:30 +0000","dateModified":"Thu, 09 Jul 2026 09:07:30 +0000","description":"A value type, as in C#, Swift, or Go, is copied in full whenever it is assigned or passed to a function, rather than shared by reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Value Type.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"value-type"}]}]}</script>
```php
<?php

    $a = [1, 2, 3];
    $b = $a;      // copy-on-write: logically a full copy, value semantics
    $b[] = 4;
    echo count($a); // 3, unaffected
    
    class Box { public int $n = 1; }
    $x = new Box();
    $y = $x;      // reference copy: both variables share the same object
    $y->n = 2;
    echo $x->n;   // 2, objects are never value types in PHP

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Value_type_and_reference_type)**
## See Also

+ [Go Type System Overview](https://go101.org/article/type-system-overview.html)

## Related

+ [Struct Type](struct-type.html)
+ [Immutable](immutable.html)
+ [Move Semantics](move-semantics.html)
+ [Array, []](array.html)
+ [Copy On Write (COW)](copy-on-write.html)
