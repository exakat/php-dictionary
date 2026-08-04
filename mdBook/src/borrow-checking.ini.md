# Ownership
Ownership, and Borrow Checking, is a compile-time memory model, central to Rust, in which every value has exactly one owning variable at a time. Moving a value transfers ownership and invalidates the previous owner; borrowing lets code use a value temporarily through a reference, either one mutable borrow or any number of read-only borrows at once, but never both simultaneously. The borrow checker enforces these rules at compile time, which is how Rust prevents data races and use-after-free bugs without a garbage collector.

Because the rules are purely static, a program that violates them is simply rejected by the compiler before it ever runs; there is no runtime cost and no runtime check.

PHP has no ownership model and no borrow checker. Objects are reference-counted and garbage-collected: a value can be referenced from as many variables as needed, simultaneously and without restriction, and the engine tracks lifetime automatically rather than the type system enforcing exclusive access. This removes an entire class of bugs the borrow checker targets, at the cost of PHP being unable to statically guarantee the absence of concurrent, conflicting mutation of the same object from unrelated parts of a program.
## See Also

+ [Ownership in Rust](https://doc.rust-lang.org/book/ch04-01-what-is-ownership.html)

Related : [Move Semantics](Move Semantics), [Readonly](Readonly), [Immutable](Immutable), [Garbage Collection](Garbage Collection), [Shared Memory](Shared Memory)
