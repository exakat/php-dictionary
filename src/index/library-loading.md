# Library Loading
PHP has a modular structure, which allows it to load extensions. The extensions may be part of PHP at compilation time, and always available: this is the case for ``core``, or ``string``. 

On the other hand, some extensions are loaded dynamically, with the ``dl()`` function. This is done during execution. It usually has an impact on performance, and security, and was restricted to be used only in command line, not on web servers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/library-loading.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/library-loading.html","name":"Library Loading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP has a modular structure, which allows it to load extensions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Library Loading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Library Loading"}]}]}</script>
```php
<?php

if (!extension_loaded('sqlite3')) {
    dl('sqlite3.so');
}

?>
```

**[Documentation](https://www.php.net/manual/en/function.dl.php)**
## Related

+ [Extensions](extension.html)
+ [Foreign Function Interface (FFI)](ffi.html)
