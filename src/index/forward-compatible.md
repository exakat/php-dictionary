# Forward Compatible
A forward compatible feature is a feature that will be available in future versions. In particular, it might be couple with a forward incompatible feature, which will be dropped, while the forward compatible feature will stay. 

For example, PHP allows the increment of non-numeric strings. This feature might be deprecated, and could be removed in a future version, not defined at the time of writing. The functions ``str_increment()`` and ``str_decrement()`` were introduced in version 8.3. They can replace the current feature, and they will be available in the future versions, making them forward compatible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/forward-compatible.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/forward-compatible.html","name":"Forward Compatible","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:27:25 +0000","dateModified":"Mon, 20 Jul 2026 08:27:25 +0000","description":"A forward compatible feature is a feature that will be available in future versions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Forward Compatible.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Forward Compatible"}]}]}</script>
```php
<?php

    $a = 't';
    echo ++$a; //u
    
    $a = str_increment($a);
    echo $a; // v

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Forward_compatibility)**
## Related

+ [Backward Compatible](backward-compatible.html)
+ [Backward Incompatible](backward-incompatible.html)
+ [Deprecated](deprecated.html)
+ [Upgrade](upgrade.html)
+ [Version](version.html)
+ [delayedtargetvalidation](delayedtargetvalidation.html)
