# Bulkhead
The bulkhead pattern isolates the resources used to call different dependencies, so that a slowdown or failure in one dependency cannot exhaust the resources needed to keep serving requests to healthy ones. The name is a nautical metaphor: a ship's hull is divided into watertight compartments, so a breach in one compartment floods only that section instead of sinking the whole ship.

In practice, a bulkhead caps how many concurrent calls, connections, or workers may be in flight for a given dependency, using a semaphore, a dedicated connection pool, or a separate queue/worker group per dependency. When the cap is reached, further calls are rejected immediately, or shed to a fallback, rather than queued indefinitely behind an already-struggling dependency; this keeps one slow API or database from starving the resources that other, unrelated calls also depend on.

Bulkheads are often deployed alongside circuit breakers: the circuit breaker stops calling a dependency once it is clearly failing, while the bulkhead limits how much damage that dependency can do to the rest of the application while it is still being called.

PHP's traditional one-request-per-process model already gives some bulkhead-like isolation between requests, but within a long-running process, such as a queue worker, a Swoole/RoadRunner server, or a script fanning out to several APIs, resources must be bounded explicitly: a semaphore-like construct such as a ``Swoole\Coroutine\Channel`` with a fixed capacity, a Redis counter with a TTL acting as a distributed semaphore, or a dedicated HTTP client with its own connection pool per dependency.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bulkhead.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bulkhead.html","name":"Bulkhead","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:35:51 +0000","dateModified":"Sun, 16 Aug 2026 07:35:51 +0000","description":"The bulkhead pattern isolates the resources used to call different dependencies, so that a slowdown or failure in one dependency cannot exhaust the resources needed to keep serving requests to healthy ones","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bulkhead.html"]}],"alternateName":["bulkhead-pattern"],"keywords":["architecture","reliability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fault-isolation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/connection-pool.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rate-limit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading-failure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coroutine.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/learn.microsoft.com\/en-us\/azure\/architecture\/patterns\/bulkhead"},{"@type":"CreativeWork","name":"Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads","url":"https:\/\/medium.com\/@mohamadshahkhajeh\/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"bulkhead"}]}]}</script>
```php
<?php

    // Bulkhead via a Swoole coroutine channel used as a counting semaphore
    $semaphore = new \Swoole\Coroutine\Channel(20); // capacity: 20 concurrent calls
    for ($i = 0; $i < 20; $i++) {
        $semaphore->push(true);
    }

    $semaphore->pop(); // acquire a slot (blocks if the pool is saturated)
    try {
        $response = callDependency();
    } finally {
        $semaphore->push(true); // release the slot
    }

?>
```

**[Documentation](https://learn.microsoft.com/en-us/azure/architecture/patterns/bulkhead)**
## See Also

+ [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)

## Related

+ [Circuit Breaker](circuit-breaker.html)
+ [Resilience](resilience.html)
+ [Fault Isolation](fault-isolation.html)
+ [Connection Pool](connection-pool.html)
+ [Rate Limiting](rate-limit.html)
+ [Cascading Failure](cascading-failure.html)
+ [Coroutine](coroutine.html)
