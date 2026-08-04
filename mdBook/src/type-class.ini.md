# Type Class
A type class, as found in Haskell and similar languages, is a named set of functions that a type must implement in order to belong to that class. Unlike an object-oriented interface, a type class is not implemented by the type itself: instances are declared separately, so a type class can be attached to a type after the fact, including to types the author does not own, such as built-in numbers or third-party types.

Type classes provide ad-hoc polymorphism: the same function name, such as ``==`` or ``show``, resolves to a different implementation depending on the type of its argument, chosen by the compiler at compile time rather than looked up in a vtable at runtime.

PHP has no type class mechanism. Ad-hoc polymorphism over an existing type can only be approximated with interfaces implemented by the type's own class, free functions with manual type checks, or match expressions branching on ``gettype()``. There is no way to retroactively attach a shared contract to a type PHP's engine already knows about, such as ``int`` or a class from a third-party library, without wrapping it.
Related : [Interface](Interface), [Polymorphism](Polymorphism), [Generics](Generics), [Overloading](Overloading), [Type System](Type System)
