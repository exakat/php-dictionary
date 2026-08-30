---
type: "concept"
title: "Idempotent"
description: "Idempotent is said of an operation, which always yields the same result after the first call."
resource: "https://developer.mozilla.org/en-US/docs/Glossary/Idempotent"
tags: ["concept", "code architecture"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Idempotent

Idempotent is said of an operation, which always yields the same result after the first call. In other words, repeating the operation does not produce a different result beyond the initial application.

This is the case of ``strtolower()`` and ``strtoupper()``: once the string has been made lower case, resp. upper case, calling the same function again on the string will not change the result.

In distributed systems and HTTP APIs, idempotency is enforced through an idempotency key: a unique identifier, typically a ``UUID``, supplied by the client with each request. The server stores the outcome of the first request under that key and returns the cached result for any subsequent request carrying the same key, preventing duplicate side-effects such as double payments or duplicate record creation.

```php
<?php

    $string = aBC;
    
    $string1 = strtolower($string); // abc
    $string2 = strtolower($string2); // abc
    $string3 = strtolower($string3); // abc
    $string4 = strtolower($string4); // abc
    // ... 

?>
```

## Documentation
- [https://developer.mozilla.org/en-US/docs/Glossary/Idempotent](https://developer.mozilla.org/en-US/docs/Glossary/Idempotent)

## See Also
- [Idempotence](https://en.wikipedia.org/wiki/Idempotence)
- [Designing Idempotent PHP APIs for Distributed Systems](https://medium.com/tech-vibes/designing-idempotent-php-apis-for-distributed-systems-c1b52b1862b1)
- [Idempotency: What, Why and How](https://wendelladriel.com/blog/idempotency-what-why-and-how)

## Related
- [strtolower()](/features/strtolower.md)
- [Determinism](/features/determinism.md)
- [Useless](/features/useless.md)
- [Deduplication](/features/deduplication.md)
- [Universally Unique IDentifier (UUID)](/features/uuid.md)
- [Unique Identifier](/features/unique-identifier.md)
- [Fingerprint](/features/fingerprint.md)
- [HTTP Method](/features/http-method.md)
- [Replay](/features/replay.md)
- [Retry](/features/retry.md)
- [Time To Live (TTL)](/features/ttl.md)
- [Webhook](/features/webhook.md)
- [Compensation Logic](/features/compensation-logic.md)
- [Correlation ID](/features/correlation-id.md)
- [Source Of Truth](/features/source-of-truth.md)
- [Worker](/features/worker.md)

