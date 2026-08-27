# Local Scope
The local scope is the scope inside a function or method. The variables are contained within that scope, and are not available beyond it. 

The opposite of local scope is the global scope.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local.html","name":"Local Scope","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 09:52:45 +0000","dateModified":"Sat, 15 Aug 2026 09:52:45 +0000","description":"The local scope is the scope inside a function or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local.html"]}],"alternateName":["local-scope"],"keywords":["php engine"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.variables.scope.php"},{"@type":"CreativeWork","name":"Scope (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Scope_(computer_science)"},{"@type":"CreativeWork","name":"Anonymous functions","url":"https:\/\/www.php.net\/manual\/en\/functions.anonymous.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"local"}]}]}</script>
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
## See Also

+ [Scope (Wikipedia)](https://en.wikipedia.org/wiki/Scope_(computer_science))
+ [Anonymous functions](https://www.php.net/manual/en/functions.anonymous.php)

## Related

+ [Scope](scope.html)
+ [global Scope](global.html)
