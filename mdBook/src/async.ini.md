# Async
The ``async`` keyword is used in programming, and especially in languages like JavaScript, Python, and C#, to define a function that runs asynchronously. It means that it can perform operations without blocking the rest of the program.

PHP does not support a notion of ``async``. The closest feature is called ``fiber`` or parallel processing, yet it is quite different from asynchronous. Generators also provide a pseudo-asynchronous processing.
```php
<?php

    // Starting another process for parallel processing
    shell_exec('php other.php &');

?>
```

## See Also

+ [TrueAsync](https://github.com/true-async)

Related : [Fibers](Fibers), [Generator](Generator), [Asynchronous](Asynchronous), [Fibers](Fibers), [Spiral](Spiral), [Thread](Thread), [Blocking Wait](Blocking Wait), [Stealth Generator](Stealth Generator), [C10K](C10K), [Edge Triggered](Edge Triggered), [Fire-and-forget](Fire-and-forget), [Non-blocking](Non-blocking), [One-shot](One-shot), [AMP (Asynchronous Markup Protocol)](AMP (Asynchronous Markup Protocol)), [Channel](Channel), [Green Thread](Green Thread), [ReactPHP](ReactPHP)
