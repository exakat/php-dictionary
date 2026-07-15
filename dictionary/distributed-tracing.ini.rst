.. _distributed-tracing:
.. _distributed-trace:
.. _opentelemetry-tracing:
.. meta::
	:description:
		Distributed Tracing: Distributed tracing tracks a single request as it flows through multiple services in a distributed system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Distributed Tracing
	:twitter:description: Distributed Tracing: Distributed tracing tracks a single request as it flows through multiple services in a distributed system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Distributed Tracing
	:og:type: article
	:og:description: Distributed tracing tracks a single request as it flows through multiple services in a distributed system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/distributed-tracing.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/distributed-tracing.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/distributed-tracing.ini.html","name":"Distributed Tracing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:38:47 +0000","dateModified":"Sat, 11 Jul 2026 14:38:47 +0000","description":"Distributed tracing tracks a single request as it flows through multiple services in a distributed system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Distributed Tracing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Distributed Tracing
-------------------

Distributed tracing tracks a single request as it flows through multiple services in a distributed system. Each service records a span and propagates a trace context to downstream services via HTTP headers or message metadata. All spans sharing the same trace ID are assembled into a trace: a complete picture of the request's journey.

Without distributed tracing, debugging latency or errors in a microservices system means correlating logs across dozens of services manually. Distributed tracing provides a visual timeline, the waterfall diagram, showing which service took how long, where errors occurred, and how services depend on each other.

The W3C Trace Context standard, the ``traceparent`` header, defines the propagation format. OpenTelemetry is the vendor-neutral SDK and API for instrumenting PHP applications. Jaeger and Zipkin are common open-source backends; commercial alternatives include Datadog APM, New Relic, and Honeycomb.

OpenTelemetry provides a native SDK for manual and automatic instrumentation. The ``ext-opentelemetry`` extension enables zero-code instrumentation for frameworks and HTTP clients.

.. code-block:: php
   
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


`Documentation <https://opentelemetry.io/docs/languages/php/>`__

See also `W3C Trace Context <https://www.w3.org/TR/trace-context/>`_.

Related : :ref:`Trace <trace>`, :ref:`Monitoring <monitoring>`, :ref:`Microservice <microservice>`, :ref:`Distributed Systems <distributed-systems>`, :ref:`Application Performance Management (APM) <apm>`, :ref:`Telemetry <telemetry>`

Related packages : `open-telemetry/opentelemetry <https://packagist.org/packages/open-telemetry/opentelemetry>`_
