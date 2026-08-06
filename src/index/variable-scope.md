# Variable Scope
Variable scope is the context in which the variable is available. The context is often one method or function. 

``global`` keywords allows variables from other contexts to be available in the current one. 

Local variables are only available in one method or function, not counting the local or bind closures or arrow functions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/variable-scope.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/variable-scope.html","name":"Variable Scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Variable scope is the context in which the variable is available","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Variable Scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo() {
    // $a is only available in foo
    $a = 1;
}

function bar() {
    // $a is only available in bar, and is distinct from the one in foo()
    $a = 2;

    // $bar is only available in bar, the followring closure and the arrow function
    $b = 1;
    
    $c = function() use ($b) { return $b;};
    $d = function() use ($b) { return $b;};
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.scope.php)**
## See Also

+ [What are the different scopes of variables in PHP ?](https://www.geeksforgeeks.org/php/what-are-the-different-scopes-of-variables-in-php/)

## Related

+ [Variables](variable.ini.html)
+ [global Scope](global.ini.html)
+ [Visibility](visibility.ini.html)
