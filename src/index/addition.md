# Addition
PHP additions apply to two different types: numbers and arrays.

For numbers, ``int`` and ``float``, this is the classic mathematical addition. 

For arrays, this is a special version of array merge: the arrays are merged, and keys are kept once they are written. This features only exists for addition and arrays. Substraction is not available.

With boolean, addition first cast the boolean to an integer, 0 or 1, and then, operates as a math addition.

With string, addition first try to convert the string to a numeric value. If it succeed, it operates as a math addition. Otherwise, it emits a type error.

With objects or resources, a type error is emitted.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/addition.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/addition.html","name":"Addition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"PHP additions apply to two different types: numbers and arrays","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Addition.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 1 + 2.3; // 3.3

$a2 = 1 + -2.3; // -1.3

$b = [1] + [3, 4]; // [1, 4]

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.arithmetic.php)**
## See Also

+ [Array operators](https://www.php.net/manual/en/language.operators.array.php)
+ [Combining arrays using + versus array_merge in PHP](https://www.texelate.co.uk/blog/combining-arrays-using-plus-versus-array-merge-in-php)

## Related

+ [Array, []](array.ini.html)
+ [integer](integer.ini.html)
+ [Floating Point Numbers](float.ini.html)
+ [TypeError](typeerror.ini.html)
+ [Division](division.ini.html)
+ [Operand](operand.ini.html)
+ [Plus +](plus.ini.html)
+ [Single](single.ini.html)
