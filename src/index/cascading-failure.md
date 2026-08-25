# Cascading Failure
A cascading failure is a failure that starts in one component and propagates to dependent components, each overload or error triggering the next, until a localized problem becomes a system-wide outage. A single slow downstream service, for example, can exhaust the connection pool of every caller waiting on it, taking down services that had nothing wrong with them.

Cascading failures are common in tightly coupled, or distributed, systems: a database that slows down backs up application servers, which back up the load balancer, which starts timing out healthy requests too. The same pattern shows up in data pipelines: a single bad record, or an unhandled locale code, can silently drop, or corrupt, every dependent row downstream, so a small conversion bug is amplified into the majority of a migration failing without a loud error.

Cascading failures are mitigated with the same patterns as fault isolation: circuit breakers, that stop calling a failing dependency; timeouts, that prevent one slow call from blocking a thread pool indefinitely; bulkheads, that isolate resource pools between consumers; and retries with backoff, so a recovering service is not immediately overwhelmed again.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading-failure.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading-failure.html","name":"Cascading Failure","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 09:22:34 +0000","dateModified":"Fri, 14 Aug 2026 09:22:34 +0000","description":"A cascading failure is a failure that starts in one component and propagates to dependent components, each overload or error triggering the next, until a localized problem becomes a system-wide outage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading-failure.html"]}],"alternateName":["cascading-failures"],"keywords":["architecture","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fault-isolation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-systems.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/referential-integrity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreign-key.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backoff.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bulkhead.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deadline.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jitter.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Cascading_failure"},{"@type":"CreativeWork","name":"CircuitBreaker","url":"https:\/\/martinfowler.com\/bliki\/CircuitBreaker.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cascading-failure"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Cascading_failure)**
## See Also

+ [CircuitBreaker](https://martinfowler.com/bliki/CircuitBreaker.html)

## Related

+ [Cascading](cascading.html)
+ [Fault Isolation](fault-isolation.html)
+ [Circuit Breaker](circuit-breaker.html)
+ [Resilience](resilience.html)
+ [Distributed Systems](distributed-systems.html)
+ [Referential Integrity](referential-integrity.html)
+ [Foreign Key](foreign-key.html)
+ [Retry](retry.html)
+ [Backoff](backoff.html)
+ [Bulkhead](bulkhead.html)
+ [Deadline](deadline.html)
+ [Jitter](jitter.html)
