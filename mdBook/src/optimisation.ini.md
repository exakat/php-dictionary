# Optimisation
Optimisation is the act of refactoring code to reduce the amount of resources used during execution. Optimisation may target time, as faster execution, memory, as using less of it, or specific resources, such as speeding up recalculations, or reducing the time to reach a result.

Optimisation is called micro-optimisation when the resulting code is both measurably optimized, and in the end, not significant for a specific purpose.
```php
<?php

// slow code
for($i = 0; $i < count($array); ++$i) {
    doSomething($i);
}

// speed improvement of over 50% of the loop
$nb = count($array);
for($i = 0; $i < $nb; ++$i) {
    doSomething($i);
}

?>
```

## See Also

+ [Optimize Your PHP Code: 8 Functions You Need for Efficient Table Handling](https://sensiolabs.com/blog/2025/optimize-your-php-code-8-functions-you-need-for-efficient-table-handling)

Related : [Performance](Performance), [Memoization](Memoization), [Micro-optimisation](Micro-optimisation)
