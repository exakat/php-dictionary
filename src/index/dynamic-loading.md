# Dynamic Loading
Dynamic Loading is related to the loading of PHP extensions, at execution time. 

Most of the time, the extensions are compiled with PHP, and loaded at startup. For development purposes, or for distribution purposes, some libraries may be loaded at execution time, with the ``dl()`` function.

``dl()`` calls are considered bad for performances and for security.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-loading.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-loading.html","name":"Dynamic Loading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Dynamic Loading is related to the loading of PHP extensions, at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dynamic Loading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dynamic-loading"}]}]}</script>
```php
<?php

    // add extra features to PHP
    dl('ldap.so');

?>
```

**[Documentation](https://www.php.net/manual/en/function.dl.php)**
## Related

+ [Dynamic](dynamic.html)
+ [Extensions](extension.html)
+ [Foreign Function Interface (FFI)](ffi.html)
+ [Library](library.html)
+ [Native](native.html)
+ [Performance](performance.html)
+ [Security](security.html)
