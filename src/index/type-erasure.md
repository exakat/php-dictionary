# Types Erasure
Type Erasure is the removal of type annotations from the source code when going to production. 

There may be several goals with this operation: 

+ Handle unsupported types, such as generics. They are supported by tooling, but not by the PHP engine, so after using them during development phase, they are removed
+ Speed up production code by removing execution-time checks. This requires that types are safe and sound

Type erasure is a transformation tool, akin to transpiling, that convert the developed code into production code: it is run at deployment stage.

One alternative to type erasure is monomorphization, where every needed type is created.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-erasure.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-erasure.html","name":"Types Erasure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Type Erasure is the removal of type annotations from the source code when going to production","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Types Erasure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Types Erasure"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Type_erasure)**
## See Also

+ [mrsuh/php-generics](https://github.com/mrsuh/php-generics)
+ [Bound Erased Generic Types](https://wiki.php.net/rfc/bound_erased_generic_types)

## Related

+ [Type System](type.html)
+ [Deployment](deployment.html)
+ [Transpile](transpile.html)
+ [Monomorphization](monomorphization.html)
+ [Generics](generics.html)
+ [Performance](performance.html)
+ [Type Checking](type-checking.html)
