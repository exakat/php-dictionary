# Floating Point Numbers
Floating point numbers, also known as ``floats``, ``doubles``, or ``real numbers``, can be specified using a decimal dot and a mantis.

They may also use a number separator ``_``: it may be placed anywhere between two digits, to help make the number more readable.

Floats used to be called ``real``, though this was abandoned progressively, since PHP 7.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html","name":"Floating Point Numbers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Floating point numbers, also known as ``floats``, ``doubles``, or ``real numbers``, can be specified using a decimal dot and a mantis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Floating Point Numbers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Floating Point Numbers"}]}]}</script>
```php
<?php

    $a = 1.234; 
    $b = 1.2e3; 
    $c = 7E-10;
    $d = 1_234.567; // as of PHP 7.4.0

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.float.php)**
## See Also

+ [Floating Dangers in PHP](https://medium.com/@dotcom.software/floating-dangers-in-php-c4a2220bd8dc)
+ [Floating Point Math](https://0.30000000000000004.com/)
+ [Comparing float value in PHP](https://www.geeksforgeeks.org/comparing-float-value-in-php/)

## Related

+ [Real Numbers](real.html)
+ [Addition](addition.html)
+ [Multiplication](multiplication.html)
+ [Not A Number (NAN)](nan.html)
+ [PHP\_INT\_MAX](php_int_max.html)
+ [PHP\_INT\_MIN](php_int_min.html)
+ [Scalar Types](scalar-type.html)
+ [Sign](sign.html)
+ [abs()](abs.html)
+ [PHP Natives](native-type.html)
+ [Numeric Separator](numeric-separator.html)
+ [precision](precision.html)
+ [Double](double.html)
+ [Logarithm](logarithm.html)
+ [Non-numeric](non-numeric.html)
+ [Number](number.html)
+ [Readable](readable.html)
+ [E](e.html)
+ [Math](math.html)
+ [serialize\_precision](serialize_precision.html)
