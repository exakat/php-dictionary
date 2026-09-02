# Floating Point Numbers
Floating point numbers, also known as ``floats``, ``doubles``, or ``real numbers``, can be specified using a decimal dot and a mantissa.

They may also use a number separator ``_``: it may be placed anywhere between two digits, to help make the number more readable.

Floats used to be called ``real``, though this was abandoned progressively, since PHP 7.0.

Floats are stored in binary, and most decimal fractions, such as ``0.1``, have no exact binary representation. This makes direct equality comparison a classic bug: ``0.1 + 0.2 === 0.3`` is ``false``, since the actual stored value is ``0.30000000000000004``. To compare floats safely, check that the absolute difference is below a small tolerance, also known as an epsilon, rather than using ``==`` or ``===``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html","name":"Floating Point Numbers","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 02 Sep 2026 15:08:46 +0000","dateModified":"Wed, 02 Sep 2026 15:08:46 +0000","description":"Floating point numbers, also known as floats, doubles, or real numbers, can be specified using a decimal dot and a mantissa","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"]}],"alternateName":["decimal"],"keywords":["type","classic bug"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/real.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/addition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiplication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nan.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_max.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_min.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scalar-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sign.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abs.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-separator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/precision.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logarithm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-numeric.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/number.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/e.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/math.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialize_precision.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hexadecimal-integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rounding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/signed-integer.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.float.php"},{"@type":"CreativeWork","name":"Floating Dangers in PHP","url":"https:\/\/medium.com\/@dotcom.software\/floating-dangers-in-php-c4a2220bd8dc"},{"@type":"CreativeWork","name":"Floating Point Math","url":"https:\/\/0.30000000000000004.com\/"},{"@type":"CreativeWork","name":"Comparing float value in PHP","url":"https:\/\/www.geeksforgeeks.org\/comparing-float-value-in-php\/"},{"@type":"CreativeWork","name":"Death by a Thousand Rounds: PHP meets Money","url":"https:\/\/phpconference.nl\/session\/death-by-a-thousand-rounds-php-meets-money\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"float"}]}]}</script>
```php
<?php

    $a = 1.234; 
    $b = 1.2e3; 
    $c = 7E-10;
    $d = 1_234.567; // as of PHP 7.4.0

    var_dump(0.1 + 0.2 === 0.3); // false, classic bug
    var_dump(abs((0.1 + 0.2) - 0.3) < PHP_FLOAT_EPSILON); // true, safe comparison

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.float.php)**
## See Also

+ [Floating Dangers in PHP](https://medium.com/@dotcom.software/floating-dangers-in-php-c4a2220bd8dc)
+ [Floating Point Math](https://0.30000000000000004.com/)
+ [Comparing float value in PHP](https://www.geeksforgeeks.org/comparing-float-value-in-php/)
+ [Death by a Thousand Rounds: PHP meets Money](https://phpconference.nl/session/death-by-a-thousand-rounds-php-meets-money/)

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
+ [Hexadecimal Integer](hexadecimal-integer.html)
+ [is\_float()](is_float.html)
+ [Rounding](rounding.html)
+ [Signed Integer](signed-integer.html)
