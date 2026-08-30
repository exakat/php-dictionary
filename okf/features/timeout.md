---
type: "PHP Feature"
title: "Timeout"
description: "A timeout is a maximum duration allowed for an operation, typically network I/O such as a database query, an HTTP request, or a socket read, before it is aborted and treated as a failure instead of being left to block indefinitely."
resource: "https://www.php.net/manual/en/function.set-time-limit.php"
tags: ["architecture", "reliability", "performance"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Timeout

A timeout is a maximum duration allowed for an operation, typically network I/O such as a database query, an HTTP request, or a socket read, before it is aborted and treated as a failure instead of being left to block indefinitely. Without a timeout, a single slow or unresponsive dependency can hold a worker, a thread, or an event loop tick hostage, exhausting the pool and taking down the whole application even though the failure originated in one dependency.

Most HTTP clients distinguish several kinds of timeout: a connect timeout, bounding how long establishing the TCP/TLS connection may take, and a read, or total, timeout, bounding how long the client waits for the response once the connection is open. Good defaults are set from the dependency's observed in 95 or 99 percentile latency, not from a guess, and are revisited as that latency drifts.

Timeouts are configured differently depending on the layer: the ``default_socket_timeout`` directive and the ``timeout`` stream context option affect native stream wrappers such as ``http://`` and ``fopen()``; cURL exposes ``CURLOPT_CONNECTTIMEOUT`` and ``CURLOPT_TIMEOUT``; Guzzle and the Symfony ``HttpClient`` expose ``connect_timeout``/``timeout``, ``connectTimeout()``/``timeout()`` in Laravel's HTTP client, as first-class options; and ``set_time_limit()`` bounds the whole script rather than a single call.

A timeout only bounds one call. When an operation is retried, or spans several downstream calls, the sum of their timeouts can still exceed what the caller is willing to wait for; that broader, end-to-end budget is a deadline.

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

## Documentation
- [https://www.php.net/manual/en/function.set-time-limit.php](https://www.php.net/manual/en/function.set-time-limit.php)

## See Also
- [Guzzle: Request Options - timeouts](https://docs.guzzlephp.org/en/stable/request-options.html#connect-timeout)
- [Symfony HttpClient: timeouts](https://symfony.com/doc/current/http_client.html#timeouts)
- [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)

## Related
- [Resilience](/features/resilience.md)
- [Deadline](/features/deadline.md)
- [Retry](/features/retry.md)
- [Backoff](/features/backoff.md)
- [Circuit Breaker](/features/circuit-breaker.md)
- [Bulkhead](/features/bulkhead.md)
- [http://](/features/wrapper-http.md)
- [Client URL (CURL)](/features/curl.md)
- [Availability](/features/availability.md)

## Details
- Packagist: [guzzlehttp/guzzle](https://packagist.org/packages/guzzlehttp/guzzle)
- Packagist: [symfony/http-client](https://packagist.org/packages/symfony/http-client)
- Extension: ext-curl

