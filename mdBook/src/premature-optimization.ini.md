# Premature Optimization
Premature optimization is the practice of optimizing code before profiling has identified it as a bottleneck. The term originates from Donald Knuth's 1974 paper: ''We should forget about small efficiencies, say about 97% of the time: premature optimization is the root of all evil.''

The full quote is often truncated. Knuth's point is not that performance is unimportant, but that optimizing the wrong part of the code wastes time and introduces complexity with no measurable benefit. The 97% refers to micro-optimisations on non-critical paths.

Premature optimization manifests as: avoiding readable constructs in favour of micro-benchmarked alternatives, using ``isset()`` instead of ``array_key_exists()`` everywhere for a perceived speed gain, avoiding abstractions like interfaces, DI container, for hypothetical performance reasons, inlining queries to avoid method calls, or caching results that are computed rarely.

The correct approach: write clear, maintainable code first; profile with Blackfire, Xdebug, or Tideways to find the actual bottleneck; then optimize the identified hot path with evidence.
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

## See Also

+ [Premature Optimization in PHP: Avoiding Common Pitfalls](https://softwarepatternslexicon.com/php/anti-patterns-in-php/premature-optimization/)

Related : [Optimisation](Optimisation), [Performance](Performance), [PHP Profiler](PHP Profiler), [Benchmarking](Benchmarking), [Micro-optimisation](Micro-optimisation), [Readability](Readability), [Xdebug](Xdebug), [Tideways](Tideways), [Blackfire](Blackfire)
