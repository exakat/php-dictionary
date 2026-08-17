# Self-reference
A self-reference is a reference into one-self. 

An array may hold a reference onto itself. Some functions are disrupted by these references, and yield ``recursion detected``: ``compact()``, ``count()``, ``var_export()``, etc... 

``$GLOBALS`` is a self-reference array: it contains a reference onto itself, as it is also a global variable.

Variables cannot be self-reference, although they might reference another variable, stored in themselves.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self-reference.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self-reference.html","name":"Self-reference","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:31:13 +0000","dateModified":"Fri, 19 Jun 2026 21:31:13 +0000","description":"A self-reference is a reference into one-self","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Self-reference.html"]}],"keywords":["reference","self-reference"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Self-reference"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"self-reference"}]}]}</script>
```php
<?php

    $x = 1;
    $x = &$x;

    $array = [1,2,3, &$array];

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Self-reference)**
## Related

+ [Variables](variable.html)
+ [Array, []](array.html)
+ [References](reference.html)
