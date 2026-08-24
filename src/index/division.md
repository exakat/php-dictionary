# Division
Division is the mathematical division. It applies to numbers: integers and float. 

It also works with booleans and null, which are converted to integers. Other types are not allowed for division and yield a fatal error. 

Division may be resulting in an integer or a float, whatever the type of the initial operands. PHP produces integers whenever possible.

Division by zero, or by any value that is cast to 0, leads to a ``DivisionByZeroError``.

The operator for division is the slash ``/``. The backslash ``\`` is used for namespaces. 

There is a function for the integer division: ``intdiv()``; and ``%`` for the modulo operator, aka the remaining.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/division.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/division.html","name":"Division","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Division is the mathematical division","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/division.html"]}],"alternateName":["\/"],"keywords":["math","character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/addition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exponent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiplication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/modulo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/divisionbyzeroerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intdiv.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.arithmetic.php"},{"@type":"CreativeWork","name":"Array operators","url":"https:\/\/www.php.net\/manual\/en\/language.operators.array.php"},{"@type":"CreativeWork","name":"Combining arrays using + versus array_merge in PHP","url":"https:\/\/www.texelate.co.uk\/blog\/combining-arrays-using-plus-versus-array-merge-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"division"}]}]}</script>
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

+ [Addition](addition.html)
+ [Exponent](exponent.html)
+ [Multiplication](multiplication.html)
+ [Modulo](modulo.html)
+ [DivisionByZeroError](divisionbyzeroerror.html)
+ [intdiv()](intdiv.html)
