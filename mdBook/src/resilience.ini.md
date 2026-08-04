# Resilience
Resilience is the ability of a system to absorb failures and disturbances and continue providing acceptable service, or recover quickly when a failure does occur. A resilient system degrades gracefully rather than failing completely.

Resilience is achieved through a combination of patterns: redundancy, with multiple instances, fault isolation, so that failures don't cascade, retries with exponential backoff, when transient failures are retried intelligently, circuit breakers, to stop hammering a failing service, timeouts, that prevent indefinite blocking, fallbacks, which serve cached or degraded content, and graceful degradation, which disable non-critical features when dependencies are unavailable.

Resilience patterns are applied at the HTTP client level, for example Guzzle retry middleware, the queue level, for example dead-letter queues and retry policies, the cache level, for example serve stale on cache miss, and the infrastructure level, for example load balancing, health checks and auto-scaling.

Resilience is distinct from reliability, which is never failing, and availability, which is always being up. A resilient system is not necessarily always available, but it recovers quickly and limits the blast radius of failures.
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

## See Also

+ [Building a Resilient and Scalable PHP Backend: Practical Strategies](https://yusufbiberoglu.medium.com/building-a-resilient-and-scalable-php-backend-practical-strategies-212381ffd9a6)

Related : [Fault Isolation](Fault Isolation), [Circuit Breaker](Circuit Breaker), [Distributed Systems](Distributed Systems), [Availability](Availability), [Reliability](Reliability), [Retry](Retry), [Monitoring](Monitoring)
