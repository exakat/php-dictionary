# Identical Operator
Identical is the state of two variables, which contains the same data, with the same type. It is the same as equality, without the type-juggling.

Identical operators are ``===``, ``!==``. The ``match()`` command also uses identical comparisons.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identical.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identical.html","name":"Identical Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Identical is the state of two variables, which contains the same data, with the same type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Identical Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Identical Operator"}]}]}</script>
```php
<?php

var_dump(0 == "0000"); // true
var_dump(0 === "0");   // false
var_dump(0 === 0);     // true

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## See Also

+ [How do the PHP equality (== double equals) and identity (=== triple equals) comparison operators differ?](https://www.geeksforgeeks.org/how-do-the-php-equality-double-equals-and-identity-triple-equals-comparison-operators-differ/)

## Related

+ [Comparison](comparison-operator.html)
+ [Equal Operator](equal.html)
+ [Match](match.html)
+ [Relaxed Comparison](relaxed-comparison.html)
+ [array\_search](array_search.html)
+ [strpos](strpos.html)
