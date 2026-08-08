# Native
A feature is called native or built-in when it is part of the standard installation of PHP. For example, ``.``, dot operator for concatenation, or the ``stdClass`` class are native to PHP.

On the other hand, a feature is custom: that is, when defined by the developer or a PHP extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native.html","name":"Native","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A feature is called native or built-in when it is part of the standard installation of PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Native.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Native"}]}]}</script>
```php
<?php

    // This is a native function
    $s = strtolower($s);
    
    // This is not a native function : it comes from an extension
    $rar_arch = RarArchive::open('latest_winrar.rar');

?>
```

**[Documentation](https://www.php.net/manual/en/funcref.php)**
## See Also

+ [The 100 PHP functions in 2022](https://www.exakat.io/en/the-100-php-functions-in-2022/)

## Related

+ [Userland](userland.html)
+ [Dynamic Loading](dynamic-loading.html)
+ [Foreign Function Interface (FFI)](ffi.html)
+ [PHP Constants](php-constant.html)
+ [PHP Variables](php-variable.html)
