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
Related : [Algebraic Data Type](Algebraic Data Type), [Sum Type](Sum Type), [Generics](Generics), [Type System](Type System), [Type Inference](Type Inference), [Pattern Matching](Pattern Matching), [Dependent Type](Dependent Type)
