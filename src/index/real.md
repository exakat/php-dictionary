# Real Numbers
Real numbers are represented using the ``float`` data type. 

They are also commonly referred to as ``floating-point numbers`` or ``double-precision numbers``. Floats are used to represent decimal numbers, including both whole numbers and fractions, with a certain degree of precision. Real numbers are used for performing mathematical calculations that require decimal accuracy.

There used to be ``real`` dedicated structures, like ``is_real()`` or ``(real)``, though, they were removed in version 7.0. In case of doubt, refer to ``float``. 

It's important to be aware of potential rounding errors or precision issues when working with real numbers. It is true in any programming language that uses floating-point representation. If exact decimal precision, it is recommended to use specialized libraries or techniques to handle arbitrary precision arithmetic, such as ``bcmath`` or ``gmp``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/real.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/real.html","name":"Real Numbers","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:07:37 +0000","dateModified":"Sat, 11 Jul 2026 09:07:37 +0000","description":"Real numbers are represented using the float data type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Real Numbers.html"]}],"keywords":["concept","type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bcmath.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gmp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rounding.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.float.php"},{"@type":"CreativeWork","name":"How To Work with Numbers in PHP","url":"https:\/\/www.digitalocean.com\/community\/tutorials\/how-to-work-with-numbers-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"real"}]}]}</script>
```php
<?php

    $a = 1.234; 

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.float.php)**
## See Also

+ [How To Work with Numbers in PHP](https://www.digitalocean.com/community/tutorials/how-to-work-with-numbers-in-php)

## Related

+ [Floating Point Numbers](float.html)
+ [Bcmath](bcmath.html)
+ [GNU Multiple Precision (GMP)](gmp.html)
+ [Rounding](rounding.html)
