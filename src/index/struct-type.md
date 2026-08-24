# Struct Type
A ``struct`` is a value type that groups named fields together, as in C, Go, Rust, or Swift. Unlike a class instance in most object-oriented languages, a ``struct`` value is typically copied by value on assignment or when passed to a function, is allocated inline rather than behind a pointer, and carries no built-in identity or inheritance: two ``struct`` are simply equal when their fields are equal.

``struct`` are commonly used for small, self-contained data, such as a two dimension point or an RGB color, where the overhead of heap allocation and reference semantics would be wasted.

PHP has no ``struct`` type. Every ``class`` instance is a heap-allocated object with reference semantics: assigning an object to a new variable, or passing it to a function, copies the reference, not the object's contents, so mutations through one variable are visible through the other. A PHP ``class`` can imitate the field-grouping role of a ``struct``, but not its value semantics; achieving copy-on-assign behavior requires implementing ``__clone()`` and calling it manually, or declaring the class ``readonly``.

The closest notion of a ``struct`` type is ``stdClass`` which is an empty class, with dynamic properties without type, which may be populated at will, or an ``array``: both notions are actually accessible to the other with casting. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/struct-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/struct-type.html","name":"Struct Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:27:00 +0000","dateModified":"Fri, 14 Aug 2026 08:27:00 +0000","description":"A struct is a value type that groups named fields together, as in C, Go, Rust, or Swift","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/struct-type.html"]}],"keywords":["concept","type","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/record-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/value-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readonly.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rgb.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Struct_(C_programming_language)"},{"@type":"CreativeWork","name":"Record in Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Record_(computer_science)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"struct-type"}]}]}</script>
```php
<?php

    class Point {
        public function __construct(public float $x, public float $y) {}
    }
    
    $a = new Point(1.0, 2.0);
    $b = $a;      // copies the reference, not the object
    $b->x = 99.0; // also changes $a->x: PHP objects have reference semantics

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Struct_(C_programming_language))**
## See Also

+ [Record in Wikipedia](https://en.wikipedia.org/wiki/Record_(computer_science))

## Related

+ [Class](class.html)
+ [Record Type](record-type.html)
+ [Value Type](value-type.html)
+ [\_\_clone() Method](__clone.html)
+ [Readonly](readonly.html)
+ [RGB](rgb.html)
