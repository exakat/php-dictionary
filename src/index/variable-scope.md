# Variable Scope
Variable scope is the context in which the variable is available. The context is often one method or function. 

``global`` keywords allows variables from other contexts to be available in the current one. 

Local variables are only available in one method or function, not counting the local or bind closures or arrow functions.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-scope.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-scope.html","name":"Variable Scope","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Sep 2026 20:18:51 +0000","dateModified":"Thu, 10 Sep 2026 20:18:51 +0000","description":"Variable scope is the context in which the variable is available","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-scope.html"]}],"keywords":["variable"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.variables.scope.php"},{"@type":"CreativeWork","name":"What are the different scopes of variables in PHP ?","url":"https:\/\/www.geeksforgeeks.org\/php\/what-are-the-different-scopes-of-variables-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"variable-scope"}]}]}</script>
```php
<?php

function trumpet() {
    // $trunk is only available in trumpet
    $trunk = 1;
}

function forage() {
    // $trunk is only available in forage, and is distinct from the one in trumpet()
    $trunk = 2;

    // $ivory is only available in forage, the followring closure and the arrow function
    $ivory = 1;

    $c = function() use ($ivory) { return $ivory;};
    $d = function() use ($ivory) { return $ivory;};
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
