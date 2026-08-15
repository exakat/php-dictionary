# PHP\_INT\_MIN
``PHP_INT_MIN`` is the smallest integer that can be processed by PHP. 

Nowadays, ``PHP_INT_MIN`` is often -9223372036854775808. This value depends on the underlying machine: in particular, 64 bits, machine and OS, have larger absolute values of ``PHP_INT_MIN``, while 32 bits have smaller. The hardware and the software have to be compatible to provide a larger absolute value of ``PHP_INT_MIN``.

Beyond ``PHP_INT_MIN``, integers are often converted to floats, and loose precision. 

There is also ``PHP_INT_MAX``, which is the positive version of ``PHP_INT_MIN``, minus one.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_min.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_min.html","name":"PHP_INT_MIN","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:27:49 +0000","dateModified":"Fri, 19 Jun 2026 21:27:49 +0000","description":"PHP_INT_MIN is the smallest integer that can be processed by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP_INT_MIN.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php_int_min"}]}]}</script>
```php
<?php

$max = PHP_INT_MIN;

var_dump(is_int($max)); // true

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.constants.php)**
## See Also

+ [PHP Integers Guide: Types, Limits, and Conversions](https://flatcoding.com/tutorials/php/php-int/)

## Related

+ [integer](integer.html)
+ [Floating Point Numbers](float.html)
+ [PHP\_INT\_MAX](php_int_max.html)
+ [precision](precision.html)
