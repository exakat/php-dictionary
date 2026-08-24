# OpenTelemetry
``OpenTelemetry`` is a PIE extension that provides the low-level instrumentation hooks needed to generate distributed traces, metrics, and logs from PHP applications, following the vendor-neutral OpenTelemetry standard. It captures function entry and exit, timing, and exceptions at the engine level through observer hooks, which the pure-PHP ``open-telemetry/opentelemetry`` Composer package then turns into spans, exports, and context propagation.

Distributed tracing links related operations across process and service boundaries: a single incoming HTTP request might touch an application server, a database, a queue, and an external API, and OpenTelemetry ties every one of those operations into a single trace using a shared trace ID passed through headers.

The extension exists because auto-instrumentation, tracing library calls such as PDO or Guzzle without the developer manually wrapping every call, needs to hook into the Zend Engine at a level that pure PHP userland code cannot reach efficiently.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opentelemetry.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opentelemetry.html","name":"OpenTelemetry","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:49:59 +0000","dateModified":"Wed, 15 Jul 2026 13:49:59 +0000","description":"OpenTelemetry is a PIE extension that provides the low-level instrumentation hooks needed to generate distributed traces, metrics, and logs from PHP applications, following the vendor-neutral OpenTelemetry standard","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opentelemetry.html"]}],"alternateName":["otel"],"keywords":["extension","acronym","distributed-systems"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tideways.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blackfire.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/excimer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pie.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-systems.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/opentelemetry.io\/docs\/languages\/php\/"},{"@type":"CreativeWork","name":"Getting started with OpenTelemetry","url":"https:\/\/opentelemetry.io\/docs\/languages\/php\/getting-started\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"opentelemetry"}]}]}</script>
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

**[Documentation](https://opentelemetry.io/docs/languages/php/)**
## See Also

+ [Getting started with OpenTelemetry](https://opentelemetry.io/docs/languages/php/getting-started/)

## Related

+ [Tideways](tideways.html)
+ [Blackfire](blackfire.html)
+ [Excimer](excimer.html)
+ [PHP Installer For Extensions (PIE)](pie.html)
+ [Distributed Systems](distributed-systems.html)
+ [Microservice](microservice.html)

## Related packages

+ [open-telemetry/sdk](https://packagist.org/packages/open-telemetry/sdk)
