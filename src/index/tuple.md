# Tuple
A tuple is a fixed-size, ordered collection of values, where each position may hold a different type, and the type of the whole tuple is the sequence of its element types, such as Rust's ``(i32, String, bool)`` or Python's ``(1, 'a', True)``. Unlike an array or a list, a tuple's length and per-position types are fixed at compile time, and are checked by the type system.

Tuples are typically used for lightweight, unnamed grouping of a small number of related values, such as returning two values from a function without declaring a structure or class for the purpose.

PHP has no native, typed tuple. A plain indexed array can hold mixed values at fixed positions, and list assignment ``[$a, $b] = $pair;`` can destructure it, but the array's size and per-position types are not tracked or enforced anywhere; ``array{int, string, bool}`` shapes exist only as PHPDoc annotations understood by static analyzers, not by the engine.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tuple.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tuple.html","name":"Tuple","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 02 Sep 2026 16:41:00 +0000","dateModified":"Wed, 02 Sep 2026 16:41:00 +0000","description":"A tuple is a fixed-size, ordered collection of values, where each position may hold a different type, and the type of the whole tuple is the sequence of its element types, such as Rust's (i32, String, bool) or Python's (1, 'a', True)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tuple.html"]}],"keywords":["concept","type","not supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/list.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/record-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/struct-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiple-return-value.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Tuple"},{"@type":"CreativeWork","name":"Python: Tuples and Sequences","url":"https:\/\/docs.python.org\/3\/tutorial\/datastructures.html#tuples-and-sequences"},{"@type":"CreativeWork","name":"Rust: The Tuple Type","url":"https:\/\/doc.rust-lang.org\/std\/primitive.tuple.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"tuple"}]}]}</script>
```php
<?php

    // Untyped and unchecked: any size, any types, at any position.
    $pair = [1, 'a'];
    [$number, $letter] = $pair;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Tuple)**
## See Also

+ [Python: Tuples and Sequences](https://docs.python.org/3/tutorial/datastructures.html#tuples-and-sequences)
+ [Rust: The Tuple Type](https://doc.rust-lang.org/std/primitive.tuple.html)

## Related

+ [List](list.html)
+ [Array, []](array.html)
+ [Record Type](record-type.html)
+ [Struct Type](struct-type.html)
+ [Multiple Return Values](multiple-return-value.html)
