# First Class Callable
First Class Callable Syntax is a new feature that creates a closure directly from a function, by using the triple dot operator as an argument.

First class callable may be used on functions, closures, arrow functions and methods and static methods.

The number of arguments is not important: it is the same as the actual definition of the underlying method, and will be checked at call time only.

Such closure may be created using any kind of function, such as native PHP function, or library methods.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/first-class-callable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/first-class-callable.html","name":"First Class Callable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"First Class Callable Syntax is a new feature that creates a closure directly from a function, by using the triple dot operator as an argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/First Class Callable.html"]}],"keywords":["feature","syntax"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fn.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lambda-functions.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/custom-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/three-dots.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/closure"},{"@type":"CreativeWork","name":"PHP's First-Class Callable Syntax","url":"https:\/\/dev.to\/damms005\/phps-first-class-callable-syntax-1kjl"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"first-class-callable"}]}]}</script>
```php
<?php

    $a = foo(...);
    
    $function = strtolower(...);
    
    $closure = X::staticMethod(...);

?>
```

**[Documentation](https://www.php.net/closure)**
## See Also

+ [PHP's First-Class Callable Syntax](https://dev.to/damms005/phps-first-class-callable-syntax-1kjl)

## Related

+ [Functions](function.html)
+ [Closure](closure.html)
+ [Anonymous Function](anonymous-function.html)
+ [Arrow Functions](fn.html)
+ [Arrow Functions](arrow-function.html)
+ [Closure](lambda-functions.html)
+ [Custom Function](custom-function.html)
+ [Three Dots](three-dots.html)
