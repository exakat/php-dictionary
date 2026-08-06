# \_\_autoload
``__autoload()`` was the name of the userland function, used to load classes when they were not found yet in the current execution environment. 

``__autoload()`` was later replaced with ``spl_autoload_register()``, which allows the composition of multiple autoloading methods.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__autoload.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__autoload.html","name":"__autoload","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 29 Jun 2026 09:56:49 +0000","dateModified":"Mon, 29 Jun 2026 09:56:49 +0000","description":"``__autoload()`` was the name of the userland function, used to load classes when they were not found yet in the current execution environment","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__autoload.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function __autoload($name) {
        if (file_exists(classes/$name.php)) {
            include classes/$name.php;
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.autoload.php)**
## Related

+ [Class Autoloading](autoload.ini.html)
