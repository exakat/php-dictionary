# Forward Compatible
A forward compatible feature is a feature that will be available in future versions. In particular, it might be couple with a forward incompatible feature, which will be dropped, while the forward compatible feature will stay. 

For example, PHP allows the increment of non-numeric strings. This feature might be deprecated, and could be removed in a future version, not defined at the time of writing. The functions ``str_increment()`` and ``str_decrement()`` were introduced in version 8.3. They can replace the current feature, and they will be available in the future versions, making them forward compatible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/forward-compatible.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/forward-compatible.html","name":"Forward Compatible","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 12:07:27 +0000","dateModified":"Sun, 09 Aug 2026 12:07:27 +0000","description":"A forward compatible feature is a feature that will be available in future versions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Forward Compatible.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"forward-compatible"}]}]}</script>
```php
<?php

    $a = 't';
    echo ++$a; //u
    
    $a = str_increment($a);
    echo $a; // v

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Forward_compatibility)**
## See Also

+ [PHP manual: Migrating from PHP 8.2.x to PHP 8.3.x](https://www.php.net/manual/en/migration83.php)
+ [str_increment](https://www.php.net/manual/en/function.str-increment.php)

## Related

+ [Backward Compatible](backward-compatible.html)
+ [Backward Incompatible](backward-incompatible.html)
+ [Deprecated](deprecated.html)
+ [Upgrade](upgrade.html)
+ [Version](version.html)
+ [delayedtargetvalidation](delayedtargetvalidation.html)
