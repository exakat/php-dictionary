# global Scope
The global scope is the top level scope. It is the scope when no function, or method scope is active. It is also the first scope when starting execution. 

Variables from the global scope are accessible in other scopes by using the ``global`` keyword, or the ``$GLOBALS`` variable. Variables in the global scope are automatically added to the $GLOBALS variable; in local scopes, the ``global`` keyword have that effect too.

Some special variables are called superglobal: they are available in every scope.

The opposite of the global scope is the local scope. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/global.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/global.ini.html","name":"global Scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:35 +0000","dateModified":"Wed, 05 Aug 2026 08:17:35 +0000","description":"The global scope is the top level scope","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/global Scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $x = 'A';
    
    function counter() {
        echo $GLOBALS['A'];
    
        global $x;
        
        echo $x;
    }
    
    foo();

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.globals.php)**
## See Also

+ [PHP global keyword - Accessing Global Variables in PHP](https://zetcode.com/php/global-keyword/)
+ [PHP $GLOBALS](https://www.geeksforgeeks.org/php/php-globals/)

## Related

+ [Variables](variable.ini.html)
+ [Static Variables](static-variable.ini.html)
+ [Variable Variables](variable-variable.ini.html)
+ [Global Variables](global-variable.ini.html)
+ [Namespaces](namespace.ini.html)
+ [$argv]($argv.ini.html)
+ [glob()](glob.ini.html)
+ [Local Scope](local.ini.html)
+ [Scope](scope.ini.html)
+ [Fallback To Global](fallback-to-global.ini.html)
+ [Variable Scope](variable-scope.ini.html)
+ [Superglobal Variables](superglobal.ini.html)
