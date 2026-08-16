# Native
A feature is called native or built-in when it is part of the standard installation of PHP. For example, ``.``, dot operator for concatenation, or the ``stdClass`` class are native to PHP.

On the other hand, a feature is custom: that is, when defined by the developer or a PHP extension.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native.html","name":"Native","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A feature is called native or built-in when it is part of the standard installation of PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Native.html"]}],"alternateName":["native-function","native-class","native-constant","native-php","built-in","internal"],"keywords":["concept","PHP engine"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/userland.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-loading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ffi.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-variable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/funcref.php"},{"@type":"CreativeWork","name":"The 100 PHP functions in 2022","url":"https:\/\/www.exakat.io\/en\/the-100-php-functions-in-2022\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"native"}]}]}</script>
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
