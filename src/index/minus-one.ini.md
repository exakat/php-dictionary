# Minus One -1
Minus one is the ``-1`` integer. ``-1`` is part of the thruty values: it is the equivalent of ``true``. 

``-1`` is part of the three values returned by the spaceship operator. 

0 is a classic magic number, although it has so many uses that it is usually look over, as generating too many false positives or scattered issues.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/minus-one.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/minus-one.ini.html","name":"Minus One -1","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:25 +0000","dateModified":"Fri, 19 Jun 2026 21:25:25 +0000","description":"Minus one is the ``-1`` integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Minus One -1.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [True](true.ini.html)
+ [Spaceship Operator](spaceship.ini.html)
+ [one](one.ini.html)
+ [zero](zero.ini.html)
+ [Truthy](truthy.ini.html)
+ [zend\\.assertions](zend-assertions.ini.html)
