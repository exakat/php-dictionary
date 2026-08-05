# Binary Integer
Integers can be specified in binary, or base 2, notation. Binary integer syntax starts with the prefix ``0b`` and only contains 0 and 1.

Binary integers may be specified as positive or negative. Their size may become very long, and yet, eventually, produce a integer. They may have leading ``0``, after the prefix ``0b``.

Binary format exists only at compilation time: at execution time, the integer is in decimal form and has no hint that it was input as an binary number.

Binary numbers are integers until ``PHP_INT_MAX``. Beyond that, they are cast into a decimal number, ``float``, and eventually, are returned as ``INF``.

It is possible to use ``decbin()`` and ``sprintf()``, related functions to produce a string representation in the binary format.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/binary-integer.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/binary-integer.ini.html","name":"Binary Integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 17:31:30 +0000","dateModified":"Mon, 03 Aug 2026 17:31:30 +0000","description":"Integers can be specified in binary, or base 2, notation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Binary Integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // 12
    $binary = 0b1100;
    
    // On a 32bit machine (double the size for 64bits one)
    $binary = 0b1111111111111111111111111111111;

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.integer.php)**
## Related

+ [sprintf](sprintf.ini.html)
+ [integer](integer.ini.html)
+ [Binary](binary.ini.html)
+ [Hexadecimal Integer](hexadecimal-integer.ini.html)
+ [Octal Integer](octal-integer.ini.html)
