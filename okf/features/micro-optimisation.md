---
type: "PHP Feature"
title: "Micro-optimisation"
description: "A micro-optimisation is a piece of code that performs better than another, yet brings only a small gain of performance."
resource: "https://en.wiktionary.org/wiki/micro-optimization"
tags: ["performance", "micro"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Micro-optimisation

A micro-optimisation is a piece of code that performs better than another, yet brings only a small gain of performance.

Micro-optimisation should be done only for highly constrained systems, or applications that deliver a high number of hits in short times: usually, it takes one to ten million usages for the gain to be visible.

Yet, micro-optimisations may be valuable in the long run, or as a good practice.

It is often pointless to discuss the micro-optimisation. It is a do or don't, and should raise a consensus, or be left alone.

```php
<?php

    // this is faster than calling 3 times echo
    echo 1, 2, 3;
    
    // This is slower, yet it doesn't speed up the process a lot
    echo 1;
    echo 2;
    echo 3;

?>
```

## Documentation
- [https://en.wiktionary.org/wiki/micro-optimization](https://en.wiktionary.org/wiki/micro-optimization)

## See Also
- [Stop Using These 5 Outdated Optimization Tricks in PHP](https://medium.com/@vlreshet/stop-using-these-5-outdated-optimization-tricks-in-php-d2d616fd83fa)
- [What are compiler optimized internal PHP functions and should you import them via use statement?](https://tideways.com/profiler/blog/compiler-optimized-php-functions/)
- [Data-Driven PHP 7 Performance Optimization Methods](https://siit.co/blog/data-driven-php-7-performance-optimization-methods/15727)

## Related
- [Performance](/features/performance.md)
- [Optimisation](/features/optimisation.md)
- [Benchmarking](/features/benchmarking.md)
- [PHP Profiler](/features/profiler.md)
- [implode()](/features/implode.md)
- [Latency](/features/latency.md)
- [Premature Optimization](/features/premature-optimization.md)
- [Profiling](/features/profiling.md)
- [XHProf](/features/xhprof.md)

