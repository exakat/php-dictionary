# Circuit Breaker
A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems. It prevents cascading failures by monitoring the calls to external services, like APIs, databases, or microservices. When a service fails repeatedly, the circuit breaker triggers and stops further calls to that service for a predefined period, allowing the target system to recover, and the local service to report the unavailability without producing incorrect values. 

After the timeout, it may allow a limited number of test calls to see if the service has recovered.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/circuit-breaker.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/circuit-breaker.html","name":"Circuit Breaker","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 14:50:43 +0000","dateModified":"Fri, 10 Jul 2026 14:50:43 +0000","description":"A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Circuit Breaker.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Circuit_breaker_design_pattern)**
## See Also

+ [CircuitBreaker](https://martinfowler.com/bliki/CircuitBreaker.html)
+ [Circuit Breaker Pattern in PHP](https://laravel-news.com/circuit-breaker-pattern-in-php)
+ [PHP Circuit Breaker Pattern – Build Resilient, Fault-Tolerant Systems](https://nullodyssey.dev/blog/php-circuit-breaker-pattern/)
+ [Implementing the Circuit Breaker Pattern in PHP](https://medium.com/@edouard.courty/implementing-the-circuit-breaker-pattern-in-php-5123b8cca271)
+ [Simple Circuit Breaker pattern implementation in PHP](https://medium.com/@dotcom.software/circuit-breaker-pattern-in-php-10ee1b35e14d)

## Related

+ [Feature Flag](feature-flag.ini.html)
+ [Downtime](downtime.ini.html)
+ [Availability](availability.ini.html)
+ [Quality of Service (QoS)](qos.ini.html)
+ [Reliability](reliability.ini.html)
+ [Service Level Agreement (SLA)](sla.ini.html)
+ [Canary](canary.ini.html)
+ [Fault Isolation](fault-isolation.ini.html)
+ [Resilience](resilience.ini.html)
+ [Retry](retry.ini.html)

## Related packages

+ [ackintosh/ganesha](https://packagist.org/packages/ackintosh/ganesha)
+ [prestashop/circuit-breaker](https://packagist.org/packages/prestashop/circuit-breaker)
+ [ejsmont-artur/php-circuit-breaker](https://packagist.org/packages/ejsmont-artur/php-circuit-breaker)
