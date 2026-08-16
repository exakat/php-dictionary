# Zval
``ZVAL`` is a C structure, that represents data in the PHP engine. It is a structure, which is never directly used from PHP code.

It may be access with ``debug_zval_dump()`` function, for debugging purposes. It is useful to debug PHP engine, or extensions.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zval.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zval.html","name":"Zval","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"ZVAL is a C structure, that represents data in the PHP engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Zval.html"]}],"keywords":["engine"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zend-engine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference-count.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.phpinternalsbook.com\/php5\/zvals\/basic_structure.html"},{"@type":"CreativeWork","name":"debug_zval_dump","url":"https:\/\/www.php.net\/manual\/fr\/function.debug-zval-dump.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"zval"}]}]}</script>
```php
<?php

    // From the manual 
    $var1 = 'Hello';
    $var1 .= ' World';
    $var2 = $var1;
    
    debug_zval_dump($var1);
    
    // displays string(11) "Hello World" refcount(3)

?>
```

**[Documentation](https://www.phpinternalsbook.com/php5/zvals/basic_structure.html)**
## See Also

+ [debug_zval_dump](https://www.php.net/manual/fr/function.debug-zval-dump.php)

## Related

+ [Zend Engine](zend-engine.html)
+ [Garbage Collection](garbage-collection.html)
+ [Reference Count](reference-count.html)
