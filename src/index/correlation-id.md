# Correlation ID
A correlation ID is a unique identifier attached to a request or event so that all related operations across multiple services or log entries can be linked together.

In a distributed system, a single user action may trigger calls to several microservices, each writing their own logs. Without a shared identifier, reconstructing the full lifecycle of that request requires matching timestamps and guessing at relationships. By generating a ``UUID`` at the entry point, API gateway, queue consumer, CLI command, and forwarding it in every outbound call and log line, all related activity shares the same correlation ID and can be retrieved as a group.

Correlation IDs are typically propagated through HTTP headers, e.g. ``X-Correlation-ID`` or ``X-Request-ID``, or as metadata in message queue payloads. Middleware or a centralized logger injects the value at the boundary and makes it available throughout the request lifecycle, often via a PSR-3 logger context or a dependency injection container.

A correlation ID is not secret and is not a security token. Its sole purpose is observability.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/correlation-id.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/correlation-id.html","name":"Correlation ID","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:26:17 +0000","dateModified":"Mon, 20 Jul 2026 08:26:17 +0000","description":"A correlation ID is a unique identifier attached to a request or event so that all related operations across multiple services or log entries can be linked together","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/correlation-id.html"]}],"alternateName":["request-id"],"keywords":["concept","string"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uuid.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-tracing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-systems.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/log.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unique-identifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Tracing_(software)"},{"@type":"CreativeWork","name":"W3C Trace Context","url":"https:\/\/www.w3.org\/TR\/trace-context\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"correlation-id"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Tracing_(software))**
## See Also

+ [W3C Trace Context](https://www.w3.org/TR/trace-context/)

## Related

+ [Universally Unique IDentifier (UUID)](uuid.html)
+ [Distributed Tracing](distributed-tracing.html)
+ [Distributed Systems](distributed-systems.html)
+ [Microservice](microservice.html)
+ [Log](log.html)
+ [Unique Identifier](unique-identifier.html)
+ [Idempotent](idempotent.html)

## Related packages

+ [ramsey/uuid](https://packagist.org/packages/ramsey/uuid)
