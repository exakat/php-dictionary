# PHP Variables
PHP provides a set of predefined variables. They may be super-global, and available in any context, such as ``$_GET``; they may also be classic variable, in the global scope, such as ``$argv``.

The set of predefined variables changes with PHP versions: for example, in version 8.0, ``$phperrormsg`` was definitely removed. 

The set of predefined variables also depended on PHP directives. ``$HTTP_RAW_POST_DATA`` depended upon the ``always_populate_raw_post_data`` directive.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-variable.html","name":"PHP Variables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:06:31 +0000","dateModified":"Sat, 11 Jul 2026 09:06:31 +0000","description":"PHP provides a set of predefined variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PHP Variables.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    print_r($_GET);
    print_r($argv); // when in CLI
    print_r($GLOBALS);
    
    function foo() {
        global $argc;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.php)**
## See Also

+ [Predefined Variables in PHP: For complete beginners](https://theguerrilla.agency/predefined-variables-in-php-an-overview-for-complete-beginners)

## Related

+ [Superglobal Variables](super-global.ini.html)
+ [Variables](variable.ini.html)
+ [Native](native.ini.html)
+ [$argc]($argc.ini.html)
+ [$argv]($argv.ini.html)
