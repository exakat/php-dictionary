# Callables
A callable is an object that can pass the ``callable`` type. 

A callable may be a callback function or method, represented as a string, a closure or an arrow function. 

Objects may also be callable, when their class implement the magic method ``__invoke()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/callable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/callable.html","name":"Callables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A callable is an object that can pass the ``callable`` type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Callables.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Callbacks](callback.ini.html)
+ [Closure](closure.ini.html)
+ [\_\_invoke() Method](__invoke.ini.html)
+ [Arrow Functions](arrow-function.ini.html)
+ [Callable Arrays](array-callable.ini.html)
+ [Call](call.ini.html)
+ [Pseudo-type](pseudo-type.ini.html)
+ [Special Types](special-typehint.ini.html)
+ [Identity](identity.ini.html)
+ [PHP Natives](native-type.ini.html)
