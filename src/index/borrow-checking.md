# Ownership
Ownership, and Borrow Checking, is a compile-time memory model, central to Rust, in which every value has exactly one owning variable at a time. Moving a value transfers ownership and invalidates the previous owner; borrowing lets code use a value temporarily through a reference, either one mutable borrow or any number of read-only borrows at once, but never both simultaneously. The borrow checker enforces these rules at compile time, which is how Rust prevents data races and use-after-free bugs without a garbage collector.

Because the rules are purely static, a program that violates them is simply rejected by the compiler before it ever runs; there is no runtime cost and no runtime check.

PHP has no ownership model and no borrow checker. Objects are reference-counted and garbage-collected: a value can be referenced from as many variables as needed, simultaneously and without restriction, and the engine tracks lifetime automatically rather than the type system enforcing exclusive access. This removes an entire class of bugs the borrow checker targets, at the cost of PHP being unable to statically guarantee the absence of concurrent, conflicting mutation of the same object from unrelated parts of a program.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/borrow-checking.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/borrow-checking.html","name":"Ownership","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:27:51 +0000","dateModified":"Thu, 09 Jul 2026 08:27:51 +0000","description":"Ownership, and Borrow Checking, is a compile-time memory model, central to Rust, in which every value has exactly one owning variable at a time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Ownership.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"borrow-checking"}]}]}</script>
**[Documentation](view-source:https://en.wikipedia.org/wiki/Rust_(programming_language)#Ownership_and_references)**
## See Also

+ [Ownership in Rust](https://doc.rust-lang.org/book/ch04-01-what-is-ownership.html)

## Related

+ [Move Semantics](move-semantics.html)
+ [Readonly](readonly.html)
+ [Immutable](immutable.html)
+ [Garbage Collection](garbage-collection.html)
+ [Shared Memory](shared-memory.html)
