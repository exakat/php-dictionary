.. _vertical-scaling:
.. _scale up:
.. _scaling up:
.. meta::
	:description:
		Vertical Scaling: Vertical scaling, also called scaling up, means increasing the resources: CPU cores, RAM, disk I/O, or network bandwidth, of an existing machine or container to handle a greater workload, rather than adding more instances.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Vertical Scaling
	:twitter:description: Vertical Scaling: Vertical scaling, also called scaling up, means increasing the resources: CPU cores, RAM, disk I/O, or network bandwidth, of an existing machine or container to handle a greater workload, rather than adding more instances
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Vertical Scaling
	:og:type: article
	:og:description: Vertical scaling, also called scaling up, means increasing the resources: CPU cores, RAM, disk I/O, or network bandwidth, of an existing machine or container to handle a greater workload, rather than adding more instances
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/vertical-scaling.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Vertical Scaling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 10:23:04 +0000","dateModified":"Thu, 28 May 2026 10:23:04 +0000","description":"Vertical scaling, also called scaling up, means increasing the resources: CPU cores, RAM, disk I\/O, or network bandwidth, of an existing machine or container to handle a greater workload, rather than adding more instances","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Vertical Scaling.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Vertical Scaling
----------------

Vertical scaling, also called scaling up, means increasing the resources: CPU cores, RAM, disk I/O, or network bandwidth, of an existing machine or container to handle a greater workload, rather than adding more instances.

In PHP, vertical scaling may involve upgrading the server hardware, increasing PHP-FPM worker counts, raising ``memory_limit``, or enabling OPcache to reduce CPU pressure. It is generally simpler to implement than horizontal scaling because it does not require architectural changes to externalise shared state.

However, vertical scaling has an upper limit dictated by the maximum hardware configuration available, and a single large server remains a single point of failure. For most production workloads, vertical and horizontal scaling are used together.

.. code-block:: php
   
   <?php
   
   // php.ini / php-fpm.conf adjustments for vertical scaling
   // memory_limit = 512M
   // opcache.enable = 1
   // opcache.memory_consumption = 256
   // pm.max_children = 50
   
   // Checking current memory limit at runtime
   echo ini_get('memory_limit'); // 512M
   
   ?>


See also `Scaling PHP Applications: Strategies for High Traffic and Performance <https://medium.com/@london.lingo.01/scaling-php-applications-strategies-for-high-traffic-and-performance-e20bd80aa466>`_.

Related : :ref:`Scaling <scaling>`, :ref:`Horizontal Scaling <horizontal-scaling>`, :ref:`Performance <performance>`, :ref:`memory_limit <memory_limit>`, :ref:`Opcache <opcache>`, :ref:`Architecture <architecture>`
