.. _correlation-id:
.. _request-id:
.. meta::
	:description:
		Correlation ID: A correlation ID is a unique identifier attached to a request or event so that all related operations across multiple services or log entries can be linked together.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Correlation ID
	:twitter:description: Correlation ID: A correlation ID is a unique identifier attached to a request or event so that all related operations across multiple services or log entries can be linked together
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Correlation ID
	:og:type: article
	:og:description: A correlation ID is a unique identifier attached to a request or event so that all related operations across multiple services or log entries can be linked together
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/correlation-id.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/correlation-id.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/correlation-id.ini.html","name":"Correlation ID","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:26:18 +0000","dateModified":"Mon, 20 Jul 2026 08:26:17 +0000","description":"A correlation ID is a unique identifier attached to a request or event so that all related operations across multiple services or log entries can be linked together","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Correlation ID.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Correlation ID
--------------

A correlation ID is a unique identifier attached to a request or event so that all related operations across multiple services or log entries can be linked together.

In a distributed system, a single user action may trigger calls to several microservices, each writing their own logs. Without a shared identifier, reconstructing the full lifecycle of that request requires matching timestamps and guessing at relationships. By generating a ``UUID`` at the entry point, API gateway, queue consumer, CLI command, and forwarding it in every outbound call and log line, all related activity shares the same correlation ID and can be retrieved as a group.

Correlation IDs are typically propagated through HTTP headers, e.g. ``X-Correlation-ID`` or ``X-Request-ID``, or as metadata in message queue payloads. Middleware or a centralized logger injects the value at the boundary and makes it available throughout the request lifecycle, often via a PSR-3 logger context or a dependency injection container.

A correlation ID is not secret and is not a security token. Its sole purpose is observability.

.. code-block:: php
   
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


`Documentation <https://en.wikipedia.org/wiki/Tracing_(software)>`__

See also `W3C Trace Context <https://www.w3.org/TR/trace-context/>`_.

Related : :ref:`Universally Unique IDentifier (UUID) <uuid>`, :ref:`Distributed Tracing <distributed-tracing>`, :ref:`Distributed Systems <distributed-systems>`, :ref:`Microservice <microservice>`, :ref:`Log <log>`, :ref:`Unique Identifier <unique-identifier>`, :ref:`Idempotent <idempotent>`

Related packages : `ramsey/uuid <https://packagist.org/packages/ramsey/uuid>`_
