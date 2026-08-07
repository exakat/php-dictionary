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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unary.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unary.html","name":"Unary Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 10:04:54 +0000","dateModified":"Wed, 01 Jul 2026 10:04:54 +0000","description":"A unary operator is an operator that operates on a single operand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Unary Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Unary Operator"}]}]}</script>
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

+ [Ternary Operator](ternary.html)
+ [Binary Operator](binary-operator.html)
+ [Operand](operand.html)
