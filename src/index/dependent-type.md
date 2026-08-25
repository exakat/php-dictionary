# Dependent Type
A dependent type is a type whose definition depends on a value. 

PHP does not support dependent type explicitly, though several situations behaves in a similar manner.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependent-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependent-type.html","name":"Dependent Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 23 Aug 2026 20:33:57 +0000","dateModified":"Sun, 23 Aug 2026 20:33:57 +0000","description":"A dependent type is a type whose definition depends on a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependent-type.html"]}],"keywords":["type","dependent type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-inference.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Dependent_type"},{"@type":"CreativeWork","name":"The Future of Programming is Dependent Types","url":"https:\/\/medium.com\/background-thread\/the-future-of-programming-is-dependent-types-programming-word-of-the-day-fcd5f2634878"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dependent-type"}]}]}</script>
```php
<?php

    print abs(-1); // 1, as integer
    print abs(-1.33); // 1.33, as float

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Dependent_type)**
## See Also

+ [The Future of Programming is Dependent Types](https://medium.com/background-thread/the-future-of-programming-is-dependent-types-programming-word-of-the-day-fcd5f2634878)

## Related

+ [Type System](type.html)
+ [Type Inference](type-inference.html)
