# Increment
Increment refers to the process of increasing or adding a small amount to a value, or simply one unit.

Increments usually refers to the pre-plusplus and post-plusplus. Increment applies to numbers, both decimal and integers. It also applies to strings, though the feature has been moved to functions. Increment works on booleans: it always produces 1 first, then, since it was turned into an integer, it goes on with numbers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/increment.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/increment.html","name":"Increment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:43:41 +0000","dateModified":"Thu, 09 Jul 2026 07:43:41 +0000","description":"Increment refers to the process of increasing or adding a small amount to a value, or simply one unit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Increment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Increment"}]}]}</script>
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

+ [Pre-increment](pre-increment.html)
+ [Post-increment](post-increment.html)
+ [String Increment](string-increment.html)
