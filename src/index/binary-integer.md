# Binary Integer
Integers can be specified in binary, or base 2, notation. Binary integer syntax starts with the prefix ``0b`` and only contains 0 and 1.

Binary integers may be specified as positive or negative. Their size may become very long, and yet, eventually, produce a integer. They may have leading ``0``, after the prefix ``0b``.

Binary format exists only at compilation time: at execution time, the integer is in decimal form and has no hint that it was input as an binary number.

Binary numbers are integers until ``PHP_INT_MAX``. Beyond that, they are cast into a decimal number, ``float``, and eventually, are returned as ``INF``.

It is possible to use ``decbin()`` and ``sprintf()``, related functions to produce a string representation in the binary format.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-integer.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-integer.html","name":"Binary Integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Integers can be specified in binary, or base 2, notation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Binary Integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Binary Integer"}]}]}</script>
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

+ [sprintf](sprintf.html)
+ [integer](integer.html)
+ [Binary](binary.html)
+ [Hexadecimal Integer](hexadecimal-integer.html)
+ [Octal Integer](octal-integer.html)
