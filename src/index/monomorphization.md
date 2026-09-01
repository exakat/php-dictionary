# Monomorphization
Monomorphization is a compile-time technique used to optimize generic or polymorphic code by generating separate, type-specific versions of a function or class for each concrete type it is used with.

Instead of a single generic implementation that handles multiple types at runtime, which typically requires boxing, dynamic dispatch, or type checks, the compiler produces one specialized copy per type. Each copy is fully concrete and can be optimized independently, eliminating the overhead of indirection.

Monomorphization is the strategy used by Rust and C++ templates.

The opposite approach is called type erasure: a single generic implementation operates on a uniform representation, paying a small runtime cost in exchange for a smaller binary. Java and PHP generics proposals lean toward type erasure.

PHP does not implement monomorphization directly because it has no generics at the language level. However, PHP's JIT compiler performs a related optimization called type specialization or opcode specialization: once the runtime observes that a variable consistently holds a specific type, it emits a native-code path for that type only. This is dynamic, profile-guided monomorphization.

Understanding monomorphization helps explain both the performance ceiling of generic code in languages that support it and the design trade-offs of the JIT strategy.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monomorphization.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monomorphization.html","name":"Monomorphization","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Monomorphization is a compile-time technique used to optimize generic or polymorphic code by generating separate, type-specific versions of a function or class for each concrete type it is used with","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monomorphization.html"]}],"keywords":["concept","internals","performance","compile-time","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-erasure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opcode-specialization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Monomorphization"},{"@type":"CreativeWork","name":"Rust reference: monomorphization","url":"https:\/\/doc.rust-lang.org\/reference\/glossary.html#monomorphization"},{"@type":"CreativeWork","name":"PHP RFC: Generic Types and Functions","url":"https:\/\/wiki.php.net\/rfc\/generics"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"monomorphization"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Monomorphization)**
## See Also

+ [Rust reference: monomorphization](https://doc.rust-lang.org/reference/glossary.html#monomorphization)
+ [PHP RFC: Generic Types and Functions](https://wiki.php.net/rfc/generics)

## Related

+ [Generics](generics.html)
+ [Just In Time (JIT)](jit.html)
+ [Types Erasure](type-erasure.html)
+ [Opcode Specialisation](opcode-specialization.html)
+ [Polymorphism](polymorphism.html)
+ [Compile](compile.html)
