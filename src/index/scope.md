# Scope
The scope, also called context, is the space in which a certain elements are defined. There are function, closure or method scope, for local variables; methods are also defined in a class scope.

A variable scope is usually its host method, or the file in which is used. It also extends to any included files, and skips other method definition.  

Arrow functions are initialised with the same scope than the defining scope, but do not write back in it. Closure with the use keyword also import variables from the defining scope. 

Scopes are generally considered as global or local.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/scope.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/scope.html","name":"Scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The scope, also called context, is the space in which a certain elements are defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Local Scope](local.ini.html)
+ [global Scope](global.ini.html)
