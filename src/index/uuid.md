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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uuid.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uuid.html","name":"Universally Unique IDentifier (UUID)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:33:01 +0000","dateModified":"Sat, 08 Aug 2026 14:33:01 +0000","description":"UUID is a Universally Unique IDentifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uuid.html"]}],"keywords":["concept","string","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unique-identifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/correlation-id.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-sql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqids.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ulid.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Universally_unique_identifier"},{"@type":"CreativeWork","name":"Introducing ramsey\/uuid","url":"https:\/\/benramsey.com\/blog\/2016\/04\/ramsey-uuid\/"},{"@type":"CreativeWork","name":"RFC 9562 - Universally Unique IDentifiers (UUIDs)","url":"https:\/\/www.rfc-editor.org\/rfc\/rfc9562"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"uuid"}]}]}</script>
```php

123e4567-e89b-12d3-a456-426614174000

```

**[Documentation](https://en.wikipedia.org/wiki/Universally_unique_identifier)**
## See Also

+ [Introducing ramsey/uuid](https://benramsey.com/blog/2016/04/ramsey-uuid/)
+ [RFC 9562 - Universally Unique IDentifiers (UUIDs)](https://www.rfc-editor.org/rfc/rfc9562)

## Related

+ [Identifier](identifier.html)
+ [Identity](identity.html)
+ [Unique Identifier](unique-identifier.html)
+ [Correlation ID](correlation-id.html)
+ [Idempotent](idempotent.html)
+ [Index For SQL](index-sql.html)
+ [Sqids](sqids.html)
+ [Universally Unique Lexicographically Sortable Identifier (ULID)](ulid.html)

## Related packages

+ [ramsey/uuid](https://packagist.org/packages/ramsey/uuid)
+ [symfony/uid](https://packagist.org/packages/symfony/uid)
