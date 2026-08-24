# Bcmath
For arbitrary precision mathematics, PHP offers ``BCMath``, which supports numbers of any size and precision up to ``2147483647``, or ``0x7FFFFFFF`` decimal digits, if there is sufficient memory, represented as strings.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bcmath.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bcmath.html","name":"Bcmath","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 08:05:19 +0000","dateModified":"Wed, 12 Aug 2026 08:05:19 +0000","description":"For arbitrary precision mathematics, PHP offers BCMath, which supports numbers of any size and precision up to 2147483647, or 0x7FFFFFFF decimal digits, if there is sufficient memory, represented as strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bcmath.html"]}],"keywords":["extension"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gmp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/math.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/real.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.bc.php"},{"@type":"CreativeWork","name":"A Comprehensive Guide to the PHP BCMath Library for Arbitrary Precision Arithmetic","url":"https:\/\/reintech.io\/blog\/comprehensive-guide-php-bcmath-library"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"bcmath"}]}]}</script>
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

+ [GNU Multiple Precision (GMP)](gmp.html)
+ [Math](math.html)
+ [Real Numbers](real.html)

## Related packages

+ [krowinski/bcmath-extended](https://packagist.org/packages/krowinski/bcmath-extended)
