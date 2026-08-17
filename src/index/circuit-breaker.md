# Circuit Breaker
A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems. It prevents cascading failures by monitoring the calls to external services, like APIs, databases, or microservices. When a service fails repeatedly, the circuit breaker triggers and stops further calls to that service for a predefined period, allowing the target system to recover, and the local service to report the unavailability without producing incorrect values. 

After the timeout, it may allow a limited number of test calls to see if the service has recovered.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html","name":"Circuit Breaker","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 09:22:34 +0000","dateModified":"Fri, 14 Aug 2026 09:22:34 +0000","description":"A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Circuit Breaker.html"]}],"keywords":["architecture"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/feature-flag.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/downtime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/availability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/qos.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reliability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sla.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fault-isolation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backoff.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timeout.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bulkhead.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaos-engineering.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading-failure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deadline.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jitter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stale-while-revalidate.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Circuit_breaker_design_pattern"},{"@type":"CreativeWork","name":"CircuitBreaker","url":"https:\/\/martinfowler.com\/bliki\/CircuitBreaker.html"},{"@type":"CreativeWork","name":"Circuit Breaker Pattern in PHP","url":"https:\/\/laravel-news.com\/circuit-breaker-pattern-in-php"},{"@type":"CreativeWork","name":"PHP Circuit Breaker Pattern \u2013 Build Resilient, Fault-Tolerant Systems","url":"https:\/\/nullodyssey.dev\/blog\/php-circuit-breaker-pattern\/"},{"@type":"CreativeWork","name":"Implementing the Circuit Breaker Pattern in PHP","url":"https:\/\/medium.com\/@edouard.courty\/implementing-the-circuit-breaker-pattern-in-php-5123b8cca271"},{"@type":"CreativeWork","name":"Simple Circuit Breaker pattern implementation in PHP","url":"https:\/\/medium.com\/@dotcom.software\/circuit-breaker-pattern-in-php-10ee1b35e14d"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"circuit-breaker"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Circuit_breaker_design_pattern)**
## See Also

+ [CircuitBreaker](https://martinfowler.com/bliki/CircuitBreaker.html)
+ [Circuit Breaker Pattern in PHP](https://laravel-news.com/circuit-breaker-pattern-in-php)
+ [PHP Circuit Breaker Pattern – Build Resilient, Fault-Tolerant Systems](https://nullodyssey.dev/blog/php-circuit-breaker-pattern/)
+ [Implementing the Circuit Breaker Pattern in PHP](https://medium.com/@edouard.courty/implementing-the-circuit-breaker-pattern-in-php-5123b8cca271)
+ [Simple Circuit Breaker pattern implementation in PHP](https://medium.com/@dotcom.software/circuit-breaker-pattern-in-php-10ee1b35e14d)

## Related

+ [Feature Flag](feature-flag.html)
+ [Downtime](downtime.html)
+ [Availability](availability.html)
+ [Quality of Service (QoS)](qos.html)
+ [Reliability](reliability.html)
+ [Service Level Agreement (SLA)](sla.html)
+ [Canary](canary.html)
+ [Fault Isolation](fault-isolation.html)
+ [Resilience](resilience.html)
+ [Retry](retry.html)
+ [Backoff](backoff.html)
+ [Timeout](timeout.html)
+ [Bulkhead](bulkhead.html)
+ [Chaos Engineering](chaos-engineering.html)
+ [Cascading Failure](cascading-failure.html)
+ [Deadline](deadline.html)
+ [Jitter](jitter.html)
+ [Stale-While-Revalidate](stale-while-revalidate.html)

## Related packages

+ [ackintosh/ganesha](https://packagist.org/packages/ackintosh/ganesha)
+ [prestashop/circuit-breaker](https://packagist.org/packages/prestashop/circuit-breaker)
+ [ejsmont-artur/php-circuit-breaker](https://packagist.org/packages/ejsmont-artur/php-circuit-breaker)
