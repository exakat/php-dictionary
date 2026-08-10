# Algebraic Data Type
An algebraic data type is a composite type built by combining simpler types through two fundamental operations: product and sum.

A product type holds values of several types simultaneously, connected by AND. Every field is always present. A ``struct``, record, or tuple is a product type: ``{ name: string, age: int }`` means a name AND an age, always both.

A sum type holds a value of exactly one of several alternatives, connected by OR. Only one case is active at a time, and each case may carry different data. ``Circle(Float) | Rectangle(Float, Float)`` means either a circle, with a radius, or a rectangle, with two sides, never both at once.

Full ``ADT`` systems pair sum types with exhaustive pattern matching: the compiler enforces that every case is handled, turning incomplete switches into compile-time errors.

PHP supports product types natively through classes and arrays. Sum types are approximated by union types ``int|string`` and by enums, but neither carries associated data per variant, and ``match`` does not perform exhaustive structural decomposition over union type values.

PHP does not support true ``ADT``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algebraic-data-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algebraic-data-type.html","name":"Algebraic Data Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 17:00:06 +0000","dateModified":"Mon, 10 Aug 2026 17:00:06 +0000","description":"An algebraic data type is a composite type built by combining simpler types through two fundamental operations: product and sum","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Algebraic Data Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Algebraic Data Type"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Algebraic_data_type)**
## See Also

+ [ADTs in PHP: an approximation guide](https://stitcher.io/blog/php-enums)

## Related

+ [Sum Type](sum-type.html)
+ [Generalized Algebraic Data Type (GADT)](gadt.html)
+ [Union Type](union-type.html)
+ [Enumeration (enum)](enum.html)
+ [Intersection Type](intersection-type.html)
+ [Pattern Matching](pattern-matching.html)
+ [Type System](type-system.html)
+ [Generics](generics.html)
+ [Existential Type](existential-type.html)
+ [Higher-Kinded Type](higher-kinded-type.html)
+ [Option Type](option-type.html)
+ [Result Type](result-type.html)
+ [Structural Pattern Matching](structural-pattern-matching.html)
