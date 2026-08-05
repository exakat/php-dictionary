# Custom Function
A custom function, or user-defined function, is a function declared by the developer, as opposed to a native PHP function provided by the engine or an extension. Custom functions encapsulate reusable logic under a named callable.

Functions are declared with the ``function`` keyword and may be defined in any scope. Unlike many languages, PHP functions are global by default once declared: a function defined inside a conditional block or another function is still globally accessible after that point is reached at runtime.

Custom functions can be:

+ Regular functions: ``function myFunction() {}``
+ Closures: ``$fn = function() {}``
+ Arrow functions: ``$fn = fn() => expression``
+ Static methods: functions bound to a class

PHP also supports first-class callables, since PHP 8.1, and can call custom functions by name stored in a variable, as a dynamic calls.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/custom-function.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/custom-function.ini.html","name":"Custom Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 09:09:03 +0000","dateModified":"Fri, 17 Jul 2026 09:09:03 +0000","description":"A custom function, or user-defined function, is a function declared by the developer, as opposed to a native PHP function provided by the engine or an extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Custom Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Regular custom function
    function clamp(int $value, int $min, int $max): int {
        return max($min, min($max, $value));
    }
    
    echo clamp(150, 0, 100); // 100
    
    // Anonymous function stored in a variable
    $double = function(int $n): int {
        return $n * 2;
    };
    
    echo $double(5); // 10
    
    // Arrow function
    $triple = fn(int $n): int => $n * 3;
    echo $triple(5); // 15
    
    // First-class callable syntax (PHP 8.1)
    $fn = clamp(...);
    echo $fn(42, 0, 50); // 42

?>
```

**[Documentation](https://www.php.net/manual/en/functions.user-defined.php)**
## Related

+ [Functions](function.ini.html)
+ [Anonymous Function](anonymous-function.ini.html)
+ [Arrow Functions](arrow-function.ini.html)
+ [First Class Callable](first-class-callable.ini.html)
+ [Closure](closure.ini.html)
+ [PHP Native Function](php-function.ini.html)
