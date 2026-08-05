# Resilience
Resilience is the ability of a system to absorb failures and disturbances and continue providing acceptable service, or recover quickly when a failure does occur. A resilient system degrades gracefully rather than failing completely.

Resilience is achieved through a combination of patterns: redundancy, with multiple instances, fault isolation, so that failures don't cascade, retries with exponential backoff, when transient failures are retried intelligently, circuit breakers, to stop hammering a failing service, timeouts, that prevent indefinite blocking, fallbacks, which serve cached or degraded content, and graceful degradation, which disable non-critical features when dependencies are unavailable.

Resilience patterns are applied at the HTTP client level, for example Guzzle retry middleware, the queue level, for example dead-letter queues and retry policies, the cache level, for example serve stale on cache miss, and the infrastructure level, for example load balancing, health checks and auto-scaling.

Resilience is distinct from reliability, which is never failing, and availability, which is always being up. A resilient system is not necessarily always available, but it recovers quickly and limits the blast radius of failures.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/resilience.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/resilience.ini.html","name":"Resilience","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 04:46:54 +0000","dateModified":"Tue, 07 Jul 2026 04:46:54 +0000","description":"Resilience is the ability of a system to absorb failures and disturbances and continue providing acceptable service, or recover quickly when a failure does occur","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Resilience.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Fault Isolation](fault-isolation.ini.html)
+ [Circuit Breaker](circuit-breaker.ini.html)
+ [Distributed Systems](distributed-systems.ini.html)
+ [Availability](availability.ini.html)
+ [Reliability](reliability.ini.html)
+ [Retry](retry.ini.html)
+ [Monitoring](monitoring.ini.html)
