# Explicit Boolean Comparison
The Explicit Boolean Comparison is the syntax convention that includes a literal value when using a boolean as a condition. 

Explicit boolean comparison may be redundant, when the compared value is already a boolean. PHP also does an implicit cast to boolean before using variables in conditions. 

On the other hand, type juggling may yield unexpected results, and lead to bugs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/explicit-boolean-comparison.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/explicit-boolean-comparison.ini.html","name":"Explicit Boolean Comparison","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:09 +0000","dateModified":"Fri, 19 Jun 2026 21:25:09 +0000","description":"The Explicit Boolean Comparison is the syntax convention that includes a literal value when using a boolean as a condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Explicit Boolean Comparison.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

if ($var === true) {} 

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## Related

+ [Yoda Condition](yoda.ini.html)
