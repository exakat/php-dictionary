.. _monolith:
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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Monolith","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:20:47 +0000","dateModified":"Tue, 20 Jan 2026 07:20:47 +0000","description":"A monolith refers to an application that is built and deployed as one single, tightly integrated codebase","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Monolith.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Monolith
--------

A monolith refers to an application that is built and deployed as one single, tightly integrated codebase.

The monolith concept is not specific to PHP: it applies to other programming languages.

In a monolithic application, all concerns live in one project (routing, controller, business logic, database, views, logging, authentication, etc.). Everything is deployed together, and a change in one part usually requires the deployement of all of the monolith.

The opposite of a monolith is micro-services. 

In PHP ecosystems, monoliths are often preferred unless scale or team size truly demands microservices.

`Documentation <https://en.wikipedia.org/wiki/Monolithic_application>`__

See also https://lokalise.com/blog/decoupling-a-monolithic-php-application-a-practical-example/, https://www.zend.com/blog/php-monolith-to-microservices, https://www.fuseweb.nl/en/blog/2025/02/03/microservices-vs-monolith-php-architecture-guide-2025

Related : :ref:`Microservice <micro-service>`
