# Zval
``ZVAL`` is a C structure, that represents data in the PHP engine. It is a structure, which is never directly used from PHP code.

It may be access with ``debug_zval_dump()`` function, for debugging purposes. It is useful to debug PHP engine, or extensions.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/zval.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/zval.html","name":"Zval","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 14:59:35 +0000","dateModified":"Tue, 16 Jun 2026 14:59:35 +0000","description":"``ZVAL`` is a C structure, that represents data in the PHP engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Zval.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Zend Engine](zend-engine.ini.html)
+ [Garbage Collection](garbage-collection.ini.html)
+ [Reference Count](reference-count.ini.html)
