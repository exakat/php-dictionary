---
type: "concept"
title: "Fingerprint"
description: "A fingerprint is a compact, deterministic identifier derived by hashing a set of attributes that together describe something uniquely."
resource: "https://en.wikipedia.org/wiki/Fingerprint_(computing)"
tags: ["concept", "security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Fingerprint

A fingerprint is a compact, deterministic identifier derived by hashing a set of attributes that together describe something uniquely. The same inputs always produce the same fingerprint; different inputs produce a different one.

In the context of HTTP request idempotency, a request fingerprint is computed from the method, route, query string, payload, and content type. It is stored alongside the idempotency key so that retried requests carrying the same key but a different payload can be detected and rejected.

More broadly, fingerprinting is used for cache keying, change detection, file integrity checks, and browser device identification.

```php
<?php

$fingerprint = hash('sha256', implode('|', [
    $request->method(),
    $request->path(),
    $request->getQueryString() ?? '',
    $request->getContent(),
    $request->header('Content-Type', ''),
]));

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Fingerprint_(computing)](https://en.wikipedia.org/wiki/Fingerprint_(computing))

## See Also
- [How to generate a browser fingerprint with PHP](https://fingerprint.com/blog/browser-fingerprint-php/)

## Related
- [hash() Function](/features/hash-function.md)
- [Idempotent](/features/idempotent.md)
- [Deduplication](/features/deduplication.md)
- [Cache](/features/cache.md)
- [Checksum](/features/checksum.md)
- [Payload](/features/payload.md)

