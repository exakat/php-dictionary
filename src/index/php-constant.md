# PHP Constants
PHP provides a set of predefined global constants. 

The set of predefined variables changes with PHP versions: for example, in version 8.0, ``T_READONLY`` was not defined, and appeared in version 8.1. 

It is possible to list all available PHP native constants with the function ``get_declared_constants()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-constant.html","name":"PHP Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:08:11 +0000","dateModified":"Sat, 11 Jul 2026 09:08:11 +0000","description":"PHP provides a set of predefined global constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PHP Constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    print E_ALL;

    print PHP_VERSION;

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.php)**
## See Also

+ [Understanding PHP Constants: A Simple Guide with Examples](https://flatcoding.com/tutorials/php/understanding-the-php-constant-expression/)

## Related

+ [Superglobal Variables](super-global.ini.html)
+ [Variables](variable.ini.html)
+ [Native](native.ini.html)
+ [DIRECTORY\_SEPARATOR](directory_separator.ini.html)
+ [New Line](new-line.ini.html)
+ [Predefined Constants](predefined-constant.ini.html)
