# Increment
Increment refers to the process of increasing or adding a small amount to a value, or simply one unit.

Increments usually refers to the pre-plusplus and post-plusplus. Increment applies to numbers, both decimal and integers. It also applies to strings, though the feature has been moved to functions. Increment works on booleans: it always produces 1 first, then, since it was turned into an integer, it goes on with numbers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/increment.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/increment.html","name":"Increment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:43:41 +0000","dateModified":"Thu, 09 Jul 2026 07:43:41 +0000","description":"Increment refers to the process of increasing or adding a small amount to a value, or simply one unit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Increment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = 1;
    
    echo ++$a; // pre plus plus : displays 1, and $a ends with 2
    
    echo $a++; // post plus plus 
    
    echo $a += 1; // increment 

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Increment_and_decrement_operators)**
## Related

+ [Pre-increment](pre-increment.ini.html)
+ [Post-increment](post-increment.ini.html)
+ [String Increment](string-increment.ini.html)
