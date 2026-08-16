# Jitter
Jitter is a small random variation added to a computed delay, most often the delay between retry attempts, so that independent clients do not all wake up and act at exactly the same instant.

Without jitter, every client that failed at the same moment, for example right after a dependency restarted or a deploy finished, recomputes the same exponential backoff delay and retries in lockstep, producing repeated bursts of load known as a thundering herd or retry storm; each burst can itself trigger new failures, which are then retried in a new burst, and so on. Adding randomness spreads those retries out over time and decorrelates the clients from one another.

Several jitter strategies exist, trading off predictability for effectiveness at spreading load: full jitter picks the delay as a random value between 0 and the full computed backoff, for example ``rand(0, base * 2 ** attempt)``, which is simple and effective at breaking synchronization, at the cost of some retries firing sooner than the backoff alone would suggest; equal jitter keeps half of the computed backoff fixed and randomizes only the other half, guaranteeing a minimum delay while still adding randomness; and decorrelated jitter randomizes each delay based on the previous delay rather than solely on the attempt count, further reducing correlation across many retrying clients.

In PHP, jitter is typically added by hand around ``usleep()`` or ``sleep()`` calls, using ``random_int()`` for the random component, or provided by retry libraries and by Guzzle/Laravel retry middleware that accept a delay callback.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jitter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jitter.html","name":"Jitter","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:36:55 +0000","dateModified":"Sun, 16 Aug 2026 07:36:55 +0000","description":"Jitter is a small random variation added to a computed delay, most often the delay between retry attempts, so that independent clients do not all wake up and act at exactly the same instant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Jitter.html"]}],"alternateName":["full-jitter"],"keywords":["architecture","reliability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backoff.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading-failure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rate-limit.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/aws.amazon.com\/blogs\/architecture\/exponential-backoff-and-jitter\/"},{"@type":"CreativeWork","name":"Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads","url":"https:\/\/medium.com\/@mohamadshahkhajeh\/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"jitter"}]}]}</script>
```php
<?php

    // Full jitter: sleep = rand(0, base * 2^attempt)
    function jitteredDelayMs(int $attempt, int $baseMs = 250): int {
        return random_int(0, $baseMs * (2 ** $attempt));
    }

    usleep(jitteredDelayMs($attempt) * 1000);

?>
```

**[Documentation](https://aws.amazon.com/blogs/architecture/exponential-backoff-and-jitter/)**
## See Also

+ [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)

## Related

+ [Backoff](backoff.html)
+ [Retry](retry.html)
+ [Resilience](resilience.html)
+ [Circuit Breaker](circuit-breaker.html)
+ [Cascading Failure](cascading-failure.html)
+ [Queue](queue.html)
+ [Rate Limiting](rate-limit.html)

## Related packages

+ [stechstudio/backoff](https://packagist.org/packages/stechstudio/backoff)
