# Generics
Generics are a style of types, where the type of a property, parameter or return is specified at the declaration level. 

The generics syntax looks like: ``$users = new List<User>();`` where ``List`` is a class that holds a list of items, and those items are of the type between brackets. Here, it is ``User``.

Generics allows the creation of general classes, that can process several types of data. The actual application's type is declared in the type itself. This is similar to configure an array to only handle one type of elements.

Generics have been submitted as RFC since 2016, and are currently not implemented, in the foreseeable future. 

One implementation of generics is available, with transpiling: see ``mrsuh/php-generics``.

Generics are generally considered to be not supported, although external tools provide this feature, such as static analysis. Generics are not supported at the engine level.
## See Also

+ [Why we can't have generics in PHP](https://stitcher.io/blog/generics-in-php-3)
+ [PHP RFC: Generic Types and Functions](https://wiki.php.net/rfc/generics)
+ [mrsuh/php-generics](https://github.com/mrsuh/php-generics)
+ [How To Start Using Generic Types In PHP](https://dev.to/jszutkowski/how-to-start-using-generic-types-in-php-2f1k)

Related : [Type Checking](Type Checking), [Polymorphism](Polymorphism), [Collection](Collection), [Monomorphization](Monomorphization), [Types Erasure](Types Erasure), [Algebraic Data Type](Algebraic Data Type), [Existential Type](Existential Type), [Generalized Algebraic Data Type (GADT)](Generalized Algebraic Data Type (GADT)), [Higher-Kinded Type](Higher-Kinded Type), [Phantom Type](Phantom Type), [Row Polymorphism](Row Polymorphism), [Template Metaprogramming (TMP)](Template Metaprogramming (TMP)), [Type System](Type System)
