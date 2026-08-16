# Resilience
Resilience is the ability of a system to absorb failures and disturbances and continue providing acceptable service, or recover quickly when a failure does occur. A resilient system degrades gracefully rather than failing completely.

Resilience is achieved through a combination of patterns: redundancy, with multiple instances, fault isolation, so that failures don't cascade, retries with exponential backoff, when transient failures are retried intelligently, circuit breakers, to stop hammering a failing service, timeouts, that prevent indefinite blocking, fallbacks, which serve cached or degraded content, and graceful degradation, which disable non-critical features when dependencies are unavailable.

Resilience patterns are applied at the HTTP client level, for example Guzzle retry middleware, the queue level, for example dead-letter queues and retry policies, the cache level, for example serve stale on cache miss, and the infrastructure level, for example load balancing, health checks and auto-scaling.

Resilience is distinct from reliability, which is never failing, and availability, which is always being up. A resilient system is not necessarily always available, but it recovers quickly and limits the blast radius of failures.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html","name":"Resilience","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 09:22:34 +0000","dateModified":"Fri, 14 Aug 2026 09:22:34 +0000","description":"Resilience is the ability of a system to absorb failures and disturbances and continue providing acceptable service, or recover quickly when a failure does occur","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Resilience.html"]}],"alternateName":["resiliency"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fault-isolation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-systems.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/availability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reliability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monitoring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timeout.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deadline.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jitter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bulkhead.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaos-engineering.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stale-while-revalidate.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backoff.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading-failure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/connection-pool.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallback.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Resilience_(engineering_and_construction)"},{"@type":"CreativeWork","name":"Building a Resilient and Scalable PHP Backend: Practical Strategies","url":"https:\/\/yusufbiberoglu.medium.com\/building-a-resilient-and-scalable-php-backend-practical-strategies-212381ffd9a6"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"resilience"}]}]}</script>
```php
<?php

    // Retry with exponential backoff using Guzzle middleware
    use GuzzleHttp\Client;
    use GuzzleHttp\HandlerStack;
    use GuzzleHttp\Middleware;
    use GuzzleHttp\Psr7\Request;
    use GuzzleHttp\Psr7\Response;
    use GuzzleHttp\Exception\ConnectException;
    
    $stack = HandlerStack::create();
    $stack->push(Middleware::retry(
        decider: function (int $retries, Request $req, ?Response $res, ?\Throwable $e): bool {
            return $retries < 3 && ($e instanceof ConnectException || ($res && $res->getStatusCode() >= 500));
        },
        delay: fn(int $retries): int => (int) (100 * 2 ** $retries), // 100ms, 200ms, 400ms
    ));
    
    $client = new Client(['handler' => $stack, 'timeout' => 5.0]);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Resilience_(engineering_and_construction))**
## See Also

+ [Building a Resilient and Scalable PHP Backend: Practical Strategies](https://yusufbiberoglu.medium.com/building-a-resilient-and-scalable-php-backend-practical-strategies-212381ffd9a6)

## Related

+ [Fault Isolation](fault-isolation.html)
+ [Circuit Breaker](circuit-breaker.html)
+ [Distributed Systems](distributed-systems.html)
+ [Availability](availability.html)
+ [Reliability](reliability.html)
+ [Retry](retry.html)
+ [Monitoring](monitoring.html)
+ [Timeout](timeout.html)
+ [Deadline](deadline.html)
+ [Jitter](jitter.html)
+ [Bulkhead](bulkhead.html)
+ [Chaos Engineering](chaos-engineering.html)
+ [Stale-While-Revalidate](stale-while-revalidate.html)
+ [Backoff](backoff.html)
+ [Cascading Failure](cascading-failure.html)
+ [Connection Pool](connection-pool.html)
+ [Fallback](fallback.html)
