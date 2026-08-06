# Premature Optimization
Premature optimization is the practice of optimizing code before profiling has identified it as a bottleneck. The term originates from Donald Knuth's 1974 paper: ''We should forget about small efficiencies, say about 97% of the time: premature optimization is the root of all evil.''

The full quote is often truncated. Knuth's point is not that performance is unimportant, but that optimizing the wrong part of the code wastes time and introduces complexity with no measurable benefit. The 97% refers to micro-optimisations on non-critical paths.

Premature optimization manifests as: avoiding readable constructs in favour of micro-benchmarked alternatives, using ``isset()`` instead of ``array_key_exists()`` everywhere for a perceived speed gain, avoiding abstractions like interfaces, DI container, for hypothetical performance reasons, inlining queries to avoid method calls, or caching results that are computed rarely.

The correct approach: write clear, maintainable code first; profile with Blackfire, Xdebug, or Tideways to find the actual bottleneck; then optimize the identified hot path with evidence.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/premature-optimization.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/premature-optimization.html","name":"Premature Optimization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:27:25 +0000","dateModified":"Tue, 14 Jul 2026 05:27:25 +0000","description":"Premature optimization is the practice of optimizing code before profiling has identified it as a bottleneck","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Premature Optimization.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Premature: manually inlining logic to avoid a function call overhead
    // (function call overhead is negligible; the complexity is not)
    $result = 0;
    for ($i = 0; $i < count($items); $i++) {  // also: count() inside loop is a real issue
        $result += $items[$i]['price'] * $items[$i]['qty'];
    }
    
    // Clear: readable, correct, and fast enough for 99% of cases
    $total = array_sum(array_map(
        fn($item) => $item['price'] * $item['qty'],
        $items,
    ));
    
    // Correct process: profile first
    // $ blackfire run php script.php
    // Then optimize only the functions Blackfire shows as hot spots.

?>
```

**[Documentation](https://wiki.c2.com/?PrematureOptimization)**
## See Also

+ [Premature Optimization in PHP: Avoiding Common Pitfalls](https://softwarepatternslexicon.com/php/anti-patterns-in-php/premature-optimization/)

## Related

+ [Optimisation](optimisation.ini.html)
+ [Performance](performance.ini.html)
+ [PHP Profiler](profiler.ini.html)
+ [Benchmarking](benchmarking.ini.html)
+ [Micro-optimisation](micro-optimisation.ini.html)
+ [Readability](readability.ini.html)
+ [Xdebug](xdebug.ini.html)
+ [Tideways](tideways.ini.html)
+ [Blackfire](blackfire.ini.html)
