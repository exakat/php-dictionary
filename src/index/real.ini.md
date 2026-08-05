# Real Numbers
Real numbers are represented using the ``float`` data type. 

They are also commonly referred to as ``floating-point numbers`` or ``double-precision numbers``. Floats are used to represent decimal numbers, including both whole numbers and fractions, with a certain degree of precision. Real numbers are used for performing mathematical calculations that require decimal accuracy.

There used to be ``real`` dedicated structures, like ``is_real()`` or ``(real)``, though, they were removed in version 7.0. In case of doubt, refer to ``float``. 

It's important to be aware of potential rounding errors or precision issues when working with real numbers. It is true in any programming language that uses floating-point representation. If exact decimal precision, it is recommended to use specialized libraries or techniques to handle arbitrary precision arithmetic, such as ``bcmath`` or ``gmp``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/real.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/real.ini.html","name":"Real Numbers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:07:37 +0000","dateModified":"Sat, 11 Jul 2026 09:07:37 +0000","description":"Real numbers are represented using the ``float`` data type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Real Numbers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = 1.234; 

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.float.php)**
## See Also

+ [How To Work with Numbers in PHP](https://www.digitalocean.com/community/tutorials/how-to-work-with-numbers-in-php)

## Related

+ [Floating Point Numbers](float.ini.html)
+ [Bcmath](bcmath.ini.html)
+ [GNU Multiple Precision (GMP)](gmp.ini.html)
+ [Rounding](rounding.ini.html)
