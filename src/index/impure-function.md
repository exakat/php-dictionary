# Impure Function
An impure function is a function that has at least one of the following characteristics: 

+ Non-deterministic: for the same input, an impure function may return different output. For example, ``date()`` and ``random_string()`` return different values for each call, by definition. 
+ Create side-effect: an impure function modify a state: a global variable, a row in a table, a lock, a file or data. This may affect any subsequent call to this function, leading to the previous characteristic. 

A function that is not impure is a pure function. 

This notion applies to functions, methods, native and custom functions, closures and arrow functions. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/impure-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/impure-function.html","name":"Impure Function","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"An impure function is a function that has at least one of the following characteristics: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/impure-function.html"]}],"keywords":["function","functional programming"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/side-effect.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pure-function.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Pure_function"},{"@type":"CreativeWork","name":"Pure vs Impure Functions in Functional Programming \u2013 What's the Difference?","url":"https:\/\/www.freecodecamp.org\/news\/pure-function-vs-impure-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"impure-function"}]}]}</script>
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

+ [Functions](function.html)
+ [Method](method.html)
+ [Return](return.html)
+ [Determinism](determinism.html)
+ [Side Effect](side-effect.html)
+ [Pure Function](pure-function.html)
