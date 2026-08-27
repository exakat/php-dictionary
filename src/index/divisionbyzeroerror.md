# DivisionByZeroError
The ``DivisionByZeroError`` exception is thrown when an attempt is made to divide a number by zero. It is never possible to divide by zero, the result is undefined. It is true for all zeroes: ``0``, ``+0``, ``-0``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/divisionbyzeroerror.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/divisionbyzeroerror.html","name":"DivisionByZeroError","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 18:23:31 +0000","dateModified":"Tue, 25 Aug 2026 18:23:31 +0000","description":"The DivisionByZeroError exception is thrown when an attempt is made to divide a number by zero","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/divisionbyzeroerror.html"]}],"keywords":["exception","maths","native exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arithmeticerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/division.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.divisionbyzeroerror.php"},{"@type":"CreativeWork","name":"PHP: intdiv()","url":"https:\/\/www.php.net\/manual\/en\/function.intdiv.php"},{"@type":"CreativeWork","name":"Arithmetic operators","url":"https:\/\/www.php.net\/manual\/en\/language.operators.arithmetic.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"divisionbyzeroerror"}]}]}</script>
```php
<?php

    try {
        echo 1 / $a;
    } catch(DivisionByZeroError $e){
        echo 'Trying to divide by 0';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.divisionbyzeroerror.php)**
## See Also

+ [PHP: intdiv()](https://www.php.net/manual/en/function.intdiv.php)
+ [Arithmetic operators](https://www.php.net/manual/en/language.operators.arithmetic.php)

## Related

+ [Error](error.html)
+ [ArithmeticError Error](arithmeticerror.html)
+ [Division](division.html)
+ [zero](zero.html)
