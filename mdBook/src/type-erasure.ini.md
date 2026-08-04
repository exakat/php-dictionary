# Types Erasure
Type Erasure is the removal of type annotations from the source code when going to production. 

There may be several goals with this operation: 

+ Handle unsupported types, such as generics. They are supported by tooling, but not by the PHP engine, so after using them during development phase, they are removed
+ Speed up production code by removing execution-time checks. This requires that types are safe and sound

Type erasure is a transformation tool, akin to transpiling, that convert the developed code into production code: it is run at deployment stage.

One alternative to type erasure is monomorphization, where every needed type is created.
## See Also

+ [mrsuh/php-generics](https://github.com/mrsuh/php-generics)
+ [Bound Erased Generic Types](https://wiki.php.net/rfc/bound_erased_generic_types)

Related : [Type System](Type System), [Deployment](Deployment), [Transpile](Transpile), [Monomorphization](Monomorphization), [Generics](Generics), [Performance](Performance), [Type Checking](Type Checking)
