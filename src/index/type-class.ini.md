# Type Class
A type class, as found in Haskell and similar languages, is a named set of functions that a type must implement in order to belong to that class. Unlike an object-oriented interface, a type class is not implemented by the type itself: instances are declared separately, so a type class can be attached to a type after the fact, including to types the author does not own, such as built-in numbers or third-party types.

Type classes provide ad-hoc polymorphism: the same function name, such as ``==`` or ``show``, resolves to a different implementation depending on the type of its argument, chosen by the compiler at compile time rather than looked up in a vtable at runtime.

PHP has no type class mechanism. Ad-hoc polymorphism over an existing type can only be approximated with interfaces implemented by the type's own class, free functions with manual type checks, or match expressions branching on ``gettype()``. There is no way to retroactively attach a shared contract to a type PHP's engine already knows about, such as ``int`` or a class from a third-party library, without wrapping it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type-class.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type-class.ini.html","name":"Type Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:28:11 +0000","dateModified":"Wed, 08 Jul 2026 15:28:11 +0000","description":"A type class, as found in Haskell and similar languages, is a named set of functions that a type must implement in order to belong to that class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Type Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Type_class)**
## Related

+ [Interface](interface.ini.html)
+ [Polymorphism](polymorphism.ini.html)
+ [Generics](generics.ini.html)
+ [Overloading](overloading.ini.html)
+ [Type System](type-system.ini.html)
