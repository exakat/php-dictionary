# Anonymous Function
A function may be instantiated, without defining a function name. Such functions are called anonymous. 

Anonymous functions are defined as closures or arrow functions. They may also be created based on existing methods and functions, with the ``...`` operator.

Even without names, they are usable like functions, or as callable.

Methods cannot be anonymous, but it is possible to call a method without mentioning its name by using the ``__invoke`` magic method.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-function.html","name":"Anonymous Function","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A function may be instantiated, without defining a function name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Anonymous Function.html"]}],"keywords":["concept","feature","syntax"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/first-class-callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lambda-functions.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fn.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__invoke.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/custom-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/functions.anonymous.php"},{"@type":"CreativeWork","name":"Anonymous functions in PHP","url":"https:\/\/drops-of-php.hi-folks.dev\/04-functions\/01-fns-anonymous\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"anonymous-function"}]}]}</script>
```php
<?php

    $closure = function () {} ; 

    $arrowFunction = fn() => 1;
    
    $fcs = strlen(...);

?>
```

**[Documentation](https://www.php.net/manual/en/functions.anonymous.php)**
## See Also

+ [Anonymous functions in PHP](https://drops-of-php.hi-folks.dev/04-functions/01-fns-anonymous/)

## Related

+ [Closure](closure.html)
+ [Arrow Functions](arrow-function.html)
+ [First Class Callable](first-class-callable.html)
+ [Closure](lambda-functions.html)
+ [Anonymous](anonymous.html)
+ [Arrow Functions](fn.html)
+ [\_\_invoke() Method](__invoke.html)
+ [Custom Function](custom-function.html)
+ [Functions](function.html)
+ [Lexical Variable](lexical.html)
