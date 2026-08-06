# Identical Operator
Identical is the state of two variables, which contains the same data, with the same type. It is the same as equality, without the type-juggling.

Identical operators are ``===``, ``!==``. The ``match()`` command also uses identical comparisons.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/identical.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/identical.html","name":"Identical Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Identical is the state of two variables, which contains the same data, with the same type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Identical Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Comparison](comparison-operator.ini.html)
+ [Equal Operator](equal.ini.html)
+ [Match](match.ini.html)
+ [Relaxed Comparison](relaxed-comparison.ini.html)
+ [array\_search](array_search.ini.html)
+ [strpos](strpos.ini.html)
