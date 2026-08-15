# yield from Keyword
The ``yield from`` keyword is used to delegate the iteration control of one generator to another. It was introduced in version 7.0 as part of the generator delegation feature. 

This keyword allows to create more maintainable and modular code by reusing the code logic of one generator within another.

Generator delegation works with another generators, ``Traversable`` objects, and arrays.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield-from.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield-from.html","name":"yield from Keyword","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The yield from keyword is used to delegate the iteration control of one generator to another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield from Keyword.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"yield-from"}]}]}</script>
```php
<?php

    function inner() {
        yield 1; // key 0
        yield 2; // key 1
        yield 3; // key 2
    }
    function gen() {
        yield 0; // key 0
        yield from inner(); // keys 0-2
        yield 4; // key 1
    }
    // pass false as second parameter to get an array [0, 1, 2, 3, 4]
    var_dump(iterator_to_array(gen()));

?>
```

**[Documentation](https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield.from)**
## See Also

+ [How to Use Yield and Generators in PHP](https://code.tutsplus.com/tutorials/how-to-use-yield-and-generators-in-php--cms-39200)

## Related

+ [Yield](yield.html)
+ [Generator](generator.html)
+ [Traversable](traversable.html)
+ [Array, []](array.html)
+ [Jump](jump.html)
+ [range()](range.html)
+ [Stealth Generator](stealth-generator.html)
