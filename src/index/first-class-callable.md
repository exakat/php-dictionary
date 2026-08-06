# First Class Callable
First Class Callable Syntax is a new feature that creates a closure directly from a function, by using the triple dot operator as an argument.

First class callable may be used on functions, closures, arrow functions and methods and static methods.

The number of arguments is not important: it is the same as the actual definition of the underlying method, and will be checked at call time only.

Such closure may be created using any kind of function, such as native PHP function, or library methods.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/first-class-callable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/first-class-callable.html","name":"First Class Callable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Jun 2026 13:47:21 +0000","dateModified":"Thu, 18 Jun 2026 13:47:21 +0000","description":"First Class Callable Syntax is a new feature that creates a closure directly from a function, by using the triple dot operator as an argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/First Class Callable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Functions](function.ini.html)
+ [Closure](closure.ini.html)
+ [Anonymous Function](anonymous-function.ini.html)
+ [Arrow Functions](fn.ini.html)
+ [Arrow Functions](arrow-function.ini.html)
+ [Closure](lambda-functions.ini.html)
+ [Custom Function](custom-function.ini.html)
+ [Three Dots](three-dots.ini.html)
