# Fault Isolation
Fault isolation, also called failure isolation, is the design property that limits the impact, or blast radius, of a failure to the component or service where it originates, preventing it from cascading to other parts of the system.

In a tightly coupled system , such as monolith, distributed monolith, a failure in one subsystem can bring down the entire application. Fault isolation ensures that the failure of a payment service, for example, does not prevent users from browsing or adding items to their cart.

Common patterns that implement fault isolation: the circuit breaker, that stops sending requests to a failing service, the bulkhead which limits the resources a single consumer can use, preventing it from exhausting shared pools, and timeouts, that prevents a slow downstream from blocking threads indefinitely.

Microservices architecture promotes fault isolation by deploying each service independently. However, it requires explicit design: synchronous call chains without timeouts or circuit breakers produce the opposite: a single slow service that blocks all callers.

Fault isolation is implemented via timeout configuration on HTTP clients, circuit breaker libraries, and queue-based decoupling of non-critical side-effects.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fault-isolation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fault-isolation.html","name":"Fault Isolation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 10:49:30 +0000","dateModified":"Sun, 30 Aug 2026 10:49:30 +0000","description":"Fault isolation, also called failure isolation, is the design property that limits the impact, or blast radius, of a failure to the component or service where it originates, preventing it from cascading to other parts of the system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fault-isolation.html"]}],"alternateName":["failure-isolation","blast-radius"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-monolith.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-systems.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coupling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading-failure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bulkhead.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timeout.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/connection-pool.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Fault_isolation"},{"@type":"CreativeWork","name":"PHP Monitoring: Using PHP Observability Tools to Improve Web Apps","url":"https:\/\/www.zend.com\/blog\/php-monitoring"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fault-isolation"}]}]}</script>
```php
<?php

    // Circuit breaker with a library (e.g., Ganesha or php-circuit-breaker)
    $circuitBreaker = Ackintosh\Ganesha\Builder::withRateStrategy()
        ->timeWindow(30)
        ->failureRateThreshold(50)
        ->build();
    
    if ($circuitBreaker->isAvailable('payment-service')) {
        try {
            $result = $paymentClient->charge($order);
            $circuitBreaker->success('payment-service');
        } catch (Exception $e) {
            $circuitBreaker->failure('payment-service');
            // Degrade gracefully: queue for retry, show user a message
            $retryQueue->push(new RetryPayment($order->id));
        }
    } else {
        // Circuit is open: skip the call entirely, don't block the user
        $retryQueue->push(new RetryPayment($order->id));
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Fault_isolation)**
## See Also

+ [PHP Monitoring: Using PHP Observability Tools to Improve Web Apps](https://www.zend.com/blog/php-monitoring)

## Related

+ [Circuit Breaker](circuit-breaker.html)
+ [Resilience](resilience.html)
+ [Microservice](microservice.html)
+ [Distributed Monolith](distributed-monolith.html)
+ [Distributed Systems](distributed-systems.html)
+ [Coupling](coupling.html)
+ [Cascading Failure](cascading-failure.html)
+ [Bulkhead](bulkhead.html)
+ [Timeout](timeout.html)
+ [Connection Pool](connection-pool.html)

## Related packages

+ [ackintosh/ganesha](https://packagist.org/packages/ackintosh/ganesha)
