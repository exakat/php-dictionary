# Ternary Operator
The expression ``(expr1) ? (expr2) : (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to true, and ``expr3`` if ``expr1`` evaluates to false.

The ternary operator is PHP's only operator that takes three operands. It has existed since the earliest versions of PHP.

Nesting ternary expressions used to be left-associative by default, which often led to confusing and buggy code. PHP 7.4 deprecated nesting ternary expressions without explicit parentheses, and PHP 8.0 turned this into a compile-time error: each nested ternary must now be wrapped in parentheses to clarify the intended evaluation order.

The ternary operator is closely related to the short ternary operator ``?:``, which omits ``expr2`` and returns ``expr1`` itself when it is truthy, and to the null coalescing operator ``??``, which tests for ``null`` instead of truthiness.

The ternary operator doesn't work with references: it only returns values, and the ``&`` operator leads to compilation errors.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ternary.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ternary.html","name":"Ternary Operator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 06:21:35 +0000","dateModified":"Tue, 01 Sep 2026 06:21:35 +0000","description":"The expression (expr1) ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ternary.html"]}],"alternateName":["ternary-operator"],"keywords":["feature","operator","_spacecolonOK"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short-ternary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coalesce.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/if-then.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/colon.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/operand.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nesting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compiler.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.comparison.php#language.operators.comparison.ternary"},{"@type":"CreativeWork","name":"Ternary Operator in PHP | How to use the PHP Ternary Operator","url":"https:\/\/www.codementor.io\/@sayantinideb\/ternary-operator-in-php-how-to-use-the-php-ternary-operator-x0ubd3po6"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ternary"}]}]}</script>
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
+ [Coalesce Operator](coalesce.html)
+ [If Then Else](if-then.html)
+ [Binary Operator](binary-operator.html)
+ [Colon](colon.html)
+ [Operand](operand.html)
+ [Unary Operator](unary.html)
+ [Nesting](nesting.html)
+ [References](reference.html)
+ [Compiler](compiler.html)
