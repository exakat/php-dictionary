# Identity Comparison
The identity comparison ``===`` compares two values, using their respective types, and then, their value. Both must be identical to pass.

There is also the ``!==`` operator, for distinct values: either the type, or the value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/identity-comparison.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/identity-comparison.ini.html","name":"Identity Comparison","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:15 +0000","dateModified":"Fri, 19 Jun 2026 21:24:15 +0000","description":"The identity comparison ``===`` compares two values, using their respective types, and then, their value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Identity Comparison.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

var_dump(1 === 1);    // true

var_dump(1 === true); // false
var_dump(1 == true);  // true

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## Related

+ [Comparison](comparison.ini.html)
+ [Hash Comparisons](hash-comparison.ini.html)
+ [Identity](identity.ini.html)
