# Dynamic Loading
Dynamic Loading is related to the loading of PHP extensions, at execution time. 

Most of the time, the extensions are compiled with PHP, and loaded at startup. For development purposes, or for distribution purposes, some libraries may be loaded at execution time, with the ``dl()`` function.

``dl()`` calls are considered bad for performances and for security.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-loading.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-loading.ini.html","name":"Dynamic Loading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:47:08 +0000","dateModified":"Thu, 23 Jul 2026 13:47:08 +0000","description":"Dynamic Loading is related to the loading of PHP extensions, at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dynamic Loading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // add extra features to PHP
    dl('ldap.so');

?>
```

**[Documentation](https://www.php.net/manual/en/function.dl.php)**
## Related

+ [Dynamic](dynamic.ini.html)
+ [Extensions](extension.ini.html)
+ [Foreign Function Interface (FFI)](ffi.ini.html)
+ [Library](library.ini.html)
+ [Native](native.ini.html)
+ [Performance](performance.ini.html)
+ [Security](security.ini.html)
