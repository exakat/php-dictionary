# Time To Live (TTL)
Time To Live, abbreviated TTL, is a value that defines how long a piece of data remains valid before it expires and must be refreshed or discarded. It is expressed in seconds in most contexts.

TTL appears across many layers of a PHP application: cache entries like Redis, Memcached, APCu, etc., DNS records, HTTP cache headers such as ``Cache-Control: max-age``, JSON Web Tokens, session lifetimes, and idempotency key storage.

A short TTL reduces stale data at the cost of more frequent recomputation or re-fetching. A long TTL improves performance but risks serving outdated information.
Related : [Cache](Cache), [Idempotent](Idempotent), [Session](Session), [JSON Web Token (JWT)](JSON Web Token (JWT)), [HTTP Headers](HTTP Headers), [Domain Name System (DNS)](Domain Name System (DNS)), [Memoization](Memoization), [Cache Stampede](Cache Stampede), [CDN](CDN), [Deduplication](Deduplication), [Replay](Replay)
