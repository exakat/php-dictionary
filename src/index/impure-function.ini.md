# Impure Function
An impure function is a function that has at least one of the following characteristics: 

+ Non-deterministic: for the same input, an impure function may return different output. For example, ``date()`` and ``random_string()`` return different values for each call, by definition. 
+ Create side-effect: an impure function modify a state: a global variable, a row in a table, a lock, a file or data. This may affect any subsequent call to this function, leading to the previous characteristic. 

A function that is not impure is a pure function. 

This notion applies to functions, methods, native and custom functions, closures and arrow functions. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/impure-function.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/impure-function.ini.html","name":"Impure Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"An impure function is a function that has at least one of the following characteristics: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Impure Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo random_string(0, 10);
    
    // an impure function: 
    // the static variable is a state that changes over time
    function foo() {
        static $x = 0;
        
        return $x++;
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Pure_function)**
## See Also

+ [Pure vs Impure Functions in Functional Programming – What's the Difference?](https://www.freecodecamp.org/news/pure-function-vs-impure-function/)

## Related

+ [Functions](function.ini.html)
+ [Method](method.ini.html)
+ [Return](return.ini.html)
+ [Determinism](determinism.ini.html)
+ [Side Effect](side-effect.ini.html)
+ [Pure Function](pure-function.ini.html)
