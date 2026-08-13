# Addition
PHP additions apply to two different types: numbers and arrays.

For numbers, ``int`` and ``float``, this is the classic mathematical addition. 

For arrays, this is a special version of array merge: the arrays are merged, and keys are kept once they are written. This features only exists for addition and arrays. Substraction is not available.

With boolean, addition first cast the boolean to an integer, 0 or 1, and then, operates as a math addition.

With string, addition first try to convert the string to a numeric value. If it succeed, it operates as a math addition. Otherwise, it emits a type error.

With objects or resources, a type error is emitted.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/addition.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/addition.html","name":"Addition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP additions apply to two different types: numbers and arrays","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Addition.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"addition"}]}]}</script>
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

+ [Array, []](array.html)
+ [integer](integer.html)
+ [Floating Point Numbers](float.html)
+ [TypeError](typeerror.html)
+ [Division](division.html)
+ [Operand](operand.html)
+ [Plus +](plus.html)
+ [Single](single.html)
