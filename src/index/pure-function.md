# Pure Function
A pure function is a function with no side effects. It adheres to two fundamental principles:

+ Determinism: for the same input, a pure function will always return the same output. There are no hidden dependencies or side effects that could change the result.
+ No side-effect: a pure function does not modify any external state or data. It does not change variables outside its scope, write to a database, modify a file, or perform any action that affects the world outside the function.

A function that is not pure is an impure function. 

This notion applies to functions, methods, native and custom functions, closures and arrow functions. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pure-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pure-function.html","name":"Pure Function","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 12:11:42 +0000","dateModified":"Sat, 15 Aug 2026 12:11:42 +0000","description":"A pure function is a function with no side effects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pure-function.html"]}],"keywords":["function","functional programming"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/side-effect.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/impure-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memoization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/testable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Pure_function"},{"@type":"CreativeWork","name":"Pure Functions","url":"https:\/\/leanpub.com\/read\/thinking-functionally-in-php\/leanpub-auto-pure-functions"},{"@type":"CreativeWork","name":"Functional Programming in PHP: Part 2","url":"https:\/\/agiroloki.medium.com\/functional-programming-in-php-part-2-9db0f5443cdf"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pure-function"}]}]}</script>
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
