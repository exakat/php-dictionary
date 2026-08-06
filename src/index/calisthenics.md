# Object Calisthenics
Object Calisthenics is a set of nine coding constraints, introduced by ``Jeff Bay``, meant to be practiced as an exercise to force better object-oriented design habits, rather than followed strictly in production code at all times.

The nine rules are:

+ Only one level of indentation per method.
+ Don't use the ``else`` keyword.
+ Wrap primitive types and strings in dedicated classes.
+ Use only one dot per line, limiting method chaining.
+ Don't abbreviate names.
+ Keep entities, classes and packages, small.
+ Limit instance variables to two per class.
+ Use first-class collections, wrapping any collection in a dedicated class.
+ Don't use getters and setters.

Applying every rule everywhere, all the time, tends to produce over-engineered code; the value is in practicing them deliberately to notice where a design leans on primitives, deep nesting, or exposed state more than it should.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/calisthenics.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/calisthenics.html","name":"Object Calisthenics","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:51:06 +0000","dateModified":"Thu, 06 Aug 2026 05:51:06 +0000","description":"Object Calisthenics is a set of nine coding constraints, introduced by ``Jeff Bay``, meant to be practiced as an exercise to force better object-oriented design habits, rather than followed strictly in production code at all times","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Object Calisthenics.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://williamdurand.fr/2013/06/03/object-calisthenics/)**
## See Also

+ [Object Calisthenics in PHP](https://ocramius.github.io/blog/object-calisthenics-in-php/)

## Related

+ [Clean Code](clean-code.ini.html)
+ [SOLID](solid.ini.html)
+ [Primitive Obsession](primitive-obsession.ini.html)
+ [Class Getter Method](getter.ini.html)
+ [Class Setter Method](setter.ini.html)
+ [Value Object](value-object.ini.html)
+ [Cognitive Complexity](cognitive-complexity.ini.html)
+ [Cyclomatic Complexity](cyclomatic-complexity.ini.html)
