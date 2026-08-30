---
type: "concept"
title: "Universally Unique IDentifier (UUID)"
description: "``UUID`` is a Universally Unique IDentifier."
resource: "https://en.wikipedia.org/wiki/Universally_unique_identifier"
tags: ["concept", "string", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Universally Unique IDentifier (UUID)

``UUID`` is a Universally Unique IDentifier. It is an identifier that anyone can generate, and that has a near certainty that it identifies something unique, in the universe.

``UUID``s are in contrast to classic integer ids, such as auto-increment primary keys, which usually start at 0, and are incrementally generated. Not only this means connecting to a database, and querying the right table, but also means that there are multiple usages of 1, in each of these tables.

``UUID``s are a standard defined in RFC 9562, which supersedes RFC 4122. The standard defines several versions, each with different generation strategies:

+ ``UUIDv1``: time-based using the MAC address of the generating machine.
+ ``UUIDv3``: deterministic, derived from a namespace and a name using MD5.
+ ``UUIDv4``: randomly generated using 122 random bits; the most widely used version.
+ ``UUIDv5``: deterministic, derived from a namespace and a name using ``SHA``-1.
+ ``UUIDv6``: reordered time-based UUID, optimised for database index locality.
+ ``UUIDv7``: contains a 48-bit Unix timestamp in milliseconds followed by random bits, making it time-sortable and suitable for use as a database primary key.

``UUIDv7`` is the recommended version for new applications that use UUID as a database primary key, as its time-ordered structure avoids the B-tree page splits caused by random ``UUIDv4`` values.

```php
123e4567-e89b-12d3-a456-426614174000
```

## Documentation
- [https://en.wikipedia.org/wiki/Universally_unique_identifier](https://en.wikipedia.org/wiki/Universally_unique_identifier)

## See Also
- [Introducing ramsey/uuid](https://benramsey.com/blog/2016/04/ramsey-uuid/)
- [RFC 9562 - Universally Unique IDentifiers (UUIDs)](https://www.rfc-editor.org/rfc/rfc9562)

## Related
- [Identifier](/features/identifier.md)
- [Identity](/features/identity.md)
- [Unique Identifier](/features/unique-identifier.md)
- [Correlation ID](/features/correlation-id.md)
- [Idempotent](/features/idempotent.md)
- [Index For SQL](/features/index-sql.md)
- [Sqids](/features/sqids.md)
- [Universally Unique Lexicographically Sortable Identifier (ULID)](/features/ulid.md)

## Details
- Packagist: [ramsey/uuid](https://packagist.org/packages/ramsey/uuid)
- Packagist: [symfony/uid](https://packagist.org/packages/symfony/uid)

