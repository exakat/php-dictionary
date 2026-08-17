# Backoff
Backoff is a strategy that increases the delay between successive retries of a failed operation, instead of retrying immediately or at a fixed interval.

The most common form is exponential backoff, where the delay grows exponentially with each failed attempt, for example doubling after every failure: 1 second, 2 seconds, 4 seconds, 8 seconds, and so on, usually capped at a maximum delay so the wait does not grow unbounded. The rationale is that a failure is often caused by a temporarily overloaded or unavailable service, and hammering it with immediate retries only makes the problem worse, while a growing delay gives the service time to recover before the next attempt.

Backoff is almost always combined with jitter, a small random variation added to the computed delay. Without jitter, many clients that failed at the same time, for instance after a service restart, would all retry in lockstep at exactly the same moments, producing repeated bursts of load known as the thundering herd problem. Adding randomness spreads those retries out over time instead. Backoff is also typically paired with a maximum number of attempts, or a deadline, after which the operation is abandoned and reported as failed, rather than retried forever.

Backoff logic is commonly implemented by hand around HTTP client calls, or provided by libraries built on top of Guzzle middleware, message queue workers, or job retry mechanisms in frameworks such as Laravel, where a job's ``backoff()`` method or attribute controls the delay before each re-attempt.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backoff.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backoff.html","name":"Backoff","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 09:19:16 +0000","dateModified":"Fri, 14 Aug 2026 09:19:16 +0000","description":"Backoff is a strategy that increases the delay between successive retries of a failed operation, instead of retrying immediately or at a fixed interval","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Backoff.html"]}],"alternateName":["exponential-backoff"],"keywords":["architecture","reliability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jitter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rate-limit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading-failure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/worker.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Exponential_backoff"},{"@type":"CreativeWork","name":"Exponential Backoff And Jitter","url":"https:\/\/aws.amazon.com\/blogs\/architecture\/exponential-backoff-and-jitter\/"},{"@type":"CreativeWork","name":"Robust API communication with exponential backoff","url":"https:\/\/blog.sznapka.pl\/robust-api-communication-with-exponential-backoff\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"backoff"}]}]}</script>
```php
<?php

    function withBackoff(callable $operation, int $maxAttempts = 5): mixed {
        $attempt = 0;
        while (true) {
            try {
                return $operation();
            } catch (\Throwable $e) {
                $attempt++;
                if ($attempt >= $maxAttempts) {
                    throw $e;
                }
                $delay = (2 ** $attempt) + random_int(0, 1000) / 1000;
                usleep((int) ($delay * 1_000_000));
            }
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Exponential_backoff)**
## See Also

+ [Exponential Backoff And Jitter](https://aws.amazon.com/blogs/architecture/exponential-backoff-and-jitter/)
+ [Robust API communication with exponential backoff](https://blog.sznapka.pl/robust-api-communication-with-exponential-backoff/)

## Related

+ [Retry](retry.html)
+ [Jitter](jitter.html)
+ [Circuit Breaker](circuit-breaker.html)
+ [Idempotent](idempotent.html)
+ [Rate Limiting](rate-limit.html)
+ [Resilience](resilience.html)
+ [Cascading Failure](cascading-failure.html)
+ [Queue](queue.html)
+ [Worker](worker.html)

## Related packages

+ [stechstudio/backoff](https://packagist.org/packages/stechstudio/backoff)
+ [caseyamcl/guzzle_retry_middleware](https://packagist.org/packages/caseyamcl/guzzle_retry_middleware)
+ [crowdstar/exponential-backoff](https://packagist.org/packages/crowdstar/exponential-backoff)
