# Retry
A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response.

Retry strategies differ in how they space repeated attempts: immediate retry, fixed delay, or exponential backoff, often combined with jitter to avoid thundering herd problems. A maximum attempt count or deadline prevents infinite loops.

Because retries re-send the same request, the server-side operation must be idempotent to avoid unintended side effects such as duplicate charges or duplicate records. Idempotency keys are a common mechanism for making retried requests safe on the server side.
Related : [Idempotent](Idempotent), [Circuit Breaker](Circuit Breaker), [Webhook](Webhook), [Deduplication](Deduplication), [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [Reliability](Reliability), [Error Handling](Error Handling), [Queue](Queue), [Cascading Failure](Cascading Failure), [Replay](Replay), [Resilience](Resilience), [Worker](Worker)
