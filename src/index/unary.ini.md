# Unary Operator
A unary operator is an operator that operates on a single operand. It performs an operation on the value of the operand. PHP supports several unary operators, including the following:

+ Post increment operator ``$a++``
+ Pre increment operator ``++$a``
+ Post decrement operator ``$a--``
+ Pre decrement operator ``--$a``
+ Positive operator ``+$a``, which produces the same value
+ Negative operator ``-$a``, which produces the opposite of the value
+ Logical Not operator ``!$a``
+ Bitwise Not operator ``~$a``
+ Noscream operator ``@$a``

The four first operators change the underlying value and also return the value. The three last operators only return the changed value, leaving the original value unchanged.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unary.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unary.ini.html","name":"Unary Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 10:04:54 +0000","dateModified":"Wed, 01 Jul 2026 10:04:54 +0000","description":"A unary operator is an operator that operates on a single operand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Unary Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 10;
print -$a;  // -10, $a unchanged
print $a;   // 10
print ++$a; // 10, $a changed
print $a;   // 11

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.increment.php)**
## Related

+ [Ternary Operator](ternary.ini.html)
+ [Binary Operator](binary-operator.ini.html)
+ [Operand](operand.ini.html)
