# clamp()
``clamp()`` is a native PHP function that limits a value to a range. It returns the value when it lies between ``min`` and ``max``; otherwise, it returns the nearest bound.

Its semantics match the clamp functions of other languages, such as ``std::clamp`` in C++ and ``Math.clamp`` in Java.

If ``min`` is greater than ``max``, or if either bound is ``NAN``, a ``ValueError`` is thrown. The function is not limited to numbers: it works with any values that PHP can compare, so the usual comparison coercion rules apply.

Before PHP 8.6, a userland ``clamp`` package provides the same behavior.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clamp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clamp.html","name":"clamp()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 09 Oct 2026 17:22:02 +0000","dateModified":"Fri, 09 Oct 2026 17:22:02 +0000","description":"clamp() is a native PHP function that limits a value to a range","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clamp.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/wiki.php.net\/rfc\/clamp_v2"},{"@type":"CreativeWork","name":"PHP 8.6: New clamp function","url":"https:\/\/php.watch\/versions\/8.6\/clamp"},{"@type":"CreativeWork","name":"PHP 8.6 RFC: clamp v2","url":"https:\/\/php.watch\/rfcs\/clamp_v2"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"clamp"}]}]}</script>
```php
<?php

    echo clamp(10, min: 0, max: 100);  // 10
    echo clamp(101, min: 0, max: 100); // 100
    echo clamp(-1, min: 0, max: 100);  // 0

?>
```

**[Documentation](https://wiki.php.net/rfc/clamp_v2)**
## See Also

+ [PHP 8.6: New clamp function](https://php.watch/versions/8.6/clamp)
+ [PHP 8.6 RFC: clamp v2](https://php.watch/rfcs/clamp_v2)

## Related

+ [array\_filter()](array_filter.html)
+ [Comparison](comparison.html)
