# Self-reference
A self-reference is a reference into one-self. 

An array may hold a reference onto itself. Some functions are disrupted by these references, and yield ``recursion detected``: ``compact()``, ``count()``, ``var_export()``, etc... 

``$GLOBALS`` is a self-reference array: it contains a reference onto itself, as it is also a global variable.

Variables cannot be self-reference, although they might reference another variable, stored in themselves.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/self-reference.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/self-reference.ini.html","name":"Self-reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:31:13 +0000","dateModified":"Fri, 19 Jun 2026 21:31:13 +0000","description":"A self-reference is a reference into one-self","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Self-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $x = 1;
    $x = &$x;

    $array = [1,2,3, &$array];

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Self-reference)**
## Related

+ [Variables](variable.ini.html)
+ [Array, []](array.ini.html)
+ [References](reference.ini.html)
