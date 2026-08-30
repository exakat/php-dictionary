---
type: "concept"
title: "Replay"
description: "A replay is the act of returning a previously stored result to a repeated request without re-executing the underlying operation."
resource: "https://en.wikipedia.org/wiki/Idempotence"
tags: ["concept", "architecture"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Replay

A replay is the act of returning a previously stored result to a repeated request without re-executing the underlying operation. When a client retries a request that already succeeded, the server recognises the repeat via an idempotency key or fingerprint and replays the original response directly from cache.

Replay differs from a fresh response: the operation is not run again, no side effects are triggered, and the returned data is identical to the first response. A response header such as ``Idempotency-Replayed: true`` is often used to signal to the client that it received a cached replay rather than a live result.

The concept also applies in event sourcing, where replaying a stream of past events reconstructs application state.

## Documentation
- [https://en.wikipedia.org/wiki/Idempotence](https://en.wikipedia.org/wiki/Idempotence)

## See Also
- [Event Sourcing](https://martinfowler.com/eaaDev/EventSourcing.html)
- [Idempotent Receiver](https://www.enterpriseintegrationpatterns.com/patterns/messaging/IdempotentReceiver.html)

## Related
- [Idempotent](/features/idempotent.md)
- [Cache](/features/cache.md)
- [Retry](/features/retry.md)
- [Deduplication](/features/deduplication.md)
- [Fingerprint](/features/fingerprint.md)
- [Time To Live (TTL)](/features/ttl.md)
- [Event Sourcing](/features/event-sourcing.md)
- [HTTP Headers](/features/http-header.md)

