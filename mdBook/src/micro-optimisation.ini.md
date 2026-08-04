# Micro-optimisation
A micro-optimisation is a piece of code that performs better than another, yet brings only a small gain of performance.

Micro-optimisation should be done only for highly constraints systems, or application that deliver a high number of hits in short times: usually, it takes one to ten millions usage for the gain to be visible. 

Yet, micro-optimisations may be valuable on the long run, or as a good practice. 

It is often a pointless to discuss the micro-optimisation. It is a do or don't, and should raise a consensus, or left alone.
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

## See Also

+ [Stop Using These 5 Outdated Optimization Tricks in PHP](https://medium.com/@vlreshet/stop-using-these-5-outdated-optimization-tricks-in-php-d2d616fd83fa)
+ [What are compiler optimized internal PHP functions and should you import them via use statement?](https://tideways.com/profiler/blog/compiler-optimized-php-functions/)
+ [Data-Driven PHP 7 Performance Optimization Methods](https://siit.co/blog/data-driven-php-7-performance-optimization-methods/15727)

Related : [Performance](Performance), [Optimisation](Optimisation), [Benchmarking](Benchmarking), [PHP Profiler](PHP Profiler), [implode()](implode()), [Latency](Latency), [Premature Optimization](Premature Optimization), [Profiling](Profiling), [XHProf](XHProf)
