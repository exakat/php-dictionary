# Deduplication
Deduplication is the process of detecting and discarding duplicate occurrences of an operation, message, or record. It ensures that even when the same input arrives more than once, it is processed only once.

Deduplication is related to, but distinct from, idempotency. An idempotent operation can safely be executed multiple times because repeated executions have no additional effect. Deduplication prevents the repeated execution from happening at all, typically by tracking a unique identifier and short-circuiting on a match.

In applications, deduplication is commonly applied to webhook deliveries, queue message processing, and form submissions, using a cache or database table to record seen identifiers within a retention window.
Related : [Idempotent](Idempotent), [Fingerprint](Fingerprint), [Webhook](Webhook), [Retry](Retry), [Cache](Cache), [Time To Live (TTL)](Time To Live (TTL)), [Queue](Queue), [Duplicate](Duplicate)
