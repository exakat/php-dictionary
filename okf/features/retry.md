---
type: "PHP Feature"
title: "Retry"
description: "A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response."
resource: "https://en.wikipedia.org/wiki/Exponential_backoff"
tags: ["architecture", "reliability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Retry

A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response.

Retry strategies differ in how they space repeated attempts: immediate retry, fixed delay, or exponential backoff, often combined with jitter to avoid thundering herd problems. A maximum attempt count or deadline prevents infinite loops.

Because retries re-send the same request, the server-side operation must be idempotent to avoid unintended side effects such as duplicate charges or duplicate records. Idempotency keys are a common mechanism for making retried requests safe on the server side.

## Documentation
- [https://en.wikipedia.org/wiki/Exponential_backoff](https://en.wikipedia.org/wiki/Exponential_backoff)

## See Also
- [Exponential Backoff And Jitter](https://aws.amazon.com/blogs/architecture/exponential-backoff-and-jitter/)
- [Building Resilient Systems: The Power of Retry Mechanisms with Exponential Backoff](https://medium.com/@eshikashah2001/building-resilient-systems-the-power-of-retry-mechanisms-with-exponential-backoff-60bebad6a57b)

## Related
- [Idempotent](/features/idempotent.md)
- [Backoff](/features/backoff.md)
- [Jitter](/features/jitter.md)
- [Circuit Breaker](/features/circuit-breaker.md)
- [Webhook](/features/webhook.md)
- [Deduplication](/features/deduplication.md)
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [Reliability](/features/reliability.md)
- [Error Handling](/features/error-handling.md)
- [Queue](/features/queue.md)
- [Cascading Failure](/features/cascading-failure.md)
- [Replay](/features/replay.md)
- [Resilience](/features/resilience.md)
- [Worker](/features/worker.md)

