# Explicit Boolean Comparison
The Explicit Boolean Comparison is the syntax convention that includes a literal value when using a boolean as a condition. 

Explicit boolean comparison may be redundant, when the compared value is already a boolean. PHP also does an implicit cast to boolean before using variables in conditions. 

On the other hand, type juggling may yield unexpected results, and lead to bugs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/explicit-boolean-comparison.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/explicit-boolean-comparison.html","name":"Explicit Boolean Comparison","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 11:58:56 +0000","dateModified":"Sun, 09 Aug 2026 11:58:56 +0000","description":"The Explicit Boolean Comparison is the syntax convention that includes a literal value when using a boolean as a condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Explicit Boolean Comparison.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"explicit-boolean-comparison"}]}]}</script>
```php
<?php

if ($var === true) {} 

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)
+ [Type Juggling](https://www.php.net/manual/en/language.types.type-juggling.php)

## Related

+ [Yoda Condition](yoda.html)
