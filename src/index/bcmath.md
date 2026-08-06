# Bcmath
For arbitrary precision mathematics PHP offers BCMath which supports numbers of any size and precision up to ``2147483647``, or ``0x7FFFFFFF`` decimal digits, if there is sufficient memory, represented as strings.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bcmath.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bcmath.html","name":"Bcmath","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"For arbitrary precision mathematics PHP offers BCMath which supports numbers of any size and precision up to ``2147483647``, or ``0x7FFFFFFF`` decimal digits, if there is sufficient memory, represented as strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Bcmath.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

echo bcpow(3, 40);  // 12157665459056928801
echo 2 ** 40;       // 1.2157665459057E+19 (a float)

?>
```

**[Documentation](https://www.php.net/manual/en/book.bc.php)**
## See Also

+ [A Comprehensive Guide to the PHP BCMath Library for Arbitrary Precision Arithmetic](https://reintech.io/blog/comprehensive-guide-php-bcmath-library)

## Related

+ [GNU Multiple Precision (GMP)](gmp.ini.html)
+ [Math](math.ini.html)
+ [Real Numbers](real.ini.html)

## Related packages

+ [krowinski/bcmath-extended](https://packagist.org/packages/krowinski/bcmath-extended)
