# Distributed Tracing
Distributed tracing tracks a single request as it flows through multiple services in a distributed system. Each service records a span and propagates a trace context to downstream services via HTTP headers or message metadata. All spans sharing the same trace ID are assembled into a trace: a complete picture of the request's journey.

Without distributed tracing, debugging latency or errors in a microservices system means correlating logs across dozens of services manually. Distributed tracing provides a visual timeline, the waterfall diagram, showing which service took how long, where errors occurred, and how services depend on each other.

The W3C Trace Context standard, the ``traceparent`` header, defines the propagation format. OpenTelemetry is the vendor-neutral SDK and API for instrumenting PHP applications. Jaeger and Zipkin are common open-source backends; commercial alternatives include Datadog APM, New Relic, and Honeycomb.

OpenTelemetry provides a native SDK for manual and automatic instrumentation. The ``ext-opentelemetry`` extension enables zero-code instrumentation for frameworks and HTTP clients.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-tracing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-tracing.html","name":"Distributed Tracing","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:38:47 +0000","dateModified":"Sat, 11 Jul 2026 14:38:47 +0000","description":"Distributed tracing tracks a single request as it flows through multiple services in a distributed system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Distributed Tracing.html"]}],"alternateName":["distributed-trace","opentelemetry-tracing"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monitoring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-systems.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/apm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/telemetry.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/opentelemetry.io\/docs\/languages\/php\/"},{"@type":"CreativeWork","name":"W3C Trace Context","url":"https:\/\/www.w3.org\/TR\/trace-context\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"distributed-tracing"}]}]}</script>
```php
<?php

    use OpenTelemetry\API\Globals;
    
    // Manual span creation
    $tracer = Globals::tracerProvider()->getTracer('order-service');
    
    $span = $tracer->spanBuilder('place-order')->startSpan();
    $scope = $span->activate();
    
    try {
        $order = $orderService->place($data);
        $span->setAttribute('order.id', $order->id);
    } catch (\Throwable $e) {
        $span->recordException($e);
        $span->setStatus(\OpenTelemetry\API\Trace\StatusCode::STATUS_ERROR);
        throw $e;
    } finally {
        $scope->detach();
        $span->end();
    }
    
    // The traceparent header is propagated automatically by the SDK
    // when making outbound HTTP calls via PSR-18 clients with the OTel middleware.

?>
```

**[Documentation](https://opentelemetry.io/docs/languages/php/)**
## See Also

+ [W3C Trace Context](https://www.w3.org/TR/trace-context/)

## Related

+ [Trace](trace.html)
+ [Monitoring](monitoring.html)
+ [Microservice](microservice.html)
+ [Distributed Systems](distributed-systems.html)
+ [Application Performance Management (APM)](apm.html)
+ [Telemetry](telemetry.html)

## Related packages

+ [open-telemetry/opentelemetry](https://packagist.org/packages/open-telemetry/opentelemetry)
