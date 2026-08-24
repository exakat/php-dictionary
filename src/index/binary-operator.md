# Binary Operator
A binary operator is an operator that operates on a two operands. It performs an operation based on the value of both operand. PHP supports several binary operators, including the following:

+ Assignation operator ``=``
+ Equality operator ``==``
+ Difference operator ``!-`` and ``<>``
+ Identity operator ``===``
+ Non-identity operator ``!==``
+ Math operators, such as addition ``+``, substraction ``-``, multiplication ``*``, division ``/``, power ``**``, modulo ``%``
+ Comparison operators, such as greater than ``>``, greater or equal than ``>=``, lesser than ``<``, lesser or equal than ``<=``
+ Concatenation, with the dot operator ``.``
+ Spaceship operator, ``<=>``
+ All the short operators, that combines a binary operation with an assignation: for example, add and assign ``+=``

And many others.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-operator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-operator.html","name":"Binary Operator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 17:05:49 +0000","dateModified":"Mon, 10 Aug 2026 17:05:49 +0000","description":"A binary operator is an operator that operates on a two operands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-operator.html"]}],"keywords":["feature","operator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ternary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Binary_operation"},{"@type":"CreativeWork","name":"Mastering binary and bitwise in PHP","url":"https:\/\/thephp.website\/en\/issue\/bitwise-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"binary-operator"}]}]}</script>
```php
<?php

    $a = 1;
    $a +=2;
    var_dump($a === 3); // true

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Binary_operation)**
## See Also

+ [Mastering binary and bitwise in PHP](https://thephp.website/en/issue/bitwise-php/)

## Related

+ [Unary Operator](unary.html)
+ [Ternary Operator](ternary.html)
+ [Binary](binary.html)
