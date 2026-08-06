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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/binary-operator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/binary-operator.html","name":"Binary Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:09 +0000","dateModified":"Fri, 19 Jun 2026 21:25:09 +0000","description":"A binary operator is an operator that operates on a two operands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Binary Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 1;
$a +=2;
var_dump($a === 3); // true

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Binary_operation)**
## Related

+ [Unary Operator](unary.ini.html)
+ [Ternary Operator](ternary.ini.html)
+ [Binary](binary.ini.html)
