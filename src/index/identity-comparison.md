# Identity Comparison
The identity comparison ``===`` compares two values, using their respective types, and then, their value. Both must be identical to pass.

There is also the ``!==`` operator, for distinct values: either the type, or the value.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity-comparison.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity-comparison.html","name":"Identity Comparison","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:06 +0000","dateModified":"Sun, 16 Aug 2026 07:46:06 +0000","description":"The identity comparison === compares two values, using their respective types, and then, their value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity-comparison.html"]}],"keywords":["comparison"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.comparison.php"},{"@type":"CreativeWork","name":"Identity (object-oriented programming) (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Identity_(object-oriented_programming)"},{"@type":"CreativeWork","name":"spl_object_id","url":"https:\/\/www.php.net\/manual\/en\/function.spl-object-id.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"identity-comparison"}]}]}</script>
```php
<?php

var_dump(1 === 1);    // true

var_dump(1 === true); // false
var_dump(1 == true);  // true

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## See Also

+ [Identity (object-oriented programming) (Wikipedia)](https://en.wikipedia.org/wiki/Identity_(object-oriented_programming))
+ [spl_object_id](https://www.php.net/manual/en/function.spl-object-id.php)

## Related

+ [Comparison](comparison.html)
+ [Hash Comparisons](hash-comparison.html)
+ [Identity](identity.html)
