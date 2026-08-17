# integer
An integer, or ``int`` is a number of the set ℤ = ``{..., -2, -1, 0, 1, 2, ...}``. It is limited by ``PHP_INT_MIN``, the lower bound, and ``PHP_INT_MAX``, the upper bound. 

Integers have several syntaxes: they may be written in binary, octal, decimal, hexadecimal and with ``_`` as a separator.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html","name":"integer","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"An integer, or int is a number of the set \u2124 = {","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html"]}],"alternateName":["int"],"keywords":["scalar","integer","datastructure"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/addition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiplication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-separator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/octal-integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scalar-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sign.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_max.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_min.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/positive-integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/precision.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abs.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/number.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-base.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rounding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leading-zero-means-octal.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/math.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.integer.php"},{"@type":"CreativeWork","name":"PHP Integers","url":"https:\/\/www.tutorialkart.com\/php\/php-integer\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"integer"}]}]}</script>
```php
<?php

    $a = 1234;       // decimal number
    $a = 0123;       // octal number (equivalent to 83 decimal)
    $a = 0o123;      // octal number (as of PHP 8.1.0)
    $a = 0x1A;       // hexadecimal number (equivalent to 26 decimal)
    $a = 0b11111111; // binary number (equivalent to 255 decimal)
    $a = 1_234_567;  // decimal number (as of PHP 7.4.0)

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.integer.php)**
## See Also

+ [PHP Integers](https://www.tutorialkart.com/php/php-integer/)

## Related

+ [Addition](addition.html)
+ [Binary Integer](binary-integer.html)
+ [Multiplication](multiplication.html)
+ [Numeric Separator](numeric-separator.html)
+ [Octal Integer](octal-integer.html)
+ [Scalar Types](scalar-type.html)
+ [Sign](sign.html)
+ [PHP\_INT\_MAX](php_int_max.html)
+ [PHP\_INT\_MIN](php_int_min.html)
+ [Positive Integer](positive-integer.html)
+ [precision](precision.html)
+ [abs()](abs.html)
+ [Number](number.html)
+ [Numeric Base](numeric-base.html)
+ [Rounding](rounding.html)
+ [Leading Zero Means Octal](leading-zero-means-octal.html)
+ [Math](math.html)
