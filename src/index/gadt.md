# Generalized Algebraic Data Type (GADT)
A Generalized Algebraic Data Type, ``GADT``, is an extension of algebraic data types in which each constructor of the type can return a different, more specific instantiation of the type. This allows the type system to track which constructor was used and to refine the available operations accordingly.

The canonical example is a typed expression tree:

``data Expr a where``
``  Lit    :: Int  -> Expr Int``
``  IsZero :: Expr Int  -> Expr Bool``
``  If     :: Expr Bool -> Expr a -> Expr a -> Expr a``

A ``Lit`` produces an ``Expr Int``, while ``IsZero`` produces an ``Expr Bool``. An ``eval`` function typed ``eval :: Expr a -> a`` can then return an ``Int`` for ``Lit`` nodes and a ``Bool`` for ``IsZero`` nodes, with the type system proving that no ill-typed expression tree can be constructed.

``GADT`` effectively let data constructors act as proofs. They are natively supported in ``Haskell``, ``OCaml``, and Scala via type refinement in pattern matches.

PHP supports none of the prerequisites for ``GADT``: it has no algebraic data types, no generics, and no exhaustive pattern matching. Class hierarchies with ``instanceof`` dispatch approximate the structural separation of cases, but without the type refinement that makes ``GADT`` powerful. The return type of a method cannot vary based on which subclass was constructed.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gadt.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gadt.html","name":"Generalized Algebraic Data Type (GADT)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 08:40:15 +0000","dateModified":"Tue, 11 Aug 2026 08:40:15 +0000","description":"A Generalized Algebraic Data Type, GADT, is an extension of algebraic data types in which each constructor of the type can return a different, more specific instantiation of the type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gadt.html"]}],"alternateName":["generalized-algebraic-data-type"],"keywords":["concept","type","acronym","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algebraic-data-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sum-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-inference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-matching.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependent-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Generalized_algebraic_data_type"},{"@type":"CreativeWork","name":"Generalized Algebraic Data Types and Object-Oriented Programming","url":"https:\/\/www.microsoft.com\/en-us\/research\/wp-content\/uploads\/2016\/02\/gadtoop.pdf"},{"@type":"CreativeWork","name":"6.4.9. Generalised Algebraic Data Types (GADTs) \u2014 GHC User's Guide","url":"https:\/\/ghc.gitlab.haskell.org\/ghc\/doc\/users_guide\/exts\/gadt.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"gadt"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Generalized_algebraic_data_type)**
## See Also

+ [Generalized Algebraic Data Types and Object-Oriented Programming](https://www.microsoft.com/en-us/research/wp-content/uploads/2016/02/gadtoop.pdf)
+ [6.4.9. Generalised Algebraic Data Types (GADTs) — GHC User's Guide](https://ghc.gitlab.haskell.org/ghc/doc/users_guide/exts/gadt.html)

## Related

+ [Algebraic Data Type](algebraic-data-type.html)
+ [Sum Type](sum-type.html)
+ [Generics](generics.html)
+ [Type System](type-system.html)
+ [Type Inference](type-inference.html)
+ [Pattern Matching](pattern-matching.html)
+ [Dependent Type](dependent-type.html)
