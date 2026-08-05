# Replay
A replay is the act of returning a previously stored result to a repeated request without re-executing the underlying operation. When a client retries a request that already succeeded, the server recognises the repeat via an idempotency key or fingerprint and replays the original response directly from cache.

Replay differs from a fresh response: the operation is not run again, no side effects are triggered, and the returned data is identical to the first response. A response header such as ``Idempotency-Replayed: true`` is often used to signal to the client that it received a cached replay rather than a live result.

The concept also applies in event sourcing, where replaying a stream of past events reconstructs application state.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/replay.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/replay.ini.html","name":"Replay","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:30:19 +0000","dateModified":"Fri, 19 Jun 2026 21:30:19 +0000","description":"A replay is the act of returning a previously stored result to a repeated request without re-executing the underlying operation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Replay.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Idempotence)**
## Related

+ [Idempotent](idempotent.ini.html)
+ [Cache](cache.ini.html)
+ [Retry](retry.ini.html)
+ [Deduplication](deduplication.ini.html)
+ [Fingerprint](fingerprint.ini.html)
+ [Time To Live (TTL)](ttl.ini.html)
+ [Event Sourcing](event-sourcing.ini.html)
+ [HTTP Headers](http-header.ini.html)
