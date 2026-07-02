.. _request-response:
.. meta::
	:description:
		Request-Response: Request-response is a communication pattern where a caller (client) sends a request and synchronously waits for the callee (server) to return a response before continuing.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Request-Response
	:twitter:description: Request-Response: Request-response is a communication pattern where a caller (client) sends a request and synchronously waits for the callee (server) to return a response before continuing
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Request-Response
	:og:type: article
	:og:description: Request-response is a communication pattern where a caller (client) sends a request and synchronously waits for the callee (server) to return a response before continuing
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/request-response.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Request-Response","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 15:06:44 +0000","dateModified":"Tue, 30 Jun 2026 15:06:44 +0000","description":"Request-response is a communication pattern where a caller (client) sends a request and synchronously waits for the callee (server) to return a response before continuing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Request-Response.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Request-Response
----------------

Request-response is a communication pattern where a caller (client) sends a request and synchronously waits for the callee (server) to return a response before continuing. It is the fundamental interaction model of HTTP, RPC, and most database queries.

In the request-response pattern, the caller is blocked while the server processes the request. The server handles the request, computes a result, and sends it back. The caller then resumes with the result. Both parties must be available simultaneously.

This is distinct from fire-and-forget (no response expected), pub/sub (no direct coupling between publisher and subscriber), and streaming (continuous flow of data rather than a single response).

PHP's traditional execution model is built entirely around request-response: the browser (client) sends an HTTP request, PHP processes it synchronously and returns an HTTP response. This model is simple and debuggable but imposes a one-request-per-worker constraint without async extensions.

.. code-block:: php
   
   <?php
   
   // PHP is the server side of the HTTP request-response pattern
   // Every PHP-FPM request follows this lifecycle:
   
   // 1. Client sends: GET /orders/42 HTTP/1.1
   // 2. PHP receives, processes, and returns:
   http_response_code(200);
   header('Content-Type: application/json');
   echo json_encode(['id' => 42, 'status' => 'shipped']);
   
   // PHP as the client side (HTTP request-response to a downstream service):
   $response = $httpClient->get('https://payment-service/status/42');
   // Client blocks here until payment-service responds
   $status = $response->toArray()['status'];
   
   // Contrast with fire-and-forget (no wait):
   $queue->push(new SendEmailJob($user)); // returns immediately, no response
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Request%E2%80%93response>`__

See also `Wikipedia: Request-response <https://en.wikipedia.org/wiki/Request%E2%80%93response>`_.

Related : :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`Synchronous <synchronous>`, :ref:`Fire-and-forget <fire-and-forget>`, :ref:`Pub/Sub <pubsub>`, :ref:`Asynchronous <asynchronous>`, :ref:`API Gateway <api-gateway>`
