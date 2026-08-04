# Sealed Class
A sealed class, or sealed interface, is a class whose set of direct subclasses is restricted and known at compile time. Only explicitly listed classes are allowed to extend it; no other class may do so, even in an external library.

This makes sealed hierarchies exhaustively enumerable: a compiler can verify that a ``switch`` or pattern match covers every possible subtype, with no catch-all needed.

Sealed classes are available in Kotlin ``sealed class``, Java since version 17, ``sealed interface ... permits ...``, Scala 3 ``sealed trait``, and Swift, ``enum`` with associated values serves a similar role. C# has no direct equivalent but approximates it with abstract classes and internal constructors.

PHP has no concept of sealed classes or sealed interfaces. Inheritance cannot be restricted beyond ``final``, which prevents all subclassing rather than allowing a controlled set.
```php
<?php

    // PHP has no sealed keyword.
    // final prevents all subclassing, which is too restrictive.
    final class Circle {}  // Nothing can extend Circle at all.

    // The sealed pattern must be enforced by convention or static analysis only.

?>
```

## See Also

+ [Kotlin sealed classes](https://kotlinlang.org/docs/sealed-classes.html)
+ [Java 17 sealed classes JEP 409](https://openjdk.org/jeps/409)
+ [Scala 3 sealed traits](https://docs.scala-lang.org/tour/pattern-matching.html#sealed-classes)

Related : [Final Keyword](Final Keyword), [Abstract Class](Abstract Class), [Inheritance](Inheritance), [Enumeration (enum)](Enumeration (enum)), [Pattern Matching](Pattern Matching), [Polymorphism](Polymorphism)
