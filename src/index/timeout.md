# Timeout
A timeout is a maximum duration allowed for an operation, typically network I/O such as a database query, an HTTP request, or a socket read, before it is aborted and treated as a failure instead of being left to block indefinitely. Without a timeout, a single slow or unresponsive dependency can hold a worker, a thread, or an event loop tick hostage, exhausting the pool and taking down the whole application even though the failure originated in one dependency.

Most HTTP clients distinguish several kinds of timeout: a connect timeout, bounding how long establishing the TCP/TLS connection may take, and a read, or total, timeout, bounding how long the client waits for the response once the connection is open. Good defaults are set from the dependency's observed in 95 or 99 percentile latency, not from a guess, and are revisited as that latency drifts.

Timeouts are configured differently depending on the layer: the ``default_socket_timeout`` directive and the ``timeout`` stream context option affect native stream wrappers such as ``http://`` and ``fopen()``; cURL exposes ``CURLOPT_CONNECTTIMEOUT`` and ``CURLOPT_TIMEOUT``; Guzzle and the Symfony ``HttpClient`` expose ``connect_timeout``/``timeout``, ``connectTimeout()``/``timeout()`` in Laravel's HTTP client, as first-class options; and ``set_time_limit()`` bounds the whole script rather than a single call.

A timeout only bounds one call. When an operation is retried, or spans several downstream calls, the sum of their timeouts can still exceed what the caller is willing to wait for; that broader, end-to-end budget is a deadline.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timeout.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timeout.html","name":"Timeout","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:14:41 +0000","dateModified":"Wed, 19 Aug 2026 08:14:41 +0000","description":"A timeout is a maximum duration allowed for an operation, typically network I\/O such as a database query, an HTTP request, or a socket read, before it is aborted and treated as a failure instead of being left to block indefinitely","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timeout.html"]}],"alternateName":["connection-timeout","read-timeout"],"keywords":["architecture","reliability","performance"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deadline.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backoff.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bulkhead.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-http.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/curl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/availability.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.set-time-limit.php"},{"@type":"CreativeWork","name":"Guzzle: Request Options - timeouts","url":"https:\/\/docs.guzzlephp.org\/en\/stable\/request-options.html#connect-timeout"},{"@type":"CreativeWork","name":"Symfony HttpClient: timeouts","url":"https:\/\/symfony.com\/doc\/current\/http_client.html#timeouts"},{"@type":"CreativeWork","name":"Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads","url":"https:\/\/medium.com\/@mohamadshahkhajeh\/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"timeout"}]}]}</script>
```php
<?php

    // Guzzle: connect + total timeout, in seconds
    $client = new \GuzzleHttp\Client([
        'connect_timeout' => 0.3, // 300 ms to establish the connection
        'timeout'         => 1.5, // 1.5 s for the whole request
    ]);

    // Symfony HttpClient
    $client = HttpClient::create([
        'timeout'      => 1.5, // wait time for a response chunk
        'max_duration' => 1.5, // hard cap on the whole request
    ]);

?>
```

**[Documentation](https://www.php.net/manual/en/function.set-time-limit.php)**
## See Also

+ [Guzzle: Request Options - timeouts](https://docs.guzzlephp.org/en/stable/request-options.html#connect-timeout)
+ [Symfony HttpClient: timeouts](https://symfony.com/doc/current/http_client.html#timeouts)
+ [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)

## Related

+ [Resilience](resilience.html)
+ [Deadline](deadline.html)
+ [Retry](retry.html)
+ [Backoff](backoff.html)
+ [Circuit Breaker](circuit-breaker.html)
+ [Bulkhead](bulkhead.html)
+ [http://](wrapper-http.html)
+ [Client URL (CURL)](curl.html)
+ [Availability](availability.html)

## Related packages

+ [guzzlehttp/guzzle](https://packagist.org/packages/guzzlehttp/guzzle)
+ [symfony/http-client](https://packagist.org/packages/symfony/http-client)
