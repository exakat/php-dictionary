# Universally Unique IDentifier (UUID)
UUID is a Universally Unique IDentifier. It is an identifier that anyone can generate, and that has a near certainty that it identify something unique, in the universe.

UUID are in contrast to classic integer ids, such as auto-increment primary keys, which usually start at 0, and are incrementally generated. Not only this means connecting to a database, and querying the right table, but also means that there are multiple usage of 1, in each of these tables.

UUID are a standard defined in RFC 9562, which supersedes RFC 4122. The standard defines several versions, each with different generation strategies:

+ UUIDv1: time-based using the MAC address of the generating machine.
+ UUIDv3: deterministic, derived from a namespace and a name using MD5.
+ UUIDv4: randomly generated using 122 random bits; the most widely used version.
+ UUIDv5: deterministic, derived from a namespace and a name using SHA-1.
+ UUIDv6: reordered time-based UUID, optimised for database index locality.
+ UUIDv7: contains a 48-bit Unix timestamp in milliseconds followed by random bits, making it time-sortable and suitable for use as a database primary key.

UUIDv7 is the recommended version for new applications that use UUID as a database primary key, as its time-ordered structure avoids the B-tree page splits caused by random UUIDv4 values.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/uuid.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/uuid.ini.html","name":"Universally Unique IDentifier (UUID)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:10:08 +0000","dateModified":"Wed, 08 Jul 2026 16:10:08 +0000","description":"UUID is a Universally Unique IDentifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Universally Unique IDentifier (UUID).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php

123e4567-e89b-12d3-a456-426614174000

```

**[Documentation](https://en.wikipedia.org/wiki/Universally_unique_identifier)**
## See Also

+ [Introducing ramsey/uuid](https://benramsey.com/blog/2016/04/ramsey-uuid/)
+ [RFC 9562 - Universally Unique IDentifiers (UUIDs)](https://www.rfc-editor.org/rfc/rfc9562)

## Related

+ [Identifier](identifier.ini.html)
+ [Identity](identity.ini.html)
+ [Unique Identifier](unique-identifier.ini.html)
+ [Correlation ID](correlation-id.ini.html)
+ [Idempotent](idempotent.ini.html)
+ [Index For SQL](index-sql.ini.html)
+ [Sqids](sqids.ini.html)
+ [Universally Unique Lexicographically Sortable Identifier (ULID)](ulid.ini.html)

## Related packages

+ [ramsey/uuid](https://packagist.org/packages/ramsey/uuid)
+ [symfony/uid](https://packagist.org/packages/symfony/uid)
