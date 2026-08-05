# Short Ternary Operator
The expression ``(expr1) ?: (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to ``empty()``, and ``expr3`` if ``expr1`` evaluates to ``false``.

It is a short version of the ternary operator, and it is often used to set default values in a concise way.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/short-ternary.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/short-ternary.ini.html","name":"Short Ternary Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The expression ``(expr1) ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Short Ternary Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $action = $_POST['action'] ?: 'default';

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary)**
## See Also

+ [Shorthand Comparisons in PHP](https://stitcher.io/blog/shorthand-comparisons-in-php)

## Related

+ [Ternary Operator](ternary.ini.html)
+ [Coalesce Operator](coalesce.ini.html)
+ [Empty](empty.ini.html)
+ [False](false.ini.html)
