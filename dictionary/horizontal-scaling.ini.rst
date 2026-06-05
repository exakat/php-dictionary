.. _horizontal-scaling:
.. _scale-out:
.. _scaling-out:
.. meta::
	:description:
		Horizontal Scaling: Horizontal scaling, also called scaling out, means adding more instances of an application or service to distribute the workload across multiple machines, rather than increasing the resources of a single machine.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Horizontal Scaling
	:twitter:description: Horizontal Scaling: Horizontal scaling, also called scaling out, means adding more instances of an application or service to distribute the workload across multiple machines, rather than increasing the resources of a single machine
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Horizontal Scaling
	:og:type: article
	:og:description: Horizontal scaling, also called scaling out, means adding more instances of an application or service to distribute the workload across multiple machines, rather than increasing the resources of a single machine
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/horizontal-scaling.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Horizontal Scaling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"Horizontal scaling, also called scaling out, means adding more instances of an application or service to distribute the workload across multiple machines, rather than increasing the resources of a single machine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Horizontal Scaling.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Horizontal Scaling
------------------

Horizontal scaling, also called scaling out, means adding more instances of an application or service to distribute the workload across multiple machines, rather than increasing the resources of a single machine.

In PHP, horizontal scaling typically involves running multiple PHP-FPM processes or application containers behind a load balancer. Because HTTP is stateless, PHP applications can often be scaled horizontally with relatively little effort, provided that shared state, such as sessions, caches, uploaded files, is externalised to shared services such as Redis, a centralised database, or an object-storage service.

Key considerations for horizontal scaling include: stateless application design, centralised session storage, distributed caching, shared file storage, and database connection pooling.

Horizontal scaling contrasts with vertical scaling, which adds physical resources to existing machines.

.. code-block:: php
   
   <?php
   
       // Externalising session storage to Redis for horizontal scalability
       ini_set('session.save_handler', 'redis');
       ini_set('session.save_path', 'tcp://redis:6379');
   
       session_start();
       $_SESSION['user_id'] = 42;
   
   ?>


See also `Horizontally Scaling PHP Applications <https://www.digitalocean.com/blog/horizontally-scaling-php-applications>`_ and `PHP Session Clustering with Redis <https://redis.io/docs/manual/patterns/>`_.

Related : :ref:`Scaling <scaling>`, :ref:`Vertical Scaling <vertical-scaling>`, :ref:`Load Balancer <load-balancer>`, :ref:`Stateless <stateless>`, :ref:`Session <session>`, :ref:`Cache <cache>`, :ref:`Microservice <microservice>`, :ref:`Architecture <architecture>`, :ref:`Cloud <cloud>`
