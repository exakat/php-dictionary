---
type: "PHP Feature"
title: "Deadline"
description: "A deadline, and the act of carrying it down through the call chain, deadline propagation, is an absolute point in time by which an entire unit of work, potentially spanning several retries and several downstream calls, must finish, as opposed to a timeout, which bounds a single call."
resource: "https://sre.google/sre-book/addressing-cascading-failures/"
tags: ["architecture", "reliability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Deadline

A deadline, and the act of carrying it down through the call chain, deadline propagation, is an absolute point in time by which an entire unit of work, potentially spanning several retries and several downstream calls, must finish, as opposed to a timeout, which bounds a single call. Where a timeout answers 'how long may this one attempt take', a deadline answers 'when must all of this be done, no matter how many attempts or hops it takes to get there'.

A deadline is set once, near the entry point of a request, for example a controller, and is then propagated down through every layer that makes further calls: a service, a repository, an HTTP client, a retry loop. Each layer computes the time remaining and uses it to size its own timeout, and to decide whether it is even worth attempting another retry: once ``now() > deadline``, the operation is abandoned and reported as failed, rather than retried again with whatever time-bounded budget the next layer would otherwise allow. This prevents death by a thousand retries, where several layers each retry independently, and their retries multiply into a response time far larger than any individual timeout would suggest.

PHP has no built-in deadline primitive comparable to Go's ``context.Context`` or gRPC deadlines: applications propagate a deadline by hand, typically as a timestamp carried in a request-scoped object, in Laravel's ``Context`` facade, or as an extra argument threaded through the call chain, and subtract elapsed time from it before each downstream call or retry attempt.

```php
<?php

    function withDeadline(callable $operation, float $deadline): mixed {
        $remaining = $deadline - microtime(true);
        if ($remaining <= 0) {
            throw new \RuntimeException('Deadline already exceeded');
        }
        return $operation($remaining); // pass the remaining budget down
    }

    $deadline = microtime(true) + 2.0; // 2 seconds for the whole operation
    withDeadline(
        fn ($budget) => $client->request('GET', $url, ['timeout' => $budget]),
        $deadline
    );

?>
```

## Documentation
- [https://sre.google/sre-book/addressing-cascading-failures/](https://sre.google/sre-book/addressing-cascading-failures/)

## See Also
- [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)

## Related
- [Timeout](/features/timeout.md)
- [Retry](/features/retry.md)
- [Backoff](/features/backoff.md)
- [Resilience](/features/resilience.md)
- [Cascading Failure](/features/cascading-failure.md)
- [Circuit Breaker](/features/circuit-breaker.md)

