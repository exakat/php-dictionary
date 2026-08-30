---
type: "concept"
title: "Sqids"
description: "Sqids, formerly known as Hashids, is an open-source library that encodes one or more non-negative integers into short, YouTube-like alphanumeric strings, and decodes them back."
resource: "https://sqids.org/php"
tags: ["concept", "string"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Sqids

Sqids, formerly known as Hashids, is an open-source library that encodes one or more non-negative integers into short, YouTube-like alphanumeric strings, and decodes them back.

The generated strings are URL-safe, avoid common profanity by design, and can use a custom alphabet and a minimum length. Sqids is not a cryptographic function: the encoding is deterministic and reversible by anyone who knows the alphabet and salt used. It is therefore suited for obfuscating sequential integer IDs in URLs to prevent enumeration, not for security-sensitive encoding.

A key difference from ``UUID`` and ``ULID`` is that Sqids encode existing integers rather than generating new identifiers. They are most useful when a database already uses auto-increment primary keys and exposing those raw integers in URLs is undesirable.

```php
<?php

    use Sqids\Sqids;

    $sqids = new Sqids();

    $id = $sqids->encode([1, 2, 3]); // e.g. 'TmhB'
    $numbers = $sqids->decode($id);  // [1, 2, 3]

    // Custom alphabet and minimum length
    $sqids = new Sqids(alphabet: 'abcdefghij', minLength: 8);
    echo $sqids->encode([42]); // e.g. 'dfidbicd'

?>
```

## Documentation
- [https://sqids.org/php](https://sqids.org/php)

## See Also
- [Sqids specification](https://sqids.org)
- [sqids/sqids on Packagist](https://packagist.org/packages/sqids/sqids)

## Related
- [Universally Unique IDentifier (UUID)](/features/uuid.md)
- [Universally Unique Lexicographically Sortable Identifier (ULID)](/features/ulid.md)
- [Unique Identifier](/features/unique-identifier.md)
- [Identifier](/features/identifier.md)
- [Obfuscation](/features/obfuscation.md)
- [Slug](/features/slug.md)

## Details
- Packagist: [sqids/sqids](https://packagist.org/packages/sqids/sqids)

