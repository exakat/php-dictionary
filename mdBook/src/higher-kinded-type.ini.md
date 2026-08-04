# Higher-Kinded Type
A higher-kinded type is a type that abstracts over type constructors rather than over concrete types. Where a generic type parameter ``T`` ranges over types like ``int`` or ``string``, a higher-kinded parameter ``F`` ranges over types that themselves take a type argument, such as ``List``, ``Maybe``, or ``Promise``.

The canonical example is the ``Functor`` typeclass in Haskell: ``fmap :: (a -> b) -> f a -> f b``. Here ``f`` is a higher-kinded variable: it stands for any one-argument type constructor. This allows writing a single abstraction that works uniformly over ``List a``, ``Maybe a``, ``IO a``, and any other functor, without knowing the concrete constructor in advance.

Higher-kinded types are what make purely functional abstractions like Functor, Monad, Applicative, and Foldable expressible without code duplication. Languages that support them natively include Haskell, Scala, PureScript, and Rust, partially through associated types.

PHP does not support higher-kinded types. PHP lacks native generics entirely, which is a prerequisite. Even PHPStan and Psalm ``@template`` annotations cover first-order generics only; they cannot abstract over parameterized type constructors. Functional PHP libraries such as ``marcosh/lamphpda`` approximate monadic abstractions at runtime using conventions, but without static type-level verification.
## See Also

+ [Higher-Kinded Types in Depth](https://www.numberanalytics.com/blog/higher-kinded-types-in-depth)

Related : [Generics](Generics), [Type System](Type System), [Polymorphism](Polymorphism), [Functional Programming](Functional Programming), [Types Erasure](Types Erasure), [Monomorphization](Monomorphization), [Algebraic Data Type](Algebraic Data Type)
