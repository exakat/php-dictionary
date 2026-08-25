# Higher-Kinded Type
A higher-kinded type is a type that abstracts over type constructors rather than over concrete types. Where a generic type parameter ``T`` ranges over types like ``int`` or ``string``, a higher-kinded parameter ``F`` ranges over types that themselves take a type argument, such as ``List``, ``Maybe``, or ``Promise``.

The canonical example is the ``Functor`` typeclass in Haskell: ``fmap :: (a -> b) -> f a -> f b``. Here ``f`` is a higher-kinded variable: it stands for any one-argument type constructor. This allows writing a single abstraction that works uniformly over ``List a``, ``Maybe a``, ``IO a``, and any other functor, without knowing the concrete constructor in advance.

Higher-kinded types are what make purely functional abstractions like Functor, Monad, Applicative, and Foldable expressible without code duplication. Languages that support them natively include Haskell, Scala, PureScript, and Rust, partially through associated types.

PHP does not support higher-kinded types. PHP lacks native generics entirely, which is a prerequisite. Even PHPStan and Psalm ``@template`` annotations cover first-order generics only; they cannot abstract over parameterized type constructors. Functional PHP libraries such as ``marcosh/lamphpda`` approximate monadic abstractions at runtime using conventions, but without static type-level verification.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/higher-kinded-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/higher-kinded-type.html","name":"Higher-Kinded Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 04:49:31 +0000","dateModified":"Thu, 16 Jul 2026 04:49:31 +0000","description":"A higher-kinded type is a type that abstracts over type constructors rather than over concrete types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/higher-kinded-type.html"]}],"alternateName":["HKT"],"keywords":["concept","type","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functional-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-erasure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monomorphization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algebraic-data-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Kind_(type_theory)"},{"@type":"CreativeWork","name":"Higher-Kinded Types in Depth","url":"https:\/\/www.numberanalytics.com\/blog\/higher-kinded-types-in-depth"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"higher-kinded-type"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Kind_(type_theory))**
## See Also

+ [Higher-Kinded Types in Depth](https://www.numberanalytics.com/blog/higher-kinded-types-in-depth)

## Related

+ [Generics](generics.html)
+ [Type System](type-system.html)
+ [Polymorphism](polymorphism.html)
+ [Functional Programming](functional-programming.html)
+ [Types Erasure](type-erasure.html)
+ [Monomorphization](monomorphization.html)
+ [Algebraic Data Type](algebraic-data-type.html)

## Related packages

+ [marcosh/lamphpda](https://packagist.org/packages/marcosh/lamphpda)
