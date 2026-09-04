# Math
PHP offers many math features. There are the native math functions, such as ``exp()``, ``cos()`` or ``abs()``; there are operators, such as ``+``, ``*``, ``**``, etc. There are special notions, such as ``NaN``, Not a number, and the constant ``INF``, which represents the infinite.

There are also extension, such as ``bcmath`` and ``gmp``, to handle arbitrary large numbers. 

Finally, there are many packages that provide optimized code to run math specialties, like matrices, complex numbers or statistical tools.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/math.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/math.html","name":"Math","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:15:55 +0000","dateModified":"Thu, 13 Aug 2026 08:15:55 +0000","description":"PHP offers many math features","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/math.html"]}],"keywords":["math"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bcmath.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gmp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nan.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rounding.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.math.php"},{"@type":"CreativeWork","name":"Mathematical Operations in PHP","url":"https:\/\/www.slingacademy.com\/article\/mathematical-operations-in-php\/"},{"@type":"CreativeWork","name":"PHP Math: Built-in Functions and Operations","url":"https:\/\/codelucky.com\/php-math-functions\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"math"}]}]}</script>
```php
<?php

    $total = 1 + 2 * 3 - 4 ** 5; 

?>
```

**[Documentation](https://www.php.net/manual/en/book.math.php)**
## See Also

+ [Mathematical Operations in PHP](https://www.slingacademy.com/article/mathematical-operations-in-php/)
+ [PHP Math: Built-in Functions and Operations](https://codelucky.com/php-math-functions/)

## Related

+ [Bcmath](bcmath.html)
+ [GNU Multiple Precision (GMP)](gmp.html)
+ [Floating Point Numbers](float.html)
+ [integer](integer.html)
+ [Not A Number (NAN)](nan.html)
+ [INF](inf.html)
+ [Rounding](rounding.html)

## Related packages

+ [brick/math](https://packagist.org/packages/brick/math)
+ [markbaker/complex](https://packagist.org/packages/markbaker/complex)
+ [markbaker/matrix](https://packagist.org/packages/markbaker/matrix)
+ [markrogoyski/math-php](https://packagist.org/packages/markrogoyski/math-php)
