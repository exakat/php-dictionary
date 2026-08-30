---
type: "unsupported"
title: "Async"
description: "The ``async`` keyword is used in programming, and especially in languages like JavaScript, Python, and C#, to define a function that runs asynchronously."
resource: "https://en.wikipedia.org/wiki/Async/await"
tags: ["unsupported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Async

The ``async`` keyword is used in programming, and especially in languages like JavaScript, Python, and C#, to define a function that runs asynchronously. It means that it can perform operations without blocking the rest of the program.

PHP does not support a notion of ``async``. The closest feature is called ``fiber`` or parallel processing, yet it is quite different from asynchronous. Generators also provide a pseudo-asynchronous processing.

```php
<?php

    // Starting another process for parallel processing
    shell_exec('php other.php &');

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Async/await](https://en.wikipedia.org/wiki/Async/await)

## See Also
- [TrueAsync](https://github.com/true-async)

## Related
- [Generator](/features/generator.md)
- [Asynchronous](/features/asynchronous.md)
- [Fibers](/features/fibers.md)
- [Spiral](/features/spiral.md)
- [Thread](/features/thread.md)
- [Blocking Wait](/features/blocking-wait.md)
- [Stealth Generator](/features/stealth-generator.md)
- [C10K](/features/c10k.md)
- [Edge Triggered](/features/edge-triggered.md)
- [Fire-and-forget](/features/fire-and-forget.md)
- [Non-blocking](/features/non-blocking.md)
- [One-shot](/features/one-shot.md)
- [AMP (Asynchronous Markup Protocol)](/features/amp.md)
- [Channel](/features/channel.md)
- [Green Thread](/features/green-thread.md)
- [ReactPHP](/features/reactphp.md)

## Details
- Packagist: [amphp/amp](https://packagist.org/packages/amphp/amp)
- Extension: ext-trueasync

