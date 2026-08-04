# Algebraic Data Type
An algebraic data type is a composite type built by combining simpler types through two fundamental operations: product and sum.

A product type holds values of several types simultaneously, connected by AND. Every field is always present. A struct, record, or tuple is a product type: ``{ name: string, age: int }`` means a name AND an age, always both.

A sum type holds a value of exactly one of several alternatives, connected by OR. Only one case is active at a time, and each case may carry different data. ``Circle(Float) | Rectangle(Float, Float)`` means either a circle, with a radius, or a rectangle, with two sides, never both at once.

Full ADT systems pair sum types with exhaustive pattern matching: the compiler enforces that every case is handled, turning incomplete switches into compile-time errors.

PHP supports product types natively through classes and arrays. Sum types are approximated by union types ``int|string`` and by enums, but neither carries associated data per variant, and ``match`` does not perform exhaustive structural decomposition over union type values.

PHP does not support true ADT.
## See Also

+ [ADTs in PHP: an approximation guide](https://stitcher.io/blog/php-enums)

Related : [Sum Type](Sum Type), [Generalized Algebraic Data Type (GADT)](Generalized Algebraic Data Type (GADT)), [Union Type](Union Type), [Enumeration (enum)](Enumeration (enum)), [Intersection Type](Intersection Type), [Pattern Matching](Pattern Matching), [Type System](Type System), [Generics](Generics), [Existential Type](Existential Type), [Higher-Kinded Type](Higher-Kinded Type), [Option Type](Option Type), [Result Type](Result Type), [Structural Pattern Matching](Structural Pattern Matching)
