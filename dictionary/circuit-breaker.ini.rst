.. _circuit-breaker:
.. meta::
	:description:
		Circuit Breaker: A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Circuit Breaker
	:twitter:description: Circuit Breaker: A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Circuit Breaker
	:og:type: article
	:og:description: A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/circuit-breaker.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/circuit-breaker.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/circuit-breaker.ini.html","name":"Circuit Breaker","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 14:50:43 +0000","dateModified":"Fri, 10 Jul 2026 14:50:43 +0000","description":"A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Circuit Breaker.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Circuit Breaker
---------------

A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems. It prevents cascading failures by monitoring the calls to external services, like APIs, databases, or microservices. When a service fails repeatedly, the circuit breaker triggers and stops further calls to that service for a predefined period, allowing the target system to recover, and the local service to report the unavailability without producing incorrect values. 

After the timeout, it may allow a limited number of test calls to see if the service has recovered.

`Documentation <https://en.wikipedia.org/wiki/Circuit_breaker_design_pattern>`__

See also `CircuitBreaker <https://martinfowler.com/bliki/CircuitBreaker.html>`_, `Circuit Breaker Pattern in PHP <https://laravel-news.com/circuit-breaker-pattern-in-php>`_, `PHP Circuit Breaker Pattern – Build Resilient, Fault-Tolerant Systems <https://nullodyssey.dev/blog/php-circuit-breaker-pattern/>`_, `Implementing the Circuit Breaker Pattern in PHP <https://medium.com/@edouard.courty/implementing-the-circuit-breaker-pattern-in-php-5123b8cca271>`_ and `Simple Circuit Breaker pattern implementation in PHP <https://medium.com/@dotcom.software/circuit-breaker-pattern-in-php-10ee1b35e14d>`_.

Related : :ref:`Feature Flag <feature-flag>`, :ref:`Downtime <downtime>`, :ref:`Availability <availability>`, :ref:`Quality of Service (QoS) <qos>`, :ref:`Reliability <reliability>`, :ref:`Service Level Agreement (SLA) <sla>`, :ref:`Canary <canary>`, :ref:`Fault Isolation <fault-isolation>`, :ref:`Resilience <resilience>`, :ref:`Retry <retry>`

Related packages : `ackintosh/ganesha <https://packagist.org/packages/ackintosh/ganesha>`_, `prestashop/circuit-breaker <https://packagist.org/packages/prestashop/circuit-breaker>`_, `ejsmont-artur/php-circuit-breaker <https://packagist.org/packages/ejsmont-artur/php-circuit-breaker>`_
