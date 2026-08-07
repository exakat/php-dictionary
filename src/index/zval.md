# Zval
``ZVAL`` is a C structure, that represents data in the PHP engine. It is a structure, which is never directly used from PHP code.

It may be access with ``debug_zval_dump()`` function, for debugging purposes. It is useful to debug PHP engine, or extensions.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zval.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zval.html","name":"Zval","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 14:59:35 +0000","dateModified":"Tue, 16 Jun 2026 14:59:35 +0000","description":"``ZVAL`` is a C structure, that represents data in the PHP engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Zval.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Zval"}]}]}</script>
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
