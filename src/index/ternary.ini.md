# Ternary Operator
The expression ``(expr1) ? (expr2) : (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to true, and ``expr3`` if ``expr1`` evaluates to false.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ternary.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ternary.ini.html","name":"Ternary Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 06:01:45 +0000","dateModified":"Wed, 24 Jun 2026 06:01:45 +0000","description":"The expression ``(expr1) ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Ternary Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $action = (empty($_POST['action'])) ? 'default' : $_POST['action'];

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary)**
## See Also

+ [Ternary Operator in PHP | How to use the PHP Ternary Operator](https://www.codementor.io/@sayantinideb/ternary-operator-in-php-how-to-use-the-php-ternary-operator-x0ubd3po6)

## Related

+ [Short Ternary Operator](short-ternary.ini.html)
+ [Short Ternary Operator](short-ternary-operator.ini.html)
+ [Coalesce Operator](coalesce.ini.html)
+ [If Then Else](if-then.ini.html)
+ [Binary Operator](binary-operator.ini.html)
+ [Colon](colon.ini.html)
+ [Operand](operand.ini.html)
+ [Unary Operator](unary.ini.html)
+ [Nesting](nesting.ini.html)
