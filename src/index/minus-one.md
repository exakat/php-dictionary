# Minus One -1
Minus one is the ``-1`` integer. ``-1`` is part of the truthy values: it is the equivalent of ``true``.

``-1`` is part of the three values returned by the spaceship operator. 

0 is a classic magic number, although it has so many uses that it is usually overlooked, as generating too many false positives or scattered issues.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/minus-one.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/minus-one.html","name":"Minus One -1","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:15:55 +0000","dateModified":"Thu, 13 Aug 2026 08:15:55 +0000","description":"Minus one is the -1 integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Minus One -1.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"minus-one"}]}]}</script>
```php
<?php

    $zero = 0;

    $four = 4 + 0;
    
    // may it returns 1 or -1, this is true
    var_dump((bool) 1 <=> -1); // true
    var_dump((bool) -1 <=> 1); // true

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.spaceship)**
## See Also

+ [PHP Spaceship Operator - Comparing Values](https://zetcode.com/php/spaceship-operator/)
+ [PHP 7 | Spaceship Operator](https://www.geeksforgeeks.org/php/php-7-spaceship-operator/)

## Related

+ [True](true.html)
+ [Spaceship Operator](spaceship.html)
+ [one](one.html)
+ [zero](zero.html)
+ [Truthy](truthy.html)
+ [zend\\.assertions](zend-assertions.html)
