# Time To Live (TTL)
Time To Live, abbreviated TTL, is a value that defines how long a piece of data remains valid before it expires and must be refreshed or discarded. It is expressed in seconds in most contexts.

TTL appears across many layers of a PHP application: cache entries like Redis, Memcached, APCu, etc., DNS records, HTTP cache headers such as ``Cache-Control: max-age``, JSON Web Tokens, session lifetimes, and idempotency key storage.

A short TTL reduces stale data at the cost of more frequent recomputation or re-fetching. A long TTL improves performance but risks serving outdated information.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ttl.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ttl.ini.html","name":"Time To Live (TTL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 10:05:24 +0000","dateModified":"Wed, 01 Jul 2026 10:05:24 +0000","description":"Time To Live, abbreviated TTL, is a value that defines how long a piece of data remains valid before it expires and must be refreshed or discarded","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Time To Live (TTL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Time_to_live)**
## Related

+ [Cache](cache.ini.html)
+ [Idempotent](idempotent.ini.html)
+ [Session](session.ini.html)
+ [JSON Web Token (JWT)](jwt.ini.html)
+ [HTTP Headers](http-header.ini.html)
+ [Domain Name System (DNS)](dns.ini.html)
+ [Memoization](memoization.ini.html)
+ [Cache Stampede](cache-stampede.ini.html)
+ [CDN](cdn.ini.html)
+ [Deduplication](deduplication.ini.html)
+ [Replay](replay.ini.html)
