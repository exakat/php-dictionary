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

The first four operators change the underlying value and also return the value. The last three operators only return the changed value, leaving the original value unchanged.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unary.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unary.html","name":"Unary Operator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:49:21 +0000","dateModified":"Wed, 19 Aug 2026 06:49:21 +0000","description":"A unary operator is an operator that operates on a single operand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unary.html"]}],"alternateName":["unary-operator"],"keywords":["feature","operator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ternary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/operand.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.increment.php"},{"@type":"CreativeWork","name":"Operator Precedence","url":"https:\/\/www.php.net\/manual\/en\/language.operators.precedence.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"unary"}]}]}</script>
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
## See Also

+ [Operator Precedence](https://www.php.net/manual/en/language.operators.precedence.php)

## Related

+ [Ternary Operator](ternary.html)
+ [Binary Operator](binary-operator.html)
+ [Operand](operand.html)
