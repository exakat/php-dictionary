# Sealed Class
A sealed class, or sealed interface, is a class whose set of direct subclasses is restricted and known at compile time. Only explicitly listed classes are allowed to extend it; no other class may do so, even in an external library.

This makes sealed hierarchies exhaustively enumerable: a compiler can verify that a ``switch`` or pattern match covers every possible subtype, with no catch-all needed.

Sealed classes are available in Kotlin ``sealed class``, Java since version 17, ``sealed interface ... permits ...``, Scala 3 ``sealed trait``, and Swift, ``enum`` with associated values serves a similar role. C# has no direct equivalent but approximates it with abstract classes and internal constructors.

PHP has no concept of sealed classes or sealed interfaces. Inheritance cannot be restricted beyond ``final``, which prevents all subclassing rather than allowing a controlled set.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sealed-class.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sealed-class.ini.html","name":"Sealed Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:59:03 +0000","dateModified":"Fri, 24 Jul 2026 15:59:03 +0000","description":"A sealed class, or sealed interface, is a class whose set of direct subclasses is restricted and known at compile time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Sealed Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // PHP has no sealed keyword.
    // final prevents all subclassing, which is too restrictive.
    final class Circle {}  // Nothing can extend Circle at all.

    // The sealed pattern must be enforced by convention or static analysis only.

?>
```

**[Documentation](https://www.scala-lang.org/api/3.3.2/scala/caps$$Sealed.html)**
## See Also

+ [Kotlin sealed classes](https://kotlinlang.org/docs/sealed-classes.html)
+ [Java 17 sealed classes JEP 409](https://openjdk.org/jeps/409)
+ [Scala 3 sealed traits](https://docs.scala-lang.org/tour/pattern-matching.html#sealed-classes)

## Related

+ [Final Keyword](final.ini.html)
+ [Abstract Class](abstract-class.ini.html)
+ [Inheritance](inheritance.ini.html)
+ [Enumeration (enum)](enum.ini.html)
+ [Pattern Matching](pattern-matching.ini.html)
+ [Polymorphism](polymorphism.ini.html)
