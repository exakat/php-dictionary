# Generics
Generics are a style of types, where the type of a property, parameter or return is specified at the declaration level. 

The generics syntax looks like: ``$users = new List<User>();`` where ``List`` is a class that holds a list of items, and those items are of the type between brackets. Here, it is ``User``.

Generics allows the creation of general classes, that can process several types of data. The actual application's type is declared in the type itself. This is similar to configure an array to only handle one type of elements.

Generics have been submitted as RFC since 2016, and are currently not implemented, in the foreseeable future. 

One implementation of generics is available, with transpiling: see ``mrsuh/php-generics``.

Generics are generally considered to be not supported, although external tools provide this feature, such as static analysis. Generics are not supported at the engine level.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html","name":"Generics","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Generics are a style of types, where the type of a property, parameter or return is specified at the declaration level","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html"]}],"alternateName":["parametered-polymorphism"],"keywords":["feature","future","rfc","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monomorphization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-erasure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algebraic-data-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/existential-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gadt.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/higher-kinded-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phantom-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/row-polymorphism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/template-metaprogramming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/stitcher.io\/blog\/generics-in-php-1"},{"@type":"CreativeWork","name":"Why we can't have generics in PHP","url":"https:\/\/stitcher.io\/blog\/generics-in-php-3"},{"@type":"CreativeWork","name":"PHP RFC: Generic Types and Functions","url":"https:\/\/wiki.php.net\/rfc\/generics"},{"@type":"CreativeWork","name":"mrsuh\/php-generics","url":"https:\/\/github.com\/mrsuh\/php-generics"},{"@type":"CreativeWork","name":"How To Start Using Generic Types In PHP","url":"https:\/\/dev.to\/jszutkowski\/how-to-start-using-generic-types-in-php-2f1k"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"generics"}]}]}</script>
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
