# Determinism
A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called. It has no side effects and does not rely on external or mutable state.

Determinism is relevant to caching strategies, testing, and the correctness of pure functions. Non-deterministic sources such as ``rand()``, ``time()``, ``microtime()``, or global state break determinism and make functions harder to test and reason about.

Determinism is a core property of pure functions in functional programming and is closely related to idempotence.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html","name":"Determinism","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:15 +0000","dateModified":"Fri, 19 Jun 2026 21:24:15 +0000","description":"A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Determinism.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Determinism"}]}]}</script>
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
