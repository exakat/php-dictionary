# Linear Type
Linear types and affine types are type disciplines that constrain how many times a value may be used.

A linear type requires that a value is used exactly once: it must be consumed, neither discarded nor duplicated. This mirrors the mathematical concept of linear logic where a resource is a one-time token.

An affine type relaxes the constraint to at most once: a value may be consumed or silently dropped, but not used twice. Rust's ownership system is built on affine types: moving a value transfers ownership, and the original binding becomes invalid.

The primary motivation is resource safety. A file handle typed as linear or affine cannot be closed twice, cannot be forgotten open, and cannot be shared without explicit transfer. The compiler enforces correct resource lifecycle without runtime bookkeeping.

Related to this is the concept of uniqueness types, Clean language, and borrowing, which temporarily grants read-only access without transferring ownership.

PHP has no linear or affine types. Values are reference-counted and can be freely copied, aliased, or ignored. Resource handles, like file handles, database connections, can be opened, re-used, or left unclosed without any static-analysis enforcement. The closest approximations are:

+ Destructor-based cleanup, ``__destruct``, which runs when the last reference is dropped, but does not prevent double-use.
+ Value objects that track consumed state with a boolean flag at runtime.
+ Static analysis rules that heuristically warn about unclosed resources.
## See Also

+ [Ownership in Rust](https://doc.rust-lang.org/book/ch04-01-what-is-ownership.html)

Related : [Type System](Type System), [resource](resource), [Resource Leak](Resource Leak), [References](References), [Garbage Collection](Garbage Collection), [Destructor](Destructor), [Immutable](Immutable)
