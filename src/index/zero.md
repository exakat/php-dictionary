# zero
Zero is the ``0`` integer. Zero is part of the falsy values: it is the equivalent of ``false``. 

It is often used to return successful execution, where non-zero answers are unsuccessful execution, represented by their error message.

Adding 0 to a string turns it into an integer, just like the cast operator ``(int)`` does.

Comparisons between 0 and other falsy values, such as empty string ``''`` changed with PHP 8.0: it was true and became false.

Division by zero emits the ``DivisionByZeroError``, as that operation is impossible. Multiplication is possible and always returns 0.

0 is one of the two valid index when building a callback with an array, along with 1.

0 is a classic magic number, although it has so many uses that it is usually look over, as generating too many false positives or scattered issues.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero.html","name":"zero","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Zero is the 0 integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero.html"]}],"keywords":["falsy","integer","magic number"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/false.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/divisionbyzeroerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/empty-string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-callback.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/minus-one.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/truthy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arithmeticerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logarithm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zend-assertions.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/0"},{"@type":"CreativeWork","name":"What is the origin of Zero?","url":"https:\/\/www.scientificamerican.com\/article\/what-is-the-origin-of-zer\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"zero"}]}]}</script>
```php
<?php

    $zero = 0;
    
    $four = 4 + 0;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/0)**
## See Also

+ [What is the origin of Zero?](https://www.scientificamerican.com/article/what-is-the-origin-of-zer/)

## Related

+ [False](false.html)
+ [Comparison](comparison.html)
+ [DivisionByZeroError](divisionbyzeroerror.html)
+ [Empty String](empty-string.html)
+ [one](one.html)
+ [Callable Arrays](array-callable.html)
+ [Array Callback](array-callback.html)
+ [Minus One -1](minus-one.html)
+ [Truthy](truthy.html)
+ [ArithmeticError Error](arithmeticerror.html)
+ [Logarithm](logarithm.html)
+ [zend\\.assertions](zend-assertions.html)
