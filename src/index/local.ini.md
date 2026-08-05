# Local Scope
The local scope is the scope inside a function or method. The variables are contained within that scope, and are not available beyond it. 

The opposite of local scope is the global scope.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/local.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/local.ini.html","name":"Local Scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The local scope is the scope inside a function or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Local Scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo() {
    // $foo variable is only available in the foo scope
    $foo = 1; 
    
    $closure = function () {
        // this scope is different from foo()
        // its definition is nested in the foo() function
        // but those are 2 distinct scopes
    };
}

function goo() {
    // $goo variable is only available in the goo scope
    $goo = 1; 
}
?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.scope.php)**
## Related

+ [Scope](scope.ini.html)
+ [global Scope](global.ini.html)
