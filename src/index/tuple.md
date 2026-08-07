# Tuple
A tuple is a fixed-size, ordered collection of values, where each position may hold a different type, and the type of the whole tuple is the sequence of its element types, such as Rust's ``(i32, String, bool)`` or Python's ``(1, 'a', True)``. Unlike an array or a list, a tuple's length and per-position types are fixed at compile time, and are checked by the type system.

Tuples are typically used for lightweight, unnamed grouping of a small number of related values, such as returning two values from a function without declaring a struct or class for the purpose.

PHP has no native, typed tuple. A plain indexed array can hold mixed values at fixed positions, and list assignment ``[$a, $b] = $pair;`` can destructure it, but the array's size and per-position types are not tracked or enforced anywhere; ``array{int, string, bool}`` shapes exist only as PHPDoc annotations understood by static analyzers, not by the engine.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tuple.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tuple.html","name":"Tuple","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:15:20 +0000","dateModified":"Fri, 10 Jul 2026 09:15:20 +0000","description":"A tuple is a fixed-size, ordered collection of values, where each position may hold a different type, and the type of the whole tuple is the sequence of its element types, such as Rust's ``(i32, String, bool)`` or Python's ``(1, 'a', True)``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Tuple.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Tuple"}]}]}</script>
```php
<?php

// Untyped and unchecked: any size, any types, at any position.
$pair = [1, 'a'];
[$number, $letter] = $pair;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Tuple)**
## Related

+ [List](list.html)
+ [Array, []](array.html)
+ [Record Type](record-type.html)
+ [Struct Type](struct-type.html)
+ [Multiple Return Values](multiple-return-value.html)
