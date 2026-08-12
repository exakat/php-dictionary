# $GLOBALS
This super-global is a PHP predefined variable, which holds a reference to every global variable in the application. It behaves as an associative array, where each key is the name of a global variable and each value is a reference to that variable, so reading or writing ``$GLOBALS['x']`` inside a function is equivalent to declaring ``global $x;`` first. Because it bypasses normal variable scoping, relying on ``$GLOBALS`` makes code harder to test and reason about, and it is generally considered a code smell in modern PHP, where dependency injection or object properties are preferred. Since PHP 8.1, some indirect writes to ``$GLOBALS`` -- through list assignment, by-reference ``foreach``, or array functions -- are restricted, since they no longer directly modify the underlying global variable.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24globals.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24globals.html","name":"$GLOBALS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:55:35 +0000","dateModified":"Fri, 07 Aug 2026 09:55:35 +0000","description":"This super-global is a PHP predefined variable, which holds a reference to every global variable in the application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/$GLOBALS.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$globals"}]}]}</script>
```php
<?php

    // implicit global variable
    $aGlobalVariable = 1; 
    
    function foo() {
        echo $GLOBALS['aGlobalVariable'];
        $GLOBALS['aGlobalVariable'] = 2;
    }
    
    foo(); // displays 1
    echo aGlobalVariable; // 2

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.globals.php)**
## See Also

+ [PHP 8.1: $GLOBALS variable restrictions](https://php.watch/versions/8.1/GLOBALS-restrictions)
+ [Understanding PHP Globals and Variable Scope in WordPress](https://wpshout.com/php-globals-variable-scope-wordpress/#gref)

## Related

+ [$\_ENV]($_env.html)
+ [$\_SERVER]($_server.html)
+ [$argv]($argv.html)
+ [$php\_errormsg]($php_errormsg.html)
+ [Global Variables](global-variable.html)
+ [Distributed State](distributed-state.html)
+ [Global State](global-state.html)
+ [Static Variables](static-variable.html)
+ [Variable Variables](variable-variable.html)
+ [Variables](variable.html)
