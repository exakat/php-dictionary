---
type: "concept"
title: "Time To Live (TTL)"
description: "Time To Live, abbreviated TTL, is a value that defines how long a piece of data remains valid before it expires and must be refreshed or discarded."
resource: "https://en.wikipedia.org/wiki/Time_to_live"
tags: ["concept", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Time To Live (TTL)

Time To Live, abbreviated TTL, is a value that defines how long a piece of data remains valid before it expires and must be refreshed or discarded. It is expressed in seconds in most contexts.

TTL appears across many layers of a PHP application: cache entries like Redis, Memcached, ``APCu``, etc., DNS records, HTTP cache headers such as ``Cache-Control: max-age``, JSON Web Tokens, session lifetimes, and idempotency key storage.

A short TTL reduces stale data at the cost of more frequent repeat of calculation or fetching. A long TTL improves performance but risks serving outdated information.

## Documentation
- [https://en.wikipedia.org/wiki/Time_to_live](https://en.wikipedia.org/wiki/Time_to_live)

## See Also
- [PSR-6](https://www.php-fig.org/psr/psr-6/)

## Related
- [Cache](/features/cache.md)
- [Idempotent](/features/idempotent.md)
- [Session](/features/session.md)
- [JSON Web Token (JWT)](/features/jwt.md)
- [HTTP Headers](/features/http-header.md)
- [Domain Name System (DNS)](/features/dns.md)
- [Memoization](/features/memoization.md)
- [Cache Stampede](/features/cache-stampede.md)
- [CDN](/features/cdn.md)
- [Deduplication](/features/deduplication.md)
- [Replay](/features/replay.md)

