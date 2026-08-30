# Sealed Class
A sealed class, or sealed interface, is a class whose set of direct children is restricted and known at compile time. Only explicitly listed classes are allowed to extend it; no other class may do so, even in an external library.

This makes sealed hierarchies exhaustively enumerable: a compiler can verify that a ``switch`` or pattern match covers every possible subtype, with no catch-all needed.

Sealed classes are available in Kotlin ``sealed class``, Java since version 17, ``sealed interface ... permits ...``, Scala 3 ``sealed trait``, and Swift, ``enum`` with associated values serves a similar role. C# has no direct equivalent but approximates it with abstract classes and internal constructors.

PHP has no concept of sealed classes or sealed interfaces. Inheritance cannot be restricted beyond ``final``, which prevents all children class rather than allowing a controlled set.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sealed-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sealed-class.html","name":"Sealed Class","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 06:05:15 +0000","dateModified":"Thu, 13 Aug 2026 06:05:15 +0000","description":"A sealed class, or sealed interface, is a class whose set of direct children is restricted and known at compile time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sealed-class.html"]}],"alternateName":["sealed-interface","sealed-hierarchy"],"keywords":["unsupported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inheritance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-matching.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.scala-lang.org\/api\/3.3.2\/scala\/caps$$Sealed.html"},{"@type":"CreativeWork","name":"Kotlin sealed classes","url":"https:\/\/kotlinlang.org\/docs\/sealed-classes.html"},{"@type":"CreativeWork","name":"Java 17 sealed classes JEP 409","url":"https:\/\/openjdk.org\/jeps\/409"},{"@type":"CreativeWork","name":"Scala 3 sealed traits","url":"https:\/\/docs.scala-lang.org\/tour\/pattern-matching.html#sealed-classes"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sealed-class"}]}]}</script>
```php
<?php

    // PHP has no sealed keyword.
    // final prevents all children, which is too restrictive.
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

+ [Final Keyword](final.html)
+ [Abstract Class](abstract-class.html)
+ [Inheritance](inheritance.html)
+ [Enumeration (enum)](enum.html)
+ [Pattern Matching](pattern-matching.html)
+ [Polymorphism](polymorphism.html)
