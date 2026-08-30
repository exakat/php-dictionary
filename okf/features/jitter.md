---
type: "PHP Feature"
title: "Jitter"
description: "Jitter is a small random variation added to a computed delay, most often the delay between retry attempts, so that independent clients do not all wake up and act at exactly the same instant."
resource: "https://aws.amazon.com/blogs/architecture/exponential-backoff-and-jitter/"
tags: ["architecture", "reliability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Jitter

Jitter is a small random variation added to a computed delay, most often the delay between retry attempts, so that independent clients do not all wake up and act at exactly the same instant.

Without jitter, every client that failed at the same moment, for example right after a dependency restarted or a deploy finished, recomputes the same exponential backoff delay and retries in lockstep, producing repeated bursts of load known as a thundering herd or retry storm; each burst can itself trigger new failures, which are then retried in a new burst, and so on. Adding randomness spreads those retries out over time and decorrelates the clients from one another.

Several jitter strategies exist, trading off predictability for effectiveness at spreading load: full jitter picks the delay as a random value between 0 and the full computed backoff, for example ``rand(0, base * 2 ** attempt)``, which is simple and effective at breaking synchronization, at the cost of some retries firing sooner than the backoff alone would suggest; equal jitter keeps half of the computed backoff fixed and randomizes only the other half, guaranteeing a minimum delay while still adding randomness; and decorrelated jitter randomizes each delay based on the previous delay rather than solely on the attempt count, further reducing correlation across many retrying clients.

Jitter is typically added by hand around ``usleep()`` or ``sleep()`` calls, using ``random_int()`` for the random component, or provided by retry libraries and by Guzzle/Laravel retry middleware that accept a delay callback.

```php
<?php

    // Full jitter: sleep = rand(0, base * 2^attempt)
    function jitteredDelayMs(int $attempt, int $baseMs = 250): int {
        return random_int(0, $baseMs * (2 ** $attempt));
    }

    usleep(jitteredDelayMs($attempt) * 1000);

?>
```

## Documentation
- [https://aws.amazon.com/blogs/architecture/exponential-backoff-and-jitter/](https://aws.amazon.com/blogs/architecture/exponential-backoff-and-jitter/)

## See Also
- [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)

## Related
- [Backoff](/features/backoff.md)
- [Retry](/features/retry.md)
- [Resilience](/features/resilience.md)
- [Circuit Breaker](/features/circuit-breaker.md)
- [Cascading Failure](/features/cascading-failure.md)
- [Queue](/features/queue.md)
- [Rate Limiting](/features/rate-limit.md)

## Details
- Packagist: [stechstudio/backoff](https://packagist.org/packages/stechstudio/backoff)

