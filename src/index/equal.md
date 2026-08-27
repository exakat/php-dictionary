# Equal Operator
Equal is the state of two variables, which contains the same data, after an optional cast to a common type. It is the same as identical, with possible silent type-juggling.

The equal operators are ``==``, ``!=``, ``<>``, and ``<=>``. The ``switch()`` command also uses equal comparisons.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/equal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/equal.html","name":"Equal Operator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Equal is the state of two variables, which contains the same data, after an optional cast to a common type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/equal.html"]}],"alternateName":["double-equal","equality"],"keywords":["feature","operator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identical.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inequality.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.comparison.php"},{"@type":"CreativeWork","name":"How do the PHP equality (== double equals) and identity (=== triple equals) comparison operators differ?","url":"https:\/\/www.geeksforgeeks.org\/how-do-the-php-equality-double-equals-and-identity-triple-equals-comparison-operators-differ\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"equal"}]}]}</script>
```php
<?php

    var_dump(0 == '0000'); // true
    var_dump(0 == '0');    // false
    var_dump(0 == 0);      // true

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## See Also

+ [How do the PHP equality (== double equals) and identity (=== triple equals) comparison operators differ?](https://www.geeksforgeeks.org/how-do-the-php-equality-double-equals-and-identity-triple-equals-comparison-operators-differ/)

## Related

+ [Comparison](comparison-operator.html)
+ [Identical Operator](identical.html)
+ [Inequality](inequality.html)
