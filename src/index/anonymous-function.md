# Anonymous Function
A function may be instantiated, without defining a function name. Such functions are called anonymous. 

Anonymous functions are defined as closures or arrow functions. They may also be created based on existing methods and functions, with the ``...`` operator.

Even without names, they are usable like functions, or as callable.

Methods cannot be anonymous, but it is possible to call a method without mentioning its name by using the ``__invoke`` magic method.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/anonymous-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/anonymous-function.html","name":"Anonymous Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A function may be instantiated, without defining a function name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Anonymous Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Closure](closure.ini.html)
+ [Arrow Functions](arrow-function.ini.html)
+ [First Class Callable](first-class-callable.ini.html)
+ [Closure](lambda-functions.ini.html)
+ [Anonymous](anonymous.ini.html)
+ [Arrow Functions](fn.ini.html)
+ [\_\_invoke() Method](__invoke.ini.html)
+ [Custom Function](custom-function.ini.html)
+ [Functions](function.ini.html)
+ [Lexical Variable](lexical.ini.html)
