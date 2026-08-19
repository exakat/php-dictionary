# PHP Variables
PHP provides a set of predefined variables. They may be super-global, and available in any context, such as ``$_GET``; they may also be classic variables, in the global scope, such as ``$argv``.

The set of predefined variables changes with PHP versions: for example, in version 8.0, ``$phperrormsg`` was definitely removed. 

The set of predefined variables also depended on PHP directives. ``$HTTP_RAW_POST_DATA`` depended upon the ``always_populate_raw_post_data`` directive.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-variable.html","name":"PHP Variables","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 07:51:57 +0000","dateModified":"Fri, 14 Aug 2026 07:51:57 +0000","description":"PHP provides a set of predefined variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Variables.html"]}],"keywords":["variable"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/super-global.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24argc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24argv.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.variables.php"},{"@type":"CreativeWork","name":"Predefined Variables in PHP: For complete beginners","url":"https:\/\/theguerrilla.agency\/predefined-variables-in-php-an-overview-for-complete-beginners"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-variable"}]}]}</script>
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

+ [Superglobal Variables](super-global.html)
+ [Variables](variable.html)
+ [Native](native.html)
+ [$argc]($argc.html)
+ [$argv]($argv.html)
