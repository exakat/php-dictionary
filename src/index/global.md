# global Scope
The global scope is the top level scope. It is the scope when no function, or method scope is active. It is also the first scope when starting execution. 

Variables from the global scope are accessible in other scopes by using the ``global`` keyword, or the ``$GLOBALS`` variable. Variables in the global scope are automatically added to the $GLOBALS variable; in local scopes, the ``global`` keyword has that effect too.

Some special variables are called superglobal: they are available in every scope.

The opposite of the global scope is the local scope. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global.html","name":"global Scope","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:48:36 +0000","dateModified":"Wed, 19 Aug 2026 06:48:36 +0000","description":"The global scope is the top level scope","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global.html"]}],"alternateName":["global-scope"],"keywords":["variable","feature","bad practice"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24argv.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/glob.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallback-to-global.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-scope.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/superglobal.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.variables.globals.php"},{"@type":"CreativeWork","name":"PHP global keyword - Accessing Global Variables in PHP","url":"https:\/\/zetcode.com\/php\/global-keyword\/"},{"@type":"CreativeWork","name":"PHP $GLOBALS","url":"https:\/\/www.geeksforgeeks.org\/php\/php-globals\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"global"}]}]}</script>
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
