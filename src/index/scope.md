# Scope
The scope, also called context, is the space in which a certain elements are defined. There are function, closure or method scope, for local variables; methods are also defined in a class scope.

A variable scope is usually its host method, or the file in which is used. It also extends to any included files, and skips other method definition.  

Arrow functions are initialised with the same scope than the defining scope, but do not write back in it. Closure with the use keyword also import variables from the defining scope. 

Scopes are generally considered as global or local.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope.html","name":"Scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The scope, also called context, is the space in which a certain elements are defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"scope"}]}]}</script>
```php
<?php

    // $a is defined in the file scope
    $a = 1; 
    
    // $a is extended to the included scope
    include 'b.php';
    
    // arrow functions use the same scope than the defining code. 
    // here, $a is also defined there. 
    // $c will not be available in the calling scope.
    $c = fn () => $a + ($c = 2);
    
    function foo() {
        // $b is only defined in the foo() function
        echo $b; 
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.scope.php)**
## See Also

+ [Understanding scope in PHP](https://marcor.substack.com/p/understanding-scope-in-php)

## Related

+ [Local Scope](local.html)
+ [global Scope](global.html)
