# global Scope
The global scope is the top level scope. It is the scope when no function, or method scope is active. It is also the first scope when starting execution. 

Variables from the global scope are accessible in other scopes by using the ``global`` keyword, or the ``$GLOBALS`` variable. Variables in the global scope are automatically added to the $GLOBALS variable; in local scopes, the ``global`` keyword have that effect too.

Some special variables are called superglobal: they are available in every scope.

The opposite of the global scope is the local scope. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global.html","name":"global Scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The global scope is the top level scope","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global Scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"global Scope"}]}]}</script>
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

+ [Variables](variable.html)
+ [Static Variables](static-variable.html)
+ [Variable Variables](variable-variable.html)
+ [Global Variables](global-variable.html)
+ [Namespaces](namespace.html)
+ [$argv]($argv.html)
+ [glob()](glob.html)
+ [Local Scope](local.html)
+ [Scope](scope.html)
+ [Fallback To Global](fallback-to-global.html)
+ [Variable Scope](variable-scope.html)
+ [Superglobal Variables](superglobal.html)
