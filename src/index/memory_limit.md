# memory\_limit
``memory_limit`` is the directive that caps the maximum amount of memory that PHP can use. 

The limit is expressed in bytes, although options are available for kb ``K``, Mb ``M`` and Gb ``G``, case insensitive.

The limit may be lifted by setting this directive to ``-1``.

PHP requires a minimum of memory when starting. Usually, it is about 2Mb of RAM. Setting any positive value for ``memory_limit`` below that threshold prevents PHP from starting.

The default value of ``memory_limit`` is 128 Mb. 

``memory_limit`` may be changed during execution with ``ini_set()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory_limit.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory_limit.html","name":"memory_limit","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"memory_limit is the directive that caps the maximum amount of memory that PHP can use","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory_limit.html"]}],"keywords":["-1","directive"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-tmp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vertical-scaling.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/ini.core.php#ini.memory-limit"},{"@type":"CreativeWork","name":"PHP memory_limit \u2013 understanding and increasing","url":"https:\/\/linuxblog.io\/understanding-php-memory_limit\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"memory_limit"}]}]}</script>
```php
<?php

    echo ini_get('memory_limit');  //128M

?>
```

**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.memory-limit)**
## See Also

+ [PHP memory_limit – understanding and increasing](https://linuxblog.io/understanding-php-memory_limit/)

## Related

+ [Memory](memory.html)
+ [php://memory](php-memory.html)
+ [php://tmp](php-tmp.html)
+ [Vertical Scaling](vertical-scaling.html)
