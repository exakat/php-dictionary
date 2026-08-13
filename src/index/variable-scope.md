# Variable Scope
Variable scope is the context in which the variable is available. The context is often one method or function. 

``global`` keywords allows variables from other contexts to be available in the current one. 

Local variables are only available in one method or function, not counting the local or bind closures or arrow functions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-scope.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-scope.html","name":"Variable Scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Variable scope is the context in which the variable is available","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Variable Scope.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"variable-scope"}]}]}</script>
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

+ [Variables](variable.html)
+ [global Scope](global.html)
+ [Visibility](visibility.html)
