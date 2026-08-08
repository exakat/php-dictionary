# Generics
Generics are a style of types, where the type of a property, parameter or return is specified at the declaration level. 

The generics syntax looks like: ``$users = new List<User>();`` where ``List`` is a class that holds a list of items, and those items are of the type between brackets. Here, it is ``User``.

Generics allows the creation of general classes, that can process several types of data. The actual application's type is declared in the type itself. This is similar to configure an array to only handle one type of elements.

Generics have been submitted as RFC since 2016, and are currently not implemented, in the foreseeable future. 

One implementation of generics is available, with transpiling: see ``mrsuh/php-generics``.

Generics are generally considered to be not supported, although external tools provide this feature, such as static analysis. Generics are not supported at the engine level.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html","name":"Generics","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Generics are a style of types, where the type of a property, parameter or return is specified at the declaration level","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Generics.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Generics"}]}]}</script>
**[Documentation](https://stitcher.io/blog/generics-in-php-1)**
## See Also

+ [Why we can't have generics in PHP](https://stitcher.io/blog/generics-in-php-3)
+ [PHP RFC: Generic Types and Functions](https://wiki.php.net/rfc/generics)
+ [mrsuh/php-generics](https://github.com/mrsuh/php-generics)
+ [How To Start Using Generic Types In PHP](https://dev.to/jszutkowski/how-to-start-using-generic-types-in-php-2f1k)

## Related

+ [Type Checking](type-checking.html)
+ [Polymorphism](polymorphism.html)
+ [Collection](collection.html)
+ [Monomorphization](monomorphization.html)
+ [Types Erasure](type-erasure.html)
+ [Algebraic Data Type](algebraic-data-type.html)
+ [Existential Type](existential-type.html)
+ [Generalized Algebraic Data Type (GADT)](gadt.html)
+ [Higher-Kinded Type](higher-kinded-type.html)
+ [Phantom Type](phantom-type.html)
+ [Row Polymorphism](row-polymorphism.html)
+ [Template Metaprogramming (TMP)](template-metaprogramming.html)
+ [Type System](type-system.html)
