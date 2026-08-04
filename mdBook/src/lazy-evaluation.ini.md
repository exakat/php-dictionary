# Lazy Evaluation
Lazy evaluation is an evaluation strategy in which an expression's value is not computed until it is actually needed, and, once computed, is often cached so it is never recomputed. Haskell evaluates every expression this way by default: a list can be infinite, because only the elements actually consumed are ever produced.

This is stronger than lazy iteration: it applies to any expression, including function arguments and let-bindings, not only to sequences produced one step at a time.

PHP is strictly, eagerly evaluated everywhere except in a few specific opt-in constructs. ``Generator`` functions built with ``yield`` produce values lazily, one at a time, on demand, and short-circuiting operators such as ``&&``, ``||``, and ``??`` skip evaluating their right-hand side when the outcome is already known. Outside of these, every argument, every array element, and every expression is fully evaluated as soon as control reaches it; there is no general, opt-out mechanism to defer an arbitrary computation until its result is read.
```php
<?php

    // Lazy, but only because it is explicitly written as a generator.
    function naturals(): Generator {
        $n = 1;
        while (true) {
            yield $n++;
        }
    }
    
    foreach (naturals() as $n) {
        if ($n > 5) break;
        echo $n, ' ';
    }

?>
```

## See Also

+ [Lazy Evaluation in PHP: Real‑World Memory Savings with Generators](https://dev.to/phpner/lazy-evaluation-in-php-how-generators-and-iterators-save-memory-and-speed-up-code-3529)

Related : [Generator](Generator), [Yield](Yield), [Lazy Loading](Lazy Loading), [Lazy Objects](Lazy Objects), [Range Type](Range Type)
