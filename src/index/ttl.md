# Time To Live (TTL)
Time To Live, abbreviated TTL, is a value that defines how long a piece of data remains valid before it expires and must be refreshed or discarded. It is expressed in seconds in most contexts.

TTL appears across many layers of a PHP application: cache entries like Redis, Memcached, ``APCu``, etc., DNS records, HTTP cache headers such as ``Cache-Control: max-age``, JSON Web Tokens, session lifetimes, and idempotency key storage.

A short TTL reduces stale data at the cost of more frequent repeat of calculation or fetching. A long TTL improves performance but risks serving outdated information.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ttl.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ttl.html","name":"Time To Live (TTL)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:09:06 +0000","dateModified":"Wed, 19 Aug 2026 08:09:06 +0000","description":"Time To Live, abbreviated TTL, is a value that defines how long a piece of data remains valid before it expires and must be refreshed or discarded","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Time To Live (TTL).html"]}],"alternateName":["time-to-live","expiry"],"keywords":["concept","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jwt.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dns.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memoization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-stampede.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cdn.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deduplication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/replay.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Time_to_live"},{"@type":"CreativeWork","name":"PSR-6","url":"https:\/\/www.php-fig.org\/psr\/psr-6\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ttl"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Time_to_live)**
## See Also

+ [PSR-6](https://www.php-fig.org/psr/psr-6/)

## Related

+ [Cache](cache.html)
+ [Idempotent](idempotent.html)
+ [Session](session.html)
+ [JSON Web Token (JWT)](jwt.html)
+ [HTTP Headers](http-header.html)
+ [Domain Name System (DNS)](dns.html)
+ [Memoization](memoization.html)
+ [Cache Stampede](cache-stampede.html)
+ [CDN](cdn.html)
+ [Deduplication](deduplication.html)
+ [Replay](replay.html)
