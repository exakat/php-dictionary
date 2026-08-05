# Generalized Algebraic Data Type (GADT)
A Generalized Algebraic Data Type, GADT, is an extension of algebraic data types in which each constructor of the type can return a different, more specific instantiation of the type. This allows the type system to track which constructor was used and to refine the available operations accordingly.

The canonical example is a typed expression tree:

``data Expr a where``
``  Lit    :: Int  -> Expr Int``
``  IsZero :: Expr Int  -> Expr Bool``
``  If     :: Expr Bool -> Expr a -> Expr a -> Expr a``

A ``Lit`` produces an ``Expr Int``, while ``IsZero`` produces an ``Expr Bool``. An ``eval`` function typed ``eval :: Expr a -> a`` can then return an ``Int`` for ``Lit`` nodes and a ``Bool`` for ``IsZero`` nodes, with the type system proving that no ill-typed expression tree can be constructed.

GADTs effectively let data constructors act as proofs. They are natively supported in Haskell, OCaml, and Scala via type refinement in pattern matches.

PHP supports none of the prerequisites for GADTs: it has no algebraic data types, no generics, and no exhaustive pattern matching. Class hierarchies with ``instanceof`` dispatch approximate the structural separation of cases, but without the type refinement that makes GADTs powerful. The return type of a method cannot vary based on which subclass was constructed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/gadt.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/gadt.ini.html","name":"Generalized Algebraic Data Type (GADT)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:23 +0000","dateModified":"Wed, 05 Aug 2026 08:17:23 +0000","description":"A Generalized Algebraic Data Type, GADT, is an extension of algebraic data types in which each constructor of the type can return a different, more specific instantiation of the type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Generalized Algebraic Data Type (GADT).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Generalized_algebraic_data_type)**
## See Also

+ [Generalized Algebraic Data Types and Object-Oriented Programming](https://www.microsoft.com/en-us/research/wp-content/uploads/2016/02/gadtoop.pdf)
+ [6.4.9. Generalised Algebraic Data Types (GADTs) — GHC User's Guide](https://ghc.gitlab.haskell.org/ghc/doc/users_guide/exts/gadt.html)

## Related

+ [Algebraic Data Type](algebraic-data-type.ini.html)
+ [Sum Type](sum-type.ini.html)
+ [Generics](generics.ini.html)
+ [Type System](type-system.ini.html)
+ [Type Inference](type-inference.ini.html)
+ [Pattern Matching](pattern-matching.ini.html)
+ [Dependent Type](dependent-type.ini.html)
