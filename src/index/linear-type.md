# Linear Type
Linear types and affine types are type disciplines that constrain how many times a value may be used.

A linear type requires that a value is used exactly once: it must be consumed, neither discarded nor duplicated. This mirrors the mathematical concept of linear logic where a resource is a one-time token.

An affine type relaxes the constraint to at most once: a value may be consumed or silently dropped, but not used twice. Rust's ownership system is built on affine types: moving a value transfers ownership, and the original binding becomes invalid.

The primary motivation is resource safety. A file handle typed as linear or affine cannot be closed twice, cannot be forgotten open, and cannot be shared without explicit transfer. The compiler enforces correct resource lifecycle without runtime bookkeeping.

Related to this is the concept of uniqueness types, Clean language, and borrowing, which temporarily grants read-only access without transferring ownership.

PHP has no linear or affine types. Values are reference-counted and can be freely copied, aliased, or ignored. Resource handles, like file handles, database connections, can be opened, re-used, or left unclosed without any static-analysis enforcement. The closest approximations are:

+ Destructor-based cleanup, ``__destruct``, which runs when the last reference is dropped, but does not prevent double-use.
+ Value objects that track consumed state with a boolean flag at runtime.
+ Static analysis rules that heuristically warn about unclosed resources.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linear-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linear-type.html","name":"Linear Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:34:05 +0000","dateModified":"Thu, 09 Jul 2026 08:34:05 +0000","description":"Linear types and affine types are type disciplines that constrain how many times a value may be used","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linear-type.html"]}],"alternateName":["affine-type","ownership-type"],"keywords":["concept","type","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource-leak.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/destructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/immutable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Substructural_type_system"},{"@type":"CreativeWork","name":"Ownership in Rust","url":"https:\/\/doc.rust-lang.org\/book\/ch04-01-what-is-ownership.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"linear-type"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Substructural_type_system)**
## See Also

+ [Ownership in Rust](https://doc.rust-lang.org/book/ch04-01-what-is-ownership.html)

## Related

+ [Type System](type-system.html)
+ [resource](resource.html)
+ [Resource Leak](resource-leak.html)
+ [References](reference.html)
+ [Garbage Collection](garbage-collection.html)
+ [Destructor](destructor.html)
+ [Immutable](immutable.html)
