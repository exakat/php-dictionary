# Copy On Write (COW)
``Copy on write``, or COW, is a data management technique where data is shared between contexts, until it is actually modified. When a modification happens, the data is then duplicated, to avoid polluting the original data. Otherwise, simple reads keep the data intact, and save a copy operation and memory. 

PHP uses this technique for arrays and strings, unless they are passed by reference. It is totally transparent for the code.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/copy-on-write.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/copy-on-write.html","name":"Copy On Write (COW)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Copy on write, or COW, is a data management technique where data is shared between contexts, until it is actually modified","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/copy-on-write.html"]}],"keywords":["engine","acronym","animal"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/internals.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Copy-on-write"},{"@type":"CreativeWork","name":"Writing PHP Extensions: Copy on Write","url":"https:\/\/www.zend.com\/resources\/php-extensions\/copy-on-write"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"copy-on-write"}]}]}</script>
```php
<?php

    $array = [1,2,3];
    
    function foo($a) {
        echo $a[1]; // 
        
        $a[2] = 4; // $a is copied, then modified.
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Copy-on-write)**
## See Also

+ [Writing PHP Extensions: Copy on Write](https://www.zend.com/resources/php-extensions/copy-on-write)

## Related

+ [Internals](internals.html)
