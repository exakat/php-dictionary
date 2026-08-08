# Global Variables
Global variables reside in the global scope, and may be imported in a local scope with the ``global`` keyword.

To become a global variable, a variable may use one of the following ways: 

+ Be declared as such with the ``global`` keyword
+ Be created in the ``$GLOBALS`` variable, which is a global variable itself
+ Be created outside any function, method, closure
+ Be a super-global

Global variables provides a way to share data in different and remote scopes. It also provide a way for data to be modified by another part of the code, without warning.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-variable.html","name":"Global Variables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:48:06 +0000","dateModified":"Fri, 07 Aug 2026 09:48:06 +0000","description":"Global variables reside in the global scope, and may be imported in a local scope with the ``global`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Global Variables.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Global Variables"}]}]}</script>
```php
<?php

    global $count;
    $count = 0;
    
    function counter() {
        global $count;
        
        // no return here
        ++$count;
    }
    
    counter(); 
    echo $count; // print 1
    counter(); 
    echo $count; // print 2

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static)**
## See Also

+ [How to Declare a Global Variable in PHP?](https://www.geeksforgeeks.org/php/how-to-declare-a-global-variable-in-php/)
+ [PHP Variable Scope Explained: Globals, Superglobals, and Best Practices](https://blog.servermania.com/server-manias-complete-guide-to-global-variables-in-php)

## Related

+ [Variables](variable.html)
+ [Static Variables](static-variable.html)
+ [Variable Variables](variable-variable.html)
+ [$GLOBALS]($globals.html)
+ [global Scope](global.html)
+ [Superglobal Variables](superglobal.html)
+ [Distributed State](distributed-state.html)
+ [Hidden State](hidden-state.html)
+ [Implicit State](implicit-state.html)
+ [Legacy](legacy.html)
+ [Local Variable](local-variable.html)

## Related packages

+ [sebastian/global-state](https://packagist.org/packages/sebastian/global-state)
