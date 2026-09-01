# Record Type
A record type, also called a data class, is a construct dedicated to grouping named fields into an immutable value, with equality, hashing, and a string representation generated automatically from the field list, rather than written by hand. Examples include Java's ``record``, Kotlin's ``data class``, C#'s ``record``, and Python's ``dataclass``.

Because the compiler generates the boilerplate, a record type is meant to be declared in a single line per field, and two records are considered equal when all their fields are equal, regardless of identity, unlike ordinary objects which compare by reference by default.

PHP has no dedicated record type. A ``readonly`` class with constructor property promotion approaches the same intent: fields declared once, in the constructor signature, and never reassigned afterward. It still falls short on two points: PHP generates no value-based ``==`` semantics beyond its default shallow object comparison, and it generates no ``__toString()`` or hash from the field list, both of which must be written by hand.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/record-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/record-type.html","name":"Record Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 07:58:42 +0000","dateModified":"Fri, 14 Aug 2026 07:58:42 +0000","description":"A record type, also called a data class, is a construct dedicated to grouping named fields into an immutable value, with equality, hashing, and a string representation generated automatically from the field list, rather than written by hand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/record-type.html"]}],"alternateName":["data-class"],"keywords":["concept","type","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readonly.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/struct-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tuple.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/immutable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Record_(computer_science)"},{"@type":"CreativeWork","name":"PHP Readonly Properties","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.properties.php#language.oop5.properties.readonly-properties"},{"@type":"CreativeWork","name":"Constructor Promotion","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.decon.php#language.oop5.decon.constructor.promotion"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"record-type"}]}]}</script>
```php
<?php

    // Closest approximation: readonly + promoted properties.
    final class Point {
        public function __construct(
            public readonly float $x,
            public readonly float $y,
        ) {}
    }
    
    $a = new Point(1.0, 2.0);
    $b = new Point(1.0, 2.0);
    var_dump($a == $b);  // true, but by luck of default object comparison
    var_dump($a === $b); // false: identity, not value, equality

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Record_(computer_science))**
## See Also

+ [PHP Readonly Properties](https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties)
+ [Constructor Promotion](https://www.php.net/manual/en/language.oop5.decon.php#language.oop5.decon.constructor.promotion)

## Related

+ [Readonly](readonly.html)
+ [Struct Type](struct-type.html)
+ [Tuple](tuple.html)
+ [Immutable](immutable.html)
+ [Class](class.html)
