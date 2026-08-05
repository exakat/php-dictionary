# Signed Integer
PHP integers are always signed: they use one bit to represent the sign, allowing both negative and positive values. PHP does not support unsigned integers.

On a 64-bit platform, a PHP integer spans from ``PHP_INT_MIN``, aka -9,223,372,036,854,775,808, or -2^63 to ``PHP_INT_MAX``, aka 9,223,372,036,854,775,807, or 2^63 - 1. On a 32-bit platform, the range is -2^31 to 2^31 - 1.

When an operation would produce a value outside that range, PHP silently promotes the result to a ``float``, which has a larger range but reduced precision for large integers.

Languages such as C or Rust distinguish signed integers ``int``, ``i64`` from unsigned integers ``uint``, ``u64``. PHP makes no such distinction: all integers are signed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/signed-integer.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/signed-integer.ini.html","name":"Signed Integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:04:21 +0000","dateModified":"Sun, 02 Aug 2026 06:04:21 +0000","description":"PHP integers are always signed: they use one bit to represent the sign, allowing both negative and positive values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Signed Integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $max = PHP_INT_MAX; // 9223372036854775807
    $min = PHP_INT_MIN; // -9223372036854775808
    
    // Overflow promotes to float silently
    $overflow = PHP_INT_MAX + 1; // float(9.2233720368548E+18)
    
    var_dump($overflow); // float, not integer

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.integer.php)**
## Related

+ [integer](integer.ini.html)
+ [Sign](sign.ini.html)
+ [Positive Integer](positive-integer.ini.html)
+ [PHP\_INT\_MAX](php_int_max.ini.html)
+ [PHP\_INT\_MIN](php_int_min.ini.html)
+ [Floating Point Numbers](float.ini.html)
+ [Overflow](overflow.ini.html)
