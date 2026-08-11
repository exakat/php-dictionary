# Callables
A callable is an object that can pass the ``callable`` type. 

A callable may be a callback function or method, represented as a string, a closure or an arrow function. 

Objects may also be callable, when their class implement the magic method ``__invoke()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callable.html","name":"Callables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A callable is an object that can pass the ``callable`` type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Callables.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"callable"}]}]}</script>
```php
<?php

function foo() { echo __METHOD__; }

call_user_func('foo');

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.callable.php)**
## See Also

+ [What Is the callable Type in PHP?](https://www.designcise.com/web/tutorial/what-is-the-callable-type-in-php)

## Related

+ [Callbacks](callback.html)
+ [Closure](closure.html)
+ [\_\_invoke() Method](__invoke.html)
+ [Arrow Functions](arrow-function.html)
+ [Callable Arrays](array-callable.html)
+ [Call](call.html)
+ [Pseudo-type](pseudo-type.html)
+ [Special Types](special-typehint.html)
+ [Identity](identity.html)
+ [PHP Natives](native-type.html)
