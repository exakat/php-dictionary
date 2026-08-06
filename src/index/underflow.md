# Underflow
Underflow happens when a value goes below a limit: out of its range of existence, the behavior of the value is now unknown.

Underflow happens with integers, which are limited from ``PHP_INT_MIN`` to ``PHP_INT_MIN``, floats, which are limited from ``PHP_FLOAT_MIN`` to ``PHP_FLOAT_MAX``. 

Other situations, such as accessing an array element or a string character beyond its first element, defaults to returning ``null``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/underflow.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/underflow.html","name":"Underflow","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 10:03:54 +0000","dateModified":"Wed, 01 Jul 2026 10:03:54 +0000","description":"Underflow happens when a value goes below a limit: out of its range of existence, the behavior of the value is now unknown","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Underflow.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = PHP_INT_MAX;
    $b = (int) ($a +  1);
    
    echo $a.PHP_EOL;
    echo $b;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Arithmetic_underflow)**
## See Also

+ [PHP-FPM Underflow RCE](https://www.rapid7.com/db/modules/exploit/multi/http/php_fpm_rce/)
+ [Integer Underflow](https://secdim.com/lab/integer-underflow/php/)

## Related

+ [Null](null.ini.html)
+ [Overflow](overflow.ini.html)
+ [RangeException](rangeexception.ini.html)
