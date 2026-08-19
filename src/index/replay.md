# Replay
A replay is the act of returning a previously stored result to a repeated request without re-executing the underlying operation. When a client retries a request that already succeeded, the server recognises the repeat via an idempotency key or fingerprint and replays the original response directly from cache.

Replay differs from a fresh response: the operation is not run again, no side effects are triggered, and the returned data is identical to the first response. A response header such as ``Idempotency-Replayed: true`` is often used to signal to the client that it received a cached replay rather than a live result.

The concept also applies in event sourcing, where replaying a stream of past events reconstructs application state.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/replay.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/replay.html","name":"Replay","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:05:54 +0000","dateModified":"Fri, 14 Aug 2026 08:05:54 +0000","description":"A replay is the act of returning a previously stored result to a repeated request without re-executing the underlying operation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Replay.html"]}],"alternateName":["response-replay"],"keywords":["concept","architecture"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deduplication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fingerprint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ttl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-sourcing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Idempotence"},{"@type":"CreativeWork","name":"Event Sourcing","url":"https:\/\/martinfowler.com\/eaaDev\/EventSourcing.html"},{"@type":"CreativeWork","name":"Idempotent Receiver","url":"https:\/\/www.enterpriseintegrationpatterns.com\/patterns\/messaging\/IdempotentReceiver.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"replay"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Idempotence)**
## See Also

+ [Event Sourcing](https://martinfowler.com/eaaDev/EventSourcing.html)
+ [Idempotent Receiver](https://www.enterpriseintegrationpatterns.com/patterns/messaging/IdempotentReceiver.html)

## Related

+ [Idempotent](idempotent.html)
+ [Cache](cache.html)
+ [Retry](retry.html)
+ [Deduplication](deduplication.html)
+ [Fingerprint](fingerprint.html)
+ [Time To Live (TTL)](ttl.html)
+ [Event Sourcing](event-sourcing.html)
+ [HTTP Headers](http-header.html)
