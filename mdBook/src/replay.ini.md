# Replay
A replay is the act of returning a previously stored result to a repeated request without re-executing the underlying operation. When a client retries a request that already succeeded, the server recognises the repeat via an idempotency key or fingerprint and replays the original response directly from cache.

Replay differs from a fresh response: the operation is not run again, no side effects are triggered, and the returned data is identical to the first response. A response header such as ``Idempotency-Replayed: true`` is often used to signal to the client that it received a cached replay rather than a live result.

The concept also applies in event sourcing, where replaying a stream of past events reconstructs application state.
Related : [Idempotent](Idempotent), [Cache](Cache), [Retry](Retry), [Deduplication](Deduplication), [Fingerprint](Fingerprint), [Time To Live (TTL)](Time To Live (TTL)), [Event Sourcing](Event Sourcing), [HTTP Headers](HTTP Headers)
