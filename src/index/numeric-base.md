# Numeric Base
The numeric base is the number of digits to be used when counting. The most common bases are: binary 0 and 1, octal 0 to 7, decimal 0 to 9, duodecimal 0 to 11, hexadecimal 0 to F, aka 15.

All other bases, starting from 2, are possible.

In computer science, base 2, 10 and 16 are quite common, and require conversion from one another.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-base.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-base.html","name":"Numeric Base","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:22:53 +0000","dateModified":"Fri, 24 Jul 2026 15:22:53 +0000","description":"The numeric base is the number of digits to be used when counting","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Numeric Base.html"]}],"keywords":["math"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leading-zero-means-octal.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Radix"},{"@type":"CreativeWork","name":"How to interact with Number Systems and Encoding Schemes in PHP","url":"https:\/\/oliverlundquist.com\/2025\/04\/06\/encoding-schemes-in-php.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"numeric-base"}]}]}</script>
```php
<?php

    $number = '1234';
    echo base_convert($number, 10, 8);  // 2322
    echo base_convert($number, 10, 12); // 86a
    echo base_convert($number, 10, 16); // 4d2

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Radix)**
## See Also

+ [How to interact with Number Systems and Encoding Schemes in PHP](https://oliverlundquist.com/2025/04/06/encoding-schemes-in-php.html)

## Related

+ [integer](integer.html)
+ [Base](base.html)
+ [Leading Zero Means Octal](leading-zero-means-octal.html)
