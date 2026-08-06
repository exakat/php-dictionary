# PHP\_INT\_MAX
``PHP_INT_MAX`` is the largest integer that can be processed by PHP. 

Nowadays, ``PHP_INT_MAX`` is often 9223372036854775807. This value depends on the underlying machine: in particular, 64bits, machine and OS, have larger values of ``PHP_INT_MAX``, while 32bits have smaller. The hardware and the software have to be compatible to provide a larger value of ``PHP_INT_MAX``.

Beyond ``PHP_INT_MAX``, integers are often converted to floats, and loose precision. 

There is also ``PHP_INT_MIN``, which is the negative version of ``PHP_INT_MAX``, minus one.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php_int_max.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php_int_max.html","name":"PHP_INT_MAX","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:27:46 +0000","dateModified":"Fri, 19 Jun 2026 21:27:46 +0000","description":"``PHP_INT_MAX`` is the largest integer that can be processed by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PHP_INT_MAX.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$max = PHP_INT_MAX;

var_dump(is_int($max)); // true

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.constants.php)**
## See Also

+ [PHP Integers Guide: Types, Limits, and Conversions](https://flatcoding.com/tutorials/php/php-int/)

## Related

+ [integer](integer.ini.html)
+ [Floating Point Numbers](float.ini.html)
+ [PHP\_INT\_MIN](php_int_min.ini.html)
+ [precision](precision.ini.html)
