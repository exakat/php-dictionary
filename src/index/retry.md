# Retry
A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response.

Retry strategies differ in how they space repeated attempts: immediate retry, fixed delay, or exponential backoff, often combined with jitter to avoid thundering herd problems. A maximum attempt count or deadline prevents infinite loops.

Because retries re-send the same request, the server-side operation must be idempotent to avoid unintended side effects such as duplicate charges or duplicate records. Idempotency keys are a common mechanism for making retried requests safe on the server side.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html","name":"Retry","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 06:52:17 +0000","dateModified":"Tue, 04 Aug 2026 06:52:17 +0000","description":"A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Retry.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"retry"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Exponential_backoff)**
## Related

+ [Idempotent](idempotent.html)
+ [Circuit Breaker](circuit-breaker.html)
+ [Webhook](webhook.html)
+ [Deduplication](deduplication.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Reliability](reliability.html)
+ [Error Handling](error-handling.html)
+ [Queue](queue.html)
+ [Cascading Failure](cascading-failure.html)
+ [Replay](replay.html)
+ [Resilience](resilience.html)
+ [Worker](worker.html)
