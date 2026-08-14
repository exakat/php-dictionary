# Local Scope
The local scope is the scope inside a function or method. The variables are contained within that scope, and are not available beyond it. 

The opposite of local scope is the global scope.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local.html","name":"Local Scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:33:02 +0000","dateModified":"Thu, 13 Aug 2026 05:33:02 +0000","description":"The local scope is the scope inside a function or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Local Scope.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"local"}]}]}</script>
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

+ [Scope](scope.html)
+ [global Scope](global.html)
