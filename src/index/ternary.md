# Ternary Operator
The expression ``(expr1) ? (expr2) : (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to true, and ``expr3`` if ``expr1`` evaluates to false.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ternary.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ternary.html","name":"Ternary Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The expression (expr1) ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Ternary Operator.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ternary"}]}]}</script>
```php
<?php

    $action = (empty($_POST['action'])) ? 'default' : $_POST['action'];

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary)**
## See Also

+ [Ternary Operator in PHP | How to use the PHP Ternary Operator](https://www.codementor.io/@sayantinideb/ternary-operator-in-php-how-to-use-the-php-ternary-operator-x0ubd3po6)

## Related

+ [Short Ternary Operator](short-ternary.html)
+ [Short Ternary Operator](short-ternary-operator.html)
+ [Coalesce Operator](coalesce.html)
+ [If Then Else](if-then.html)
+ [Binary Operator](binary-operator.html)
+ [Colon](colon.html)
+ [Operand](operand.html)
+ [Unary Operator](unary.html)
+ [Nesting](nesting.html)
