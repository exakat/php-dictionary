# Neutral Element
A neutral element is a piece of data which has no effect with a particular operation.

For example, ``0`` is the neutral element for the addition, as ``0 + $a`` is the same as ``$a + 0`` and the same as ``$a``, without any type change.

The neutral element for the multiplication is ``1``; the neutral element for the concatenation is the empty string ``''``. 

It is usually possible to define a neutral element for any operation or method call. For objects, they are called null objects, as they could replace the ``null`` scalar value.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/neutral-element.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/neutral-element.html","name":"Neutral Element","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:01:37 +0000","dateModified":"Tue, 11 Aug 2026 21:01:37 +0000","description":"A neutral element is a piece of data which has no effect with a particular operation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/neutral-element.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullpattern.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Identity_element"},{"@type":"CreativeWork","name":"Null Object Pattern","url":"https:\/\/en.wikipedia.org\/wiki\/Null_object_pattern"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"neutral-element"}]}]}</script>
```php
<?php

    $a = 10;
    
    $a *= 1; // this does nothing
    $a += 1; // this does nothing

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Identity_element)**
## See Also

+ [Null Object Pattern](https://en.wikipedia.org/wiki/Null_object_pattern)

## Related

+ [Null Pattern](nullpattern.html)
