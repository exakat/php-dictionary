# Pseudo-type
A pseudo-type is a keyword and a type that describes an input or output, but is not an actual type. 

For example, ``iterable`` represents both ``array`` and ``Traversable`` objects, yet a variable cannot be both, not be instantiated as such.

Union type, DNF or intersectional types are not pseudo-types, as they are made of multiple keywords.

There are several pseudo-type: ``mixed``, ``callable``, ``object``, ``iterable``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pseudo-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pseudo-type.ini.html","name":"Pseudo-type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:29:03 +0000","dateModified":"Fri, 19 Jun 2026 21:29:03 +0000","description":"A pseudo-type is a keyword and a type that describes an input or output, but is not an actual type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Pseudo-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo(iterable $a) { }

foo([]); // OK
foo(new ArrayIterator([1])); // OK
foo(1); // KO

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php)**
## Related

+ [Mixed](mixed.ini.html)
+ [Iterable](iterable.ini.html)
+ [Callables](callable.ini.html)
+ [Object](object.ini.html)
+ [Type System](type.ini.html)
