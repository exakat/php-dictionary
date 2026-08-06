# yield from Keyword
The ``yield from`` keyword is used to delegate the iteration control of one generator to another. It was introduced in version 7.0 as part of the generator delegation feature. 

This keyword allows to create more maintainable and modular code by reusing the code logic of one generator within another.

Generator delegation works with another generators, ``Traversable`` objects, and arrays.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/yield-from.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/yield-from.html","name":"yield from Keyword","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Jun 2026 13:54:25 +0000","dateModified":"Thu, 18 Jun 2026 13:54:25 +0000","description":"The ``yield from`` keyword is used to delegate the iteration control of one generator to another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/yield from Keyword.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Yield](yield.ini.html)
+ [Generator](generator.ini.html)
+ [Traversable](traversable.ini.html)
+ [Array, []](array.ini.html)
+ [Jump](jump.ini.html)
+ [range()](range.ini.html)
+ [Stealth Generator](stealth-generator.ini.html)
