.. _api-gateway:
.. meta::
	:description:
		API Gateway: An API gateway is a server that acts as the single entry point for all client requests to a backend system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: API Gateway
	:twitter:description: API Gateway: An API gateway is a server that acts as the single entry point for all client requests to a backend system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: API Gateway
	:og:type: article
	:og:description: An API gateway is a server that acts as the single entry point for all client requests to a backend system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/api-gateway.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/api-gateway.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/api-gateway.ini.html","name":"API Gateway","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 04:49:07 +0000","dateModified":"Tue, 07 Jul 2026 04:49:07 +0000","description":"An API gateway is a server that acts as the single entry point for all client requests to a backend system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/API Gateway.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


API Gateway
-----------

An API gateway is a server that acts as the single entry point for all client requests to a backend system. It sits in front of a set of services and is responsible for routing requests to the appropriate service, as well as handling cross-cutting concerns that would otherwise be duplicated across services.

Typical API gateway responsibilities: request routing, which are path-based or host-based to microservices, authentication and authorisation, based on JWT validation or API key checking, rate limiting and throttling, SSL termination, request/response transformation, logging and metrics collection, and caching.

By centralising these concerns at the gateway, individual services are freed from implementing them independently. A client makes a single call to the gateway; the gateway fans out to one or more services internally.

Common API gateways: ``AWS API Gateway``, ``Kong``, ``Traefik``, ``NGINX`` with Lua, and ``Caddy``. In microservices deployments, the gateway typically sits in front of a Kubernetes ingress and routes traffic to PHP-FPM pods.

.. code-block:: php
   
   <?php
   
   // PHP does not typically implement an API gateway itself —
   // gateways are infrastructure components (Kong, Traefik, AWS API Gateway).
   // PHP services sit behind the gateway and receive pre-authenticated, pre-validated requests.
   
   // Kong plugin (Lua) enforcing JWT auth before the request reaches PHP:
   // config:
   //   plugins:
   //     - name: jwt
   //       config:
   //         secret_is_base64: false
   
   // In PHP: trust that the gateway has validated the token
   // The user identity is forwarded via a header set by the gateway
   $userId = (int) $_SERVER['HTTP_X_USER_ID']; // set by the gateway, not the client
   
   // AWS API Gateway: Lambda proxy integration
   // The gateway invokes a PHP Lambda function per route
   // Route: GET /orders/{id} -> order-service Lambda
   
   // BFF (Backend for Frontend): PHP as a gateway
   // PHP aggregates calls to multiple microservices and returns a tailored response
   $user    = $userClient->get('/users/' . $userId);
   $orders  = $orderClient->get('/orders?user=' . $userId);
   $returns = $returnClient->get('/returns?user=' . $userId);
   
   return [
       'user'    => $user,
       'orders'  => $orders,
       'returns' => $returns,
   ];
   
   ?>


`Documentation <https://microservices.io/patterns/apigateway.html>`__

See also `API Gateway in PHP <https://habib-cst.medium.com/api-gateway-in-php-e22d7a6d57e3>`_ and `API Gateway examples using SDK for PHP <https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/php_api-gateway_code_examples.html>`_.

Related : :ref:`Microservice <microservice>`, :ref:`Service Discovery <service-discovery>`, :ref:`Rate Limiting <rate-limit>`, :ref:`Authentication <authentication>`, :ref:`Middleware Pattern <middleware>`, :ref:`REST API <rest-api>`, :ref:`Service-Oriented Architecture (SOA) <soa>`
