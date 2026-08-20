# Determinism
A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called. It has no side effects and does not rely on external or mutable state.

Determinism is relevant to caching strategies, testing, and the correctness of pure functions. Non-deterministic sources such as ``rand()``, ``time()``, ``microtime()``, or global state break determinism and make functions harder to test and reason about.

Determinism is a core property of pure functions in functional programming and is closely related to idempotence.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html","name":"Determinism","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:06:21 +0000","dateModified":"Mon, 17 Aug 2026 09:06:21 +0000","description":"A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Determinism.html"]}],"keywords":["concept","functional"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pure-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/side-effect.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functional-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/immutable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memoization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deterministic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/impure-function.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Deterministic_algorithm"},{"@type":"CreativeWork","name":"Pure and Deterministic Functions","url":"https:\/\/www.simplethread.com\/pure-and-deterministic-functions\/"},{"@type":"CreativeWork","name":"Understanding Pure Functions: A Core Concept in Functional Programming","url":"https:\/\/medium.com\/@linz07m\/understanding-pure-functions-a-core-concept-in-functional-programming-d2189b688e00"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"determinism"}]}]}</script>
```php
<?php

    // deterministic: same input always yields same output
    function add(int $a, int $b): int {
        return $a + $b;
    }
    
    // non-deterministic: depends on current time
    function currentHour(): int {
        return (int) date('H');
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Deterministic_algorithm)**
## See Also

+ [Pure and Deterministic Functions](https://www.simplethread.com/pure-and-deterministic-functions/)
+ [Understanding Pure Functions: A Core Concept in Functional Programming](https://medium.com/@linz07m/understanding-pure-functions-a-core-concept-in-functional-programming-d2189b688e00)

## Related

+ [Pure Function](pure-function.html)
+ [Side Effect](side-effect.html)
+ [Idempotent](idempotent.html)
+ [Functional Programming](functional-programming.html)
+ [Immutable](immutable.html)
+ [Cache](cache.html)
+ [Memoization](memoization.html)
+ [Random](random.html)
+ [Deterministic](deterministic.html)
+ [Impure Function](impure-function.html)
