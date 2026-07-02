.. _service-discovery:
.. meta::
	:description:
		Service Discovery: Service discovery is the mechanism by which services in a distributed system find each other's network locations (host, port, protocol) dynamically, without hardcoding addresses.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Service Discovery
	:twitter:description: Service Discovery: Service discovery is the mechanism by which services in a distributed system find each other's network locations (host, port, protocol) dynamically, without hardcoding addresses
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Service Discovery
	:og:type: article
	:og:description: Service discovery is the mechanism by which services in a distributed system find each other's network locations (host, port, protocol) dynamically, without hardcoding addresses
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/service-discovery.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Service Discovery","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 15:07:25 +0000","dateModified":"Tue, 30 Jun 2026 15:07:25 +0000","description":"Service discovery is the mechanism by which services in a distributed system find each other's network locations (host, port, protocol) dynamically, without hardcoding addresses","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Service Discovery.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Service Discovery
-----------------

Service discovery is the mechanism by which services in a distributed system find each other's network locations (host, port, protocol) dynamically, without hardcoding addresses.

In a microservices environment, service instances are ephemeral: they start, stop, scale up or down, and move across hosts. Static configuration breaks immediately. Service discovery solves this by maintaining a registry of live instances and providing a way to query it.

Two main patterns exist: **client-side discovery**, where the caller queries the registry and selects an instance itself (e.g., Netflix Eureka with Ribbon); and **server-side discovery**, where the caller sends the request to a router (load balancer, API gateway) that performs the lookup transparently (e.g., Kubernetes services, AWS ELB).

In PHP microservices, server-side discovery via Kubernetes DNS or an API gateway is the most common approach. The PHP service simply calls ``http://order-service/orders`` and the infrastructure resolves and routes the request to an available instance.

.. code-block:: php
   
   <?php
   
   // In a Kubernetes environment, service discovery is transparent:
   // The Kubernetes DNS resolves 'payment-service' to a live pod IP.
   // PHP code uses the service name as the hostname — no registry queries needed.
   
   $response = $httpClient->post('http://payment-service/charge', [
       'json' => ['amount' => 9900, 'currency' => 'EUR'],
   ]);
   
   // With Consul (client-side discovery via HTTP API)
   $instances = json_decode(
       file_get_contents('http://consul:8500/v1/health/service/payment-service?passing'),
       true,
   );
   
   $instance = $instances[array_rand($instances)];
   $host     = $instance['Service']['Address'];
   $port     = $instance['Service']['Port'];
   
   $response = $httpClient->post(http://$host:$port/charge, ['json' => $payload]);
   
   ?>


`Documentation <https://microservices.io/patterns/client-side-discovery.html>`__

See also `Client-side discovery pattern <https://microservices.io/patterns/client-side-discovery.html>`_ and `Server-side discovery pattern <https://microservices.io/patterns/server-side-discovery.html>`_.

Related : :ref:`Microservice <microservice>`, :ref:`Service Registry <service-registry>`, :ref:`API Gateway <api-gateway>`, :ref:`Load Balancer <load-balancer>`, :ref:`Kubernetes <kubernetes>`, :ref:`Distributed Systems <distributed-systems>`
