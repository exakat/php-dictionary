# Retry
A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response.

Retry strategies differ in how they space repeated attempts: immediate retry, fixed delay, or exponential backoff, often combined with jitter to avoid thundering herd problems. A maximum attempt count or deadline prevents infinite loops.

Because retries re-send the same request, the server-side operation must be idempotent to avoid unintended side effects such as duplicate charges or duplicate records. Idempotency keys are a common mechanism for making retried requests safe on the server side.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/retry.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/retry.html","name":"Retry","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 06:52:17 +0000","dateModified":"Tue, 04 Aug 2026 06:52:17 +0000","description":"A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Retry.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Exponential_backoff)**
## Related

+ [Idempotent](idempotent.ini.html)
+ [Circuit Breaker](circuit-breaker.ini.html)
+ [Webhook](webhook.ini.html)
+ [Deduplication](deduplication.ini.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.ini.html)
+ [Reliability](reliability.ini.html)
+ [Error Handling](error-handling.ini.html)
+ [Queue](queue.ini.html)
+ [Cascading Failure](cascading-failure.ini.html)
+ [Replay](replay.ini.html)
+ [Resilience](resilience.ini.html)
+ [Worker](worker.ini.html)
