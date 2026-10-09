# Base Conversion
Base conversion turns an integer written in one numeric base into the same value written in another base. PHP has ``base_convert()`` for arbitrary bases, from 2 to 36, and dedicated functions for the common cases: ``bindec()`` and ``decbin()`` for binary, ``octdec()`` and ``decoct()`` for octal, ``hexdec()`` and ``dechex()`` for hexadecimal.

``base_convert()`` takes the number as a string, the source base and the target base, and returns a string. Digits above 9 use the letters ``a`` to ``z``, case-insensitive. Bases outside 2 to 36 throw a ``ValueError``. Characters that are not valid digits in the source base are ignored, with a deprecation notice since PHP 7.4.

The conversion works on integers. A value larger than ``PHP_INT_MAX`` is converted as a float, which can lose precision.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base-conversion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base-conversion.html","name":"Base Conversion","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 09 Oct 2026 16:29:01 +0000","dateModified":"Fri, 09 Oct 2026 16:29:01 +0000","description":"Base conversion turns an integer written in one numeric base into the same value written in another base","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base-conversion.html"]}],"keywords":["native function","math"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-base.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decbin.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hexadecimal-integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/octal-integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.base-convert.php"},{"@type":"CreativeWork","name":"PHP: base_convert() - Manual","url":"https:\/\/www.php.net\/manual\/en\/function.base-convert.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"base-conversion"}]}]}</script>
```php
<?php

    echo base_convert('ff', 16, 2);   // 11111111
    echo base_convert('777', 8, 10);  // 511
    echo base_convert('1234', 10, 36); // ya

    echo bindec('1100');   // 12
    echo dechex(255);      // ff
    echo hexdec('ff');     // 255

?>
```

**[Documentation](https://www.php.net/manual/en/function.base-convert.php)**
## See Also

+ [PHP: base_convert() - Manual](https://www.php.net/manual/en/function.base-convert.php)

## Related

+ [Numeric Base](numeric-base.html)
+ [decbin()](decbin.html)
+ [Hexadecimal Integer](hexadecimal-integer.html)
+ [Octal Integer](octal-integer.html)
+ [Binary Integer](binary-integer.html)
+ [integer](integer.html)
