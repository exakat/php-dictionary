.. _monolith:
.. _monolithic:
.. _monolithic-architecture:
.. _monolithic-application:
.. meta::
	:description:
		Monolith: A monolith refers to an application that is built and deployed as one single, tightly integrated codebase.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Monolith
	:twitter:description: Monolith: A monolith refers to an application that is built and deployed as one single, tightly integrated codebase
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Monolith
	:og:type: article
	:og:description: A monolith refers to an application that is built and deployed as one single, tightly integrated codebase
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/monolith.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/monolith.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/monolith.ini.html","name":"Monolith","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:39:40 +0000","dateModified":"Sat, 11 Jul 2026 14:39:40 +0000","description":"A monolith refers to an application that is built and deployed as one single, tightly integrated codebase","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Monolith.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Monolith
--------

A monolith refers to an application that is built and deployed as one single, tightly integrated codebase.

The monolith concept is not specific to PHP: it applies to other programming languages.

In a monolithic application, all concerns live in one project, may it be routing, controller, business logic, database, views, logging, authentication, etc. Everything is deployed together, and a change in one part usually requires the deployment of all of the monolith.

The opposite of a monolith is micro-services. 

Monoliths are often preferred unless scale or team size truly demands microservices.

`Documentation <https://en.wikipedia.org/wiki/Monolithic_application>`__

See also `Decoupling a monolithic PHP application: a practical example <https://lokalise.com/blog/decoupling-a-monolithic-php-application-a-practical-example/>`_, `PHP Monolith to Microservices: When to Split Web Applications <https://www.zend.com/blog/php-monolith-to-microservices>`_, `Microservices vs. Monolith: A PHP Developer’s Guide to Architecture Decisions in 2025 <https://www.fuseweb.nl/en/blog/2025/02/03/microservices-vs-monolith-php-architecture-guide-2025>`_ and `Migrating a PHP monolith in production: how I think about it <https://dev.to/silvafilipe/migrating-a-php-monolith-in-production-how-i-think-about-it-26k7>`_.

Related : :ref:`Microservice <micro-service>`, :ref:`Application <application>`
