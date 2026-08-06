# Copy On Write (COW)
``Copy on write``, or COW, is a data management technique where data is shared between contexts, until it is actually modified. When a modification happens, the data is then duplicated, to avoid polluting the original data. Otherwise, simple reads keep the data intact, and save a copy operation and memory. 

PHP uses this technique for arrays and strings, unless they are passed by reference. It is totally transparent for the code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/copy-on-write.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/copy-on-write.html","name":"Copy On Write (COW)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``Copy on write``, or COW, is a data management technique where data is shared between contexts, until it is actually modified","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Copy On Write (COW).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Internals](internals.ini.html)
