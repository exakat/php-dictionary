# Deadline
A deadline is an absolute point in time by which an entire unit of work, potentially spanning several retries and several downstream calls, must finish, as opposed to a timeout, which bounds a single call. Where a timeout answers 'how long may this one attempt take', a deadline answers 'when must all of this be done, no matter how many attempts or hops it takes to get there'.

A deadline is set once, near the entry point of a request, for example a controller, and is then propagated down through every layer that makes further calls: a service, a repository, an HTTP client, a retry loop. Each layer computes the time remaining and uses it to size its own timeout, and to decide whether it is even worth attempting another retry: once ``now() > deadline``, the operation is abandoned and reported as failed, rather than retried again with whatever time-bounded budget the next layer would otherwise allow. This prevents death by a thousand retries, where several layers each retry independently, and their retries multiply into a response time far larger than any individual timeout would suggest.

PHP has no built-in deadline primitive comparable to Go's ``context.Context`` or gRPC deadlines: applications propagate a deadline by hand, typically as a timestamp carried in a request-scoped object, in Laravel's ``Context`` facade, or as an extra argument threaded through the call chain, and subtract elapsed time from it before each downstream call or retry attempt.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deadline.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deadline.html","name":"Deadline","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:36:26 +0000","dateModified":"Sun, 16 Aug 2026 07:36:26 +0000","description":"A deadline is an absolute point in time by which an entire unit of work, potentially spanning several retries and several downstream calls, must finish, as opposed to a timeout, which bounds a single call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deadline.html"]}],"alternateName":["deadline-propagation"],"keywords":["architecture","reliability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timeout.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backoff.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading-failure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/sre.google\/sre-book\/addressing-cascading-failures\/"},{"@type":"CreativeWork","name":"Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads","url":"https:\/\/medium.com\/@mohamadshahkhajeh\/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"deadline"}]}]}</script>
```php
<?php

    function withDeadline(callable $operation, float $deadline): mixed {
        $remaining = $deadline - microtime(true);
        if ($remaining <= 0) {
            throw new \RuntimeException('Deadline already exceeded');
        }
        return $operation($remaining); // pass the remaining budget down
    }

    $deadline = microtime(true) + 2.0; // 2 seconds for the whole operation
    withDeadline(
        fn ($budget) => $client->request('GET', $url, ['timeout' => $budget]),
        $deadline
    );

?>
```

**[Documentation](https://sre.google/sre-book/addressing-cascading-failures/)**
## See Also

+ [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)

## Related

+ [Timeout](timeout.html)
+ [Retry](retry.html)
+ [Backoff](backoff.html)
+ [Resilience](resilience.html)
+ [Cascading Failure](cascading-failure.html)
+ [Circuit Breaker](circuit-breaker.html)
