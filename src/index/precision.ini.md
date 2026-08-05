# precision
Precision refers to the number of digits are used to represent and display floating-point numbers. The exact meaning depends a bit on the context, but it's most commonly about float accuracy and formatting.

Precision is important when using a decimal number as an array index: the conversion is implicit, and, nowadays, it yields a warning.

Precision is also lost when an integer is converted to a decimal number, which may not be accurately represented. This happens with large integers, when they are converted to float, because of their size.

``precision`` and ``serialize_precision`` are two PHP directives, that controls the display or conversion of numbers. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/precision.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/precision.ini.html","name":"precision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:28:29 +0000","dateModified":"Fri, 19 Jun 2026 21:28:29 +0000","description":"Precision refers to the number of digits are used to represent and display floating-point numbers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/precision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<<?php

    echo 1 / 7;
    
    print PHP_EOL;
    
    ini_set('precision', 2);
    
    echo 1 / 7;

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.float.php)**
## Related

+ [integer](integer.ini.html)
+ [Floating Point Numbers](float.ini.html)
+ [PHP\_INT\_MAX](php_int_max.ini.html)
+ [PHP\_INT\_MIN](php_int_min.ini.html)
+ [serialize\_precision](serialize_precision.ini.html)
