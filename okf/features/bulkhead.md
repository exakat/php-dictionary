---
type: "PHP Feature"
title: "Bulkhead"
description: "The bulkhead pattern isolates the resources used to call different dependencies, so that a slowdown or failure in one dependency cannot exhaust the resources needed to keep serving requests to healthy ones."
resource: "https://learn.microsoft.com/en-us/azure/architecture/patterns/bulkhead"
tags: ["architecture", "reliability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Bulkhead

The bulkhead pattern isolates the resources used to call different dependencies, so that a slowdown or failure in one dependency cannot exhaust the resources needed to keep serving requests to healthy ones. The name is a nautical metaphor: a ship's hull is divided into watertight compartments, so a breach in one compartment floods only that section instead of sinking the whole ship.

In practice, a bulkhead caps how many concurrent calls, connections, or workers may be in flight for a given dependency, using a semaphore, a dedicated connection pool, or a separate queue/worker group per dependency. When the cap is reached, further calls are rejected immediately, or shed to a fallback, rather than queued indefinitely behind an already-struggling dependency; this keeps one slow API or database from starving the resources that other, unrelated calls also depend on.

Bulkheads are often deployed alongside circuit breakers: the circuit breaker stops calling a dependency once it is clearly failing, while the bulkhead limits how much damage that dependency can do to the rest of the application while it is still being called.

PHP's traditional one-request-per-process model already gives some bulkhead-like isolation between requests, but within a long-running process, such as a queue worker, a Swoole/RoadRunner server, or a script fanning out to several APIs, resources must be bounded explicitly: a semaphore-like construct such as a ``Swoole\Coroutine\Channel`` with a fixed capacity, a Redis counter with a TTL acting as a distributed semaphore, or a dedicated HTTP client with its own connection pool per dependency.

```php
<?php

    // Bulkhead via a Swoole coroutine channel used as a counting semaphore
    $semaphore = new \Swoole\Coroutine\Channel(20); // capacity: 20 concurrent calls
    for ($i = 0; $i < 20; $i++) {
        $semaphore->push(true);
    }

    $semaphore->pop(); // acquire a slot (blocks if the pool is saturated)
    try {
        $response = callDependency();
    } finally {
        $semaphore->push(true); // release the slot
    }

?>
```

## Documentation
- [https://learn.microsoft.com/en-us/azure/architecture/patterns/bulkhead](https://learn.microsoft.com/en-us/azure/architecture/patterns/bulkhead)

## See Also
- [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)

## Related
- [Circuit Breaker](/features/circuit-breaker.md)
- [Resilience](/features/resilience.md)
- [Fault Isolation](/features/fault-isolation.md)
- [Connection Pool](/features/connection-pool.md)
- [Rate Limiting](/features/rate-limit.md)
- [Cascading Failure](/features/cascading-failure.md)
- [Coroutine](/features/coroutine.md)

## Details
- Extension: ext-swoole

