---
type: "extension"
title: "OpenTelemetry"
description: "``OpenTelemetry`` is a PIE extension that provides the low-level instrumentation hooks needed to generate distributed traces, metrics, and logs from PHP applications, following the vendor-neutral OpenTelemetry standard."
resource: "https://opentelemetry.io/docs/languages/php/"
tags: ["extension", "acronym", "distributed-systems"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# OpenTelemetry

``OpenTelemetry`` is a PIE extension that provides the low-level instrumentation hooks needed to generate distributed traces, metrics, and logs from PHP applications, following the vendor-neutral OpenTelemetry standard. It captures function entry and exit, timing, and exceptions at the engine level through observer hooks, which the pure-PHP ``open-telemetry/opentelemetry`` Composer package then turns into spans, exports, and context propagation.

Distributed tracing links related operations across process and service boundaries: a single incoming HTTP request might touch an application server, a database, a queue, and an external API, and OpenTelemetry ties every one of those operations into a single trace using a shared trace ID passed through headers.

The extension exists because auto-instrumentation, tracing library calls such as PDO or Guzzle without the developer manually wrapping every call, needs to hook into the Zend Engine at a level that pure PHP userland code cannot reach efficiently.

```php
<?php

    // Requires composer require open-telemetry/sdk open-telemetry/exporter-otlp,
    // which depend on ext-opentelemetry for auto-instrumentation hooks.
    $tracer = (new \OpenTelemetry\SDK\Trace\TracerProviderFactory())
        ->create()
        ->getTracer('example-app');

    $span = $tracer->spanBuilder('handle-request')->startSpan();
    $scope = $span->activate();

    try {
        // ... application code ...
    } finally {
        $span->end();
        $scope->detach();
    }

?>
```

## Documentation
- [https://opentelemetry.io/docs/languages/php/](https://opentelemetry.io/docs/languages/php/)

## See Also
- [Getting started with OpenTelemetry](https://opentelemetry.io/docs/languages/php/getting-started/)

## Related
- [Tideways](/features/tideways.md)
- [Blackfire](/features/blackfire.md)
- [Excimer](/features/excimer.md)
- [PHP Installer For Extensions (PIE)](/features/pie.md)
- [Distributed Systems](/features/distributed-systems.md)
- [Microservice](/features/microservice.md)

## Details
- Packagist: [open-telemetry/sdk](https://packagist.org/packages/open-telemetry/sdk)
- Extension: ext-opentelemetry

