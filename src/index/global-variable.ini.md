# Global Variables
Global variables reside in the global scope, and may be imported in a local scope with the ``global`` keyword.

To become a global variable, a variable may use one of the following ways: 

+ Be declared as such with the ``global`` keyword
+ Be created in the ``$GLOBALS`` variable, which is a global variable itself
+ Be created outside any function, method, closure
+ Be a super-global

Global variables provides a way to share data in different and remote scopes. It also provide a way for data to be modified by another part of the code, without warning.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/global-variable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/global-variable.ini.html","name":"Global Variables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:19:59 +0000","dateModified":"Mon, 03 Aug 2026 16:19:59 +0000","description":"Global variables reside in the global scope, and may be imported in a local scope with the ``global`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Global Variables.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

## Related

+ [Variables](variable.ini.html)
+ [Static Variables](static-variable.ini.html)
+ [Variable Variables](variable-variable.ini.html)
+ [$GLOBALS]($globals.ini.html)
+ [global Scope](global.ini.html)
+ [Superglobal Variables](superglobal.ini.html)
+ [Distributed State](distributed-state.ini.html)
+ [Hidden State](hidden-state.ini.html)
+ [Implicit State](implicit-state.ini.html)
+ [Legacy](legacy.ini.html)
+ [Local Variable](local-variable.ini.html)

## Related packages

+ [sebastian/global-state](https://packagist.org/packages/sebastian/global-state)
