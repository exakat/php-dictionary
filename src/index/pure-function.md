# Pure Function
A pure function is a function that adheres to two fundamental principles:

+ Deterministism: for the same input, a pure function will always return the same output. There are no hidden dependencies or side effects that could change the result.
+ No side-effect: a pure function does not modify any external state or data. It does not change variables outside its scope, write to a database, modify a file, or perform any action that affects the world outside the function.

A function that is not pure is an impure function. 

This notion applies to functions, methods, native and custom functions, closures and arrow functions. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pure-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pure-function.html","name":"Pure Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A pure function is a function that adheres to two fundamental principles:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Pure Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Pure Function"}]}]}</script>
```php
<?php

    function add(int $a, int $b): int {
        return $a + $b;
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Pure_function)**
## See Also

+ [Pure Functions](https://leanpub.com/read/thinking-functionally-in-php/leanpub-auto-pure-functions)
+ [Functional Programming in PHP: Part 2](https://agiroloki.medium.com/functional-programming-in-php-part-2-9db0f5443cdf)

## Related

+ [Functions](function.html)
+ [Method](method.html)
+ [Return](return.html)
+ [Side Effect](side-effect.html)
+ [Impure Function](impure-function.html)
+ [Determinism](determinism.html)
+ [Memoization](memoization.html)
+ [Testable](testable.html)
