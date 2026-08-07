# Short Ternary Operator
The expression ``(expr1) ?: (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to ``empty()``, and ``expr3`` if ``expr1`` evaluates to ``false``.

It is a short version of the ternary operator, and it is often used to set default values in a concise way.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short-ternary.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short-ternary.html","name":"Short Ternary Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The expression ``(expr1) ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Short Ternary Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Short Ternary Operator"}]}]}</script>
```php
<?php

    $action = $_POST['action'] ?: 'default';

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary)**
## See Also

+ [Shorthand Comparisons in PHP](https://stitcher.io/blog/shorthand-comparisons-in-php)

## Related

+ [Ternary Operator](ternary.html)
+ [Coalesce Operator](coalesce.html)
+ [Empty](empty.html)
+ [False](false.html)
