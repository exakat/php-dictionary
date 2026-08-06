# Division
Division is the mathematical division. It applies to numbers: integers and float. 

It also works with booleans and null, which are converted to integers. Other types are not allowed for division and yield a fatal error. 

Division may be resulting in an integer or a float, whatever the type of the initial operands. PHP produces integers whenever possible.

Division by zero, or by any value that is cast to 0, leads to a ``DivisionByZeroError``.

The operator for division is the slash ``/``. The backslash ``\`` is used for namespaces. 

There is a function for the integer division: ``intdiv()``; and ``%`` for the modulo operator, aka the remaining.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/division.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/division.html","name":"Division","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Division is the mathematical division","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Division.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 10 / 2.5; // 4.0

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.arithmetic.php)**
## See Also

+ [Array operators](https://www.php.net/manual/en/language.operators.array.php)
+ [Combining arrays using + versus array_merge in PHP](https://www.texelate.co.uk/blog/combining-arrays-using-plus-versus-array-merge-in-php)

## Related

+ [Addition](addition.ini.html)
+ [Exponent](exponent.ini.html)
+ [Multiplication](multiplication.ini.html)
+ [Modulo](modulo.ini.html)
+ [DivisionByZeroError](divisionbyzeroerror.ini.html)
+ [intdiv()](intdiv.ini.html)
