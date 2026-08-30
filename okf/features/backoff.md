---
type: "PHP Feature"
title: "Backoff"
description: "Backoff is a strategy that increases the delay between successive retries of a failed operation, instead of retrying immediately or at a fixed interval."
resource: "https://en.wikipedia.org/wiki/Exponential_backoff"
tags: ["architecture", "reliability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Backoff

Backoff is a strategy that increases the delay between successive retries of a failed operation, instead of retrying immediately or at a fixed interval.

The most common form is exponential backoff, where the delay grows exponentially with each failed attempt, for example doubling after every failure: 1 second, 2 seconds, 4 seconds, 8 seconds, and so on, usually capped at a maximum delay so the wait does not grow unbounded. The rationale is that a failure is often caused by a temporarily overloaded or unavailable service, and hammering it with immediate retries only makes the problem worse, while a growing delay gives the service time to recover before the next attempt.

Backoff is almost always combined with jitter, a small random variation added to the computed delay. Without jitter, many clients that failed at the same time, for instance after a service restart, would all retry in lockstep at exactly the same moments, producing repeated bursts of load known as the thundering herd problem. Adding randomness spreads those retries out over time instead. Backoff is also typically paired with a maximum number of attempts, or a deadline, after which the operation is abandoned and reported as failed, rather than retried forever.

Backoff logic is commonly implemented by hand around HTTP client calls, or provided by libraries built on top of Guzzle middleware, message queue workers, or job retry mechanisms in frameworks such as Laravel, where a job's ``backoff()`` method or attribute controls the delay before each re-attempt.

```php
<?php

    function withBackoff(callable $operation, int $maxAttempts = 5): mixed {
        $attempt = 0;
        while (true) {
            try {
                return $operation();
            } catch (\Throwable $e) {
                $attempt++;
                if ($attempt >= $maxAttempts) {
                    throw $e;
                }
                $delay = (2 ** $attempt) + random_int(0, 1000) / 1000;
                usleep((int) ($delay * 1_000_000));
            }
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Exponential_backoff](https://en.wikipedia.org/wiki/Exponential_backoff)

## See Also
- [Exponential Backoff And Jitter](https://aws.amazon.com/blogs/architecture/exponential-backoff-and-jitter/)
- [Robust API communication with exponential backoff](https://blog.sznapka.pl/robust-api-communication-with-exponential-backoff/)

## Related
- [Retry](/features/retry.md)
- [Jitter](/features/jitter.md)
- [Circuit Breaker](/features/circuit-breaker.md)
- [Idempotent](/features/idempotent.md)
- [Rate Limiting](/features/rate-limit.md)
- [Resilience](/features/resilience.md)
- [Cascading Failure](/features/cascading-failure.md)
- [Queue](/features/queue.md)
- [Worker](/features/worker.md)

## Details
- Packagist: [stechstudio/backoff](https://packagist.org/packages/stechstudio/backoff)
- Packagist: [caseyamcl/guzzle_retry_middleware](https://packagist.org/packages/caseyamcl/guzzle_retry_middleware)
- Packagist: [crowdstar/exponential-backoff](https://packagist.org/packages/crowdstar/exponential-backoff)

