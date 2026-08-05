# Determinism
A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called. It has no side effects and does not rely on external or mutable state.

Determinism is relevant to caching strategies, testing, and the correctness of pure functions. Non-deterministic sources such as ``rand()``, ``time()``, ``microtime()``, or global state break determinism and make functions harder to test and reason about.

Determinism is a core property of pure functions in functional programming and is closely related to idempotence.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/determinism.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/determinism.ini.html","name":"Determinism","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:15 +0000","dateModified":"Fri, 19 Jun 2026 21:24:15 +0000","description":"A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Determinism.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Pure Function](pure-function.ini.html)
+ [Side Effect](side-effect.ini.html)
+ [Idempotent](idempotent.ini.html)
+ [Functional Programming](functional-programming.ini.html)
+ [Immutable](immutable.ini.html)
+ [Cache](cache.ini.html)
+ [Memoization](memoization.ini.html)
+ [Random](random.ini.html)
+ [Deterministic](deterministic.ini.html)
+ [Impure Function](impure-function.ini.html)
