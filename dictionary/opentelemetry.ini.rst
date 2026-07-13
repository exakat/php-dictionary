.. _opentelemetry:
.. _otel:
.. meta::
	:description:
		OpenTelemetry: ``OpenTelemetry`` is a PECL extension that provides the low-level instrumentation hooks needed to generate distributed traces, metrics, and logs from PHP applications, following the vendor-neutral OpenTelemetry standard.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: OpenTelemetry
	:twitter:description: OpenTelemetry: ``OpenTelemetry`` is a PECL extension that provides the low-level instrumentation hooks needed to generate distributed traces, metrics, and logs from PHP applications, following the vendor-neutral OpenTelemetry standard
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: OpenTelemetry
	:og:type: article
	:og:description: ``OpenTelemetry`` is a PECL extension that provides the low-level instrumentation hooks needed to generate distributed traces, metrics, and logs from PHP applications, following the vendor-neutral OpenTelemetry standard
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/opentelemetry.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"OpenTelemetry","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:31:27 +0000","dateModified":"Sat, 11 Jul 2026 09:31:26 +0000","description":"``OpenTelemetry`` is a PECL extension that provides the low-level instrumentation hooks needed to generate distributed traces, metrics, and logs from PHP applications, following the vendor-neutral OpenTelemetry standard","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/OpenTelemetry.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


OpenTelemetry
-------------

``OpenTelemetry`` is a PECL extension that provides the low-level instrumentation hooks needed to generate distributed traces, metrics, and logs from PHP applications, following the vendor-neutral OpenTelemetry standard. It captures function entry and exit, timing, and exceptions at the engine level through observer hooks, which the pure-PHP ``open-telemetry/opentelemetry`` Composer package then turns into spans, exports, and context propagation.

Distributed tracing links related operations across process and service boundaries: a single incoming HTTP request might touch an application server, a database, a queue, and an external API, and OpenTelemetry ties every one of those operations into a single trace using a shared trace ID passed through headers.

The extension exists because auto-instrumentation, tracing library calls such as PDO or Guzzle without the developer manually wrapping every call, needs to hook into the Zend Engine at a level that pure PHP userland code cannot reach efficiently.

.. code-block:: php
   
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


`Documentation <https://opentelemetry.io/docs/languages/php/>`__

See also `OpenTelemetry PHP <https://opentelemetry.io/docs/languages/php/>`_.

Related : :ref:`Tideways <tideways>`, :ref:`Blackfire <blackfire>`, :ref:`Excimer <excimer>`, :ref:`Distributed Systems <distributed-systems>`, :ref:`Microservice <microservice>`

Related packages : `open-telemetry/sdk <https://packagist.org/packages/open-telemetry/sdk>`_
