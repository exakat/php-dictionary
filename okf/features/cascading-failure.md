---
type: "concept"
title: "Cascading Failure"
description: "A cascading failure is a failure that starts in one component and propagates to dependent components, each overload or error triggering the next, until a localized problem becomes a system-wide outage."
resource: "https://en.wikipedia.org/wiki/Cascading_failure"
tags: ["architecture", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Cascading Failure

A cascading failure is a failure that starts in one component and propagates to dependent components, each overload or error triggering the next, until a localized problem becomes a system-wide outage. A single slow downstream service, for example, can exhaust the connection pool of every caller waiting on it, taking down services that had nothing wrong with them.

Cascading failures are common in tightly coupled, or distributed, systems: a database that slows down backs up application servers, which back up the load balancer, which starts timing out healthy requests too. The same pattern shows up in data pipelines: a single bad record, or an unhandled locale code, can silently drop, or corrupt, every dependent row downstream, so a small conversion bug is amplified into the majority of a migration failing without a loud error.

Cascading failures are mitigated with the same patterns as fault isolation: circuit breakers, that stop calling a failing dependency; timeouts, that prevent one slow call from blocking a thread pool indefinitely; bulkheads, that isolate resource pools between consumers; and retries with backoff, so a recovering service is not immediately overwhelmed again.

## Documentation
- [https://en.wikipedia.org/wiki/Cascading_failure](https://en.wikipedia.org/wiki/Cascading_failure)

## See Also
- [CircuitBreaker](https://martinfowler.com/bliki/CircuitBreaker.html)

## Related
- [Cascading](/features/cascading.md)
- [Fault Isolation](/features/fault-isolation.md)
- [Circuit Breaker](/features/circuit-breaker.md)
- [Resilience](/features/resilience.md)
- [Distributed Systems](/features/distributed-systems.md)
- [Referential Integrity](/features/referential-integrity.md)
- [Foreign Key](/features/foreign-key.md)
- [Retry](/features/retry.md)
- [Backoff](/features/backoff.md)
- [Bulkhead](/features/bulkhead.md)
- [Deadline](/features/deadline.md)
- [Jitter](/features/jitter.md)

