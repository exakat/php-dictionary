# Floating Point Numbers
Floating point numbers, also known as ``floats``, ``doubles``, or ``real numbers``, can be specified using a decimal dot and a mantis.

They may also use a number separator ``_``: it may be placed anywhere between two digits, to help make the number more readable.

Floats used to be called ``real``, though this was abandoned progressively, since PHP 7.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/float.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/float.html","name":"Floating Point Numbers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Floating point numbers, also known as ``floats``, ``doubles``, or ``real numbers``, can be specified using a decimal dot and a mantis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Floating Point Numbers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Real Numbers](real.ini.html)
+ [Addition](addition.ini.html)
+ [Multiplication](multiplication.ini.html)
+ [Not A Number (NAN)](nan.ini.html)
+ [PHP\_INT\_MAX](php_int_max.ini.html)
+ [PHP\_INT\_MIN](php_int_min.ini.html)
+ [Scalar Types](scalar-type.ini.html)
+ [Sign](sign.ini.html)
+ [abs()](abs.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [Numeric Separator](numeric-separator.ini.html)
+ [precision](precision.ini.html)
+ [Double](double.ini.html)
+ [Logarithm](logarithm.ini.html)
+ [Non-numeric](non-numeric.ini.html)
+ [Number](number.ini.html)
+ [Readable](readable.ini.html)
+ [E](e.ini.html)
+ [Math](math.ini.html)
+ [serialize\_precision](serialize_precision.ini.html)
