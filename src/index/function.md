# Functions
Functions are defined with a set of parameters, a body of code for processing, and a returned value, typed or not. 

Methods are defined almost the same way, except for some more options and within the context of a class. 

A function is said to be anonymous when it has no name. This is the case of the closures and the arrow functions.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html","name":"Functions","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:48:28 +0000","dateModified":"Wed, 19 Aug 2026 06:48:28 +0000","description":"Functions are defined with a set of parameters, a body of code for processing, and a returned value, typed or not","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"]}],"keywords":["function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/first-class-callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default-parameter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dereferencing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/disable-functions.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-argument.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callback.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallback-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallback-to-global.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pure-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/call-graph.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/impure-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parameter-removal.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/undefined.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-class-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/naming-conflict.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relay-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/custom-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.functions.php"},{"@type":"CreativeWork","name":"PHP Functions","url":"https:\/\/www.tutorialrepublic.com\/php-tutorial\/php-functions.php"},{"@type":"CreativeWork","name":"How To Use Functions in PHP","url":"https:\/\/www.digitalocean.com\/community\/tutorials\/how-to-use-functions-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"function"}]}]}</script>
```php
<?php

    function foo($a, $b) {
        return $a - $b;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.functions.php)**
## See Also

+ [PHP Functions](https://www.tutorialrepublic.com/php-tutorial/php-functions.php)
+ [How To Use Functions in PHP](https://www.digitalocean.com/community/tutorials/how-to-use-functions-in-php)

## Related

+ [Recursion](recursion.html)
+ [Closure](closure.html)
+ [Arrow Functions](arrow-function.html)
+ [Method](method.html)
+ [Anonymous Function](anonymous-function.html)
+ [First Class Callable](first-class-callable.html)
+ [Default Parameter](default-parameter.html)
+ [Dereferencing](dereferencing.html)
+ [Disable Functions](disable-functions.html)
+ [Return](return.html)
+ [Variable Arguments](variable-argument.html)
+ [Callbacks](callback.html)
+ [Fallback Function](fallback-function.html)
+ [Fallback To Global](fallback-to-global.html)
+ [Pure Function](pure-function.html)
+ [Call Graph](call-graph.html)
+ [Impure Function](impure-function.html)
+ [Parameter Removal](parameter-removal.html)
+ [Undefined](undefined.html)
+ [Dynamic Class Constant](dynamic-class-constant.html)
+ [Naming Conflict](naming-conflict.html)
+ [PHP Native Function](php-function.html)
+ [Relay Function](relay-function.html)
+ [Custom Function](custom-function.html)
+ [Identity](identity.html)
