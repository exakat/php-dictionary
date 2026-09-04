# decbin()
``decbin()`` is a PHP native function that converts a decimal integer to its binary string representation.

``decbin()`` takes a single integer argument and returns a string of ``0`` and ``1`` characters, without any ``0b`` prefix. Negative numbers are converted using the 32-bit or 64-bit two's complement representation, depending on the platform, which produces a long string of ones.

The reverse operation is ``bindec()``, which converts a binary string back to a decimal number. Related functions convert to and from other bases: ``dechex()`` and ``hexdec()`` for hexadecimal, ``decoct()`` and ``octdec()`` for octal. ``base_convert()`` handles arbitrary bases.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decbin.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decbin.html","name":"decbin()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 03 Sep 2026 09:05:30 +0000","dateModified":"Thu, 03 Sep 2026 09:05:30 +0000","description":"decbin() is a PHP native function that converts a decimal integer to its binary string representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decbin.html"]}],"keywords":["native function","math"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-base.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.decbin.php"},{"@type":"CreativeWork","name":"PHP decbin() Function - W3Schools","url":"https:\/\/www.w3schools.com\/php\/func_math_decbin.asp"},{"@type":"CreativeWork","name":"PHP decbin() Function - GeeksforGeeks","url":"https:\/\/www.geeksforgeeks.org\/php\/php-decbin-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"decbin"}]}]}</script>
```php
<?php

    echo decbin(12);  // 1100
    echo decbin(26);  // 11010
    echo decbin(-1);  // 1111111111111111111111111111111111111111111111111111111111111111 (on 64-bit)

?>
```

**[Documentation](https://www.php.net/manual/en/function.decbin.php)**
## See Also

+ [PHP decbin() Function - W3Schools](https://www.w3schools.com/php/func_math_decbin.asp)
+ [PHP decbin() Function - GeeksforGeeks](https://www.geeksforgeeks.org/php/php-decbin-function/)

## Related

+ [Numeric Base](numeric-base.html)
+ [integer](integer.html)
