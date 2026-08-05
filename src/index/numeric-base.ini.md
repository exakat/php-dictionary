# Numeric Base
The numeric base is the number of digits to be used when counting. The most common bases are: binary 0 and 1, octal 0 to 7, decimal 0 to 9, duodecimal 0 to 11, hexadecimal 0 to F, aka 15.

All other bases, starting from 2, are possible.

In computer science, base 2, 10 and 16 are quite common, and require conversion from one another.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/numeric-base.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/numeric-base.ini.html","name":"Numeric Base","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:22:53 +0000","dateModified":"Fri, 24 Jul 2026 15:22:53 +0000","description":"The numeric base is the number of digits to be used when counting","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Numeric Base.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [integer](integer.ini.html)
+ [Base](base.ini.html)
+ [Leading Zero Means Octal](leading-zero-means-octal.ini.html)
