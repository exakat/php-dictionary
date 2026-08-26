# Multiplication
Multiplication is the mathematical multiplication. It applies to numbers: integers and float. 

It also works with booleans and null, which are first converted to integers. Other types are not allowed for multiplication and yield a fatal error.

The operator for multiplication is the star ``*``. A double star ``**`` is the power operator. The opposite operation is the division ``\``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiplication.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiplication.html","name":"Multiplication","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Multiplication is the mathematical multiplication","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiplication.html"]}],"alternateName":["*"],"keywords":["math","character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/power.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/division.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exponent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/modulo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/single.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/star.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.arithmetic.php"},{"@type":"CreativeWork","name":"Array operators","url":"https:\/\/www.php.net\/manual\/en\/language.operators.array.php"},{"@type":"CreativeWork","name":"Combining arrays using + versus array_merge in PHP","url":"https:\/\/www.texelate.co.uk\/blog\/combining-arrays-using-plus-versus-array-merge-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"multiplication"}]}]}</script>
```php
<?php

    $a = 10 * 2.3; // 23.0
    $b = 0.5 * 2;  // 1

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
+ [Exponent](power.html)
+ [Division](division.html)
+ [Exponent](exponent.html)
+ [Modulo](modulo.html)
+ [one](one.html)
+ [Single](single.html)
+ [Star \*](star.html)
