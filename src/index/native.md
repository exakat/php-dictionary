# Native
A feature is called native or built-in when it is part of the standard installation of PHP. For example, ``.``, dot operator for concatenation, or the ``stdClass`` class are native to PHP.

On the other hand, a feature is custom: that is, when defined by the developer or a PHP extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/native.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/native.html","name":"Native","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:37 +0000","dateModified":"Fri, 19 Jun 2026 21:25:37 +0000","description":"A feature is called native or built-in when it is part of the standard installation of PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Native.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Userland](userland.ini.html)
+ [Dynamic Loading](dynamic-loading.ini.html)
+ [Foreign Function Interface (FFI)](ffi.ini.html)
+ [PHP Constants](php-constant.ini.html)
+ [PHP Variables](php-variable.ini.html)
