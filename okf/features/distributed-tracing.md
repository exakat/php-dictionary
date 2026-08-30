---
type: "concept"
title: "Distributed Tracing"
description: "Distributed tracing tracks a single request as it flows through multiple services in a distributed system."
resource: "https://opentelemetry.io/docs/languages/php/"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Distributed Tracing

Distributed tracing tracks a single request as it flows through multiple services in a distributed system. Each service records a span and propagates a trace context to downstream services via HTTP headers or message metadata. All spans sharing the same trace ID are assembled into a trace: a complete picture of the request's journey.

Without distributed tracing, debugging latency or errors in a microservices system means correlating logs across dozens of services manually. Distributed tracing provides a visual timeline, the waterfall diagram, showing which service took how long, where errors occurred, and how services depend on each other.

The W3C Trace Context standard, the ``traceparent`` header, defines the propagation format. OpenTelemetry is the vendor-neutral SDK and API for instrumenting PHP applications. Jaeger and Zipkin are common open-source backends; commercial alternatives include Datadog APM, New Relic, and Honeycomb.

OpenTelemetry provides a native SDK for manual and automatic instrumentation. The ``ext-opentelemetry`` extension enables zero-code instrumentation for frameworks and HTTP clients.

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

## Documentation
- [https://opentelemetry.io/docs/languages/php/](https://opentelemetry.io/docs/languages/php/)

## See Also
- [W3C Trace Context](https://www.w3.org/TR/trace-context/)

## Related
- [Trace](/features/trace.md)
- [Monitoring](/features/monitoring.md)
- [Microservice](/features/microservice.md)
- [Distributed Systems](/features/distributed-systems.md)
- [Application Performance Management (APM)](/features/apm.md)
- [Telemetry](/features/telemetry.md)

## Details
- Packagist: [open-telemetry/opentelemetry](https://packagist.org/packages/open-telemetry/opentelemetry)
- Extension: ext-opentelemetry

