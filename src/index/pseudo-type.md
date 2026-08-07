# Pseudo-type
A pseudo-type is a keyword and a type that describes an input or output, but is not an actual type. 

For example, ``iterable`` represents both ``array`` and ``Traversable`` objects, yet a variable cannot be both, not be instantiated as such.

Union type, DNF or intersectional types are not pseudo-types, as they are made of multiple keywords.

There are several pseudo-type: ``mixed``, ``callable``, ``object``, ``iterable``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudo-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudo-type.html","name":"Pseudo-type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:29:03 +0000","dateModified":"Fri, 19 Jun 2026 21:29:03 +0000","description":"A pseudo-type is a keyword and a type that describes an input or output, but is not an actual type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Pseudo-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Pseudo-type"}]}]}</script>
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

+ [Mixed](mixed.html)
+ [Iterable](iterable.html)
+ [Callables](callable.html)
+ [Object](object.html)
+ [Type System](type.html)
