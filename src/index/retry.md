# Retry
A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response.

Retry strategies differ in how they space repeated attempts: immediate retry, fixed delay, or exponential backoff, often combined with jitter to avoid thundering herd problems. A maximum attempt count or deadline prevents infinite loops.

Because retries re-send the same request, the server-side operation must be idempotent to avoid unintended side effects such as duplicate charges or duplicate records. Idempotency keys are a common mechanism for making retried requests safe on the server side.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html","name":"Retry","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:24:52 +0000","dateModified":"Tue, 18 Aug 2026 05:24:52 +0000","description":"A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"]}],"alternateName":["retry-logic"],"keywords":["architecture","reliability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backoff.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jitter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/webhook.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deduplication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reliability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-handling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading-failure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/replay.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/worker.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Exponential_backoff"},{"@type":"CreativeWork","name":"Exponential Backoff And Jitter","url":"https:\/\/aws.amazon.com\/blogs\/architecture\/exponential-backoff-and-jitter\/"},{"@type":"CreativeWork","name":"Building Resilient Systems: The Power of Retry Mechanisms with Exponential Backoff","url":"https:\/\/medium.com\/@eshikashah2001\/building-resilient-systems-the-power-of-retry-mechanisms-with-exponential-backoff-60bebad6a57b"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"retry"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Exponential_backoff)**
## See Also

+ [Exponential Backoff And Jitter](https://aws.amazon.com/blogs/architecture/exponential-backoff-and-jitter/)
+ [Building Resilient Systems: The Power of Retry Mechanisms with Exponential Backoff](https://medium.com/@eshikashah2001/building-resilient-systems-the-power-of-retry-mechanisms-with-exponential-backoff-60bebad6a57b)

## Related

+ [Idempotent](idempotent.html)
+ [Backoff](backoff.html)
+ [Jitter](jitter.html)
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
