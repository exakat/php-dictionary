.. _load-balancer:
.. _load-balancing:
.. meta::
	:description:
		Load Balancer: A load balancer is a component that distributes incoming network traffic across multiple backend servers to improve availability, throughput, and fault tolerance.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Load Balancer
	:twitter:description: Load Balancer: A load balancer is a component that distributes incoming network traffic across multiple backend servers to improve availability, throughput, and fault tolerance
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Load Balancer
	:og:type: article
	:og:description: A load balancer is a component that distributes incoming network traffic across multiple backend servers to improve availability, throughput, and fault tolerance
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/load-balancer.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/load-balancer.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/load-balancer.ini.html","name":"Load Balancer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 09:14:24 +0000","dateModified":"Tue, 30 Jun 2026 09:14:24 +0000","description":"A load balancer is a component that distributes incoming network traffic across multiple backend servers to improve availability, throughput, and fault tolerance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Load Balancer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Load Balancer
-------------

A load balancer is a component that distributes incoming network traffic across multiple backend servers to improve availability, throughput, and fault tolerance.

During deployment, the load balancer sits in front of a pool of PHP application servers, typically PHP-FPM behind Nginx or Apache. When a request arrives, the load balancer forwards it to one of the available servers according to a strategy: round-robin, least connections, IP hash, or weighted distribution.

Because requests can land on any server, PHP applications behind a load balancer must be stateless or externalise their state:

+ Sessions must be stored in a shared backend server, not on the local filesystem
+ Uploaded files must be written to shared storage, like NFS, an S3-compatible object store
+ Caches should be shared or invalidated across all nodes
+ Any resource that must persist between calls must be stored in a common server

A load balancer also provides health checks, in order to remove unhealthy nodes automatically, SSL termination, and sticky sessions, where it is routing a user's requests to the same backend when true statelessness is not possible.

.. code-block:: php
   
   <?php
   
       // Detect the real client IP behind a trusted load balancer
       $clientIp = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Load_balancing_(computing)>`__

See also `Load Balancing PHP Applications <https://www.nginx.com/resources/glossary/load-balancing/>`_ and `AWS Elastic Load Balancing with PHP <https://docs.aws.amazon.com/elasticloadbalancing/>`_.

Related : :ref:`Horizontal Scaling <horizontal-scaling>`, :ref:`Stateless <stateless>`, :ref:`Session <session>`, :ref:`Distributed State <distributed-state>`, :ref:`Server Architecture <server-architecture>`, :ref:`Cache <cache>`, :ref:`Docker <docker>`, :ref:`Availability <availability>`, :ref:`Container Orchestration <container-orchestration>`, :ref:`Kubernetes <kubernetes>`, :ref:`Quality of Service (QoS) <qos>`, :ref:`Service Discovery <service-discovery>`, :ref:`Service Registry <service-registry>`
