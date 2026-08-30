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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/calisthenics.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/calisthenics.html","name":"Object Calisthenics","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 07:48:06 +0000","dateModified":"Tue, 11 Aug 2026 07:48:06 +0000","description":"Object Calisthenics is a set of nine coding constraints, introduced by Jeff Bay, meant to be practiced as an exercise to force better object-oriented design habits, rather than followed strictly in production code at all times","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/calisthenics.html"]}],"alternateName":["object-calisthenics"],"keywords":["concept","best practice"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clean-code.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/solid.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/primitive-obsession.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/getter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/setter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/value-object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cognitive-complexity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cyclomatic-complexity.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/williamdurand.fr\/2013\/06\/03\/object-calisthenics\/"},{"@type":"CreativeWork","name":"Object calisthenics (in PHP)","url":"https:\/\/rubenrubiob.substack.com\/p\/object-calisthenics-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"calisthenics"}]}]}</script>
**[Documentation](https://williamdurand.fr/2013/06/03/object-calisthenics/)**
## See Also

+ [Object calisthenics (in PHP)](https://rubenrubiob.substack.com/p/object-calisthenics-in-php)

## Related

+ [Clean Code](clean-code.html)
+ [SOLID](solid.html)
+ [Primitive Obsession](primitive-obsession.html)
+ [Class Getter Method](getter.html)
+ [Class Setter Method](setter.html)
+ [Value Object](value-object.html)
+ [Cognitive Complexity](cognitive-complexity.html)
+ [Cyclomatic Complexity](cyclomatic-complexity.html)
