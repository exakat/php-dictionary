# Monomorphization
Monomorphization is a compile-time technique used to optimize generic or polymorphic code by generating separate, type-specific versions of a function or class for each concrete type it is used with.

Instead of a single generic implementation that handles multiple types at runtime, which typically requires boxing, dynamic dispatch, or type checks, the compiler produces one specialized copy per type. Each copy is fully concrete and can be optimized independently, eliminating the overhead of indirection.

Monomorphization is the strategy used by Rust and C++ templates.

The opposite approach is called type erasure: a single generic implementation operates on a uniform representation, paying a small runtime cost in exchange for a smaller binary. Java and PHP generics proposals lean toward type erasure.

PHP does not implement monomorphization directly because it has no generics at the language level. However, PHP's JIT compiler performs a related optimization called type specialization or opcode specialization: once the runtime observes that a variable consistently holds a specific type, it emits a native-code path for that type only. This is dynamic, profile-guided monomorphization.

Understanding monomorphization helps explain both the performance ceiling of generic code in languages that support it and the design trade-offs of the JIT strategy.
## See Also

+ [Rust reference: monomorphization](https://doc.rust-lang.org/reference/glossary.html#monomorphization)
+ [PHP RFC: Generic Types and Functions](https://wiki.php.net/rfc/generics)

Related : [Generics](Generics), [Just In Time (JIT)](Just In Time (JIT)), [Types Erasure](Types Erasure), [Opcode Specialisation](Opcode Specialisation), [Polymorphism](Polymorphism), [Compile](Compile)
