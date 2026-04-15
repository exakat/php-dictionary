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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Circuit Breaker","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Circuit Breaker.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Circuit Breaker
---------------

A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems. It prevents cascading failures by monitoring the calls to external services, like APIs, databases, or microservices. When a service fails repeatedly, the circuit breaker triggers and stops further calls to that service for a predefined period, allowing the targert system to recover, and the local one to report the unavailability without running wild on wrong reported values. 

After the timeout, it may allow a limited number of test calls to see if the service has recovered.

Related : :ref:`Feature Flag <feature-flag>`

Related packages : `ackintosh/ganesha <https://packagist.org/packages/ackintosh/ganesha>`_, `prestashop/circuit-breaker <https://packagist.org/packages/prestashop/circuit-breaker>`_, `ejsmont-artur/php-circuit-breaker <https://packagist.org/packages/ejsmont-artur/php-circuit-breaker>`_
