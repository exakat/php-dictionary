# Correlation ID
A correlation ID is a unique identifier attached to a request or event so that all related operations across multiple services or log entries can be linked together.

In a distributed system, a single user action may trigger calls to several microservices, each writing their own logs. Without a shared identifier, reconstructing the full lifecycle of that request requires matching timestamps and guessing at relationships. By generating a ``UUID`` at the entry point, API gateway, queue consumer, CLI command, and forwarding it in every outbound call and log line, all related activity shares the same correlation ID and can be retrieved as a group.

Correlation IDs are typically propagated through HTTP headers, e.g. ``X-Correlation-ID`` or ``X-Request-ID``, or as metadata in message queue payloads. Middleware or a centralized logger injects the value at the boundary and makes it available throughout the request lifecycle, often via a PSR-3 logger context or a dependency injection container.

A correlation ID is not secret and is not a security token. Its sole purpose is observability.
```php
<?php

    use Ramsey\Uuid\Uuid;

    // At the entry point (e.g. a middleware)
    $correlationId = $_SERVER['HTTP_X_CORRELATION_ID'] ?? Uuid::uuid4()->toString();

    // Forward it to downstream services
    $client->request('POST', $url, [
        'headers' => ['X-Correlation-ID' => $correlationId],
    ]);

    // Include it in every log line
    $logger->info('Order placed', ['correlation_id' => $correlationId]);

?>
```

## See Also

+ [W3C Trace Context](https://www.w3.org/TR/trace-context/)

Related : [Universally Unique IDentifier (UUID)](Universally Unique IDentifier (UUID)), [Distributed Tracing](Distributed Tracing), [Distributed Systems](Distributed Systems), [Microservice](Microservice), [Log](Log), [Unique Identifier](Unique Identifier), [Idempotent](Idempotent)
