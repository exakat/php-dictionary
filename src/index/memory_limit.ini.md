# memory\_limit
``memory_limit`` is the directive that caps the maximum amount of memory that PHP can use. 

The limit is expressed in bytes, although options are available for kb ``K``, Mb ``M`` and Gb ``G``, case insensitive.

The limit may be lifted by setting this directive to ``-1``.

PHP requires a minimum of memory when starting. Usually, it is about 2Mb of RAM. Setting any positive value for ``memory_limit`` below that threshold prevents PHP from starting.

The default value of ``memory_limit`` is 128 Mb. 

``memory_limit`` may be changed during execution with ``ini_set()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/memory_limit.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/memory_limit.ini.html","name":"memory_limit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``memory_limit`` is the directive that caps the maximum amount of memory that PHP can use","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/memory_limit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo ini_get('memory_limit');  //128M

?>
```

**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.memory-limit)**
## See Also

+ [PHP memory_limit – understanding and increasing](https://linuxblog.io/understanding-php-memory_limit/)

## Related

+ [Memory](memory.ini.html)
+ [php://memory](php-memory.ini.html)
+ [php://tmp](php-tmp.ini.html)
+ [Vertical Scaling](vertical-scaling.ini.html)
