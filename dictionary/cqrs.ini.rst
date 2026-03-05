.. _cqrs:
.. meta::
	:description:
		Command Query Responsibility Segregation (CQRS): CQRS is an architectural pattern that separates read operations, Queries from write operations, Commands, into distinct models.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Command Query Responsibility Segregation (CQRS)
	:twitter:description: Command Query Responsibility Segregation (CQRS): CQRS is an architectural pattern that separates read operations, Queries from write operations, Commands, into distinct models
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Command Query Responsibility Segregation (CQRS)
	:og:type: article
	:og:description: CQRS is an architectural pattern that separates read operations, Queries from write operations, Commands, into distinct models
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cqrs.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Command Query Responsibility Segregation (CQRS)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 04 Mar 2026 20:51:17 +0000","dateModified":"Wed, 04 Mar 2026 20:51:17 +0000","description":"CQRS is an architectural pattern that separates read operations, Queries from write operations, Commands, into distinct models","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Command Query Responsibility Segregation (CQRS).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Command Query Responsibility Segregation (CQRS)
-----------------------------------------------

CQRS is an architectural pattern that separates read operations, Queries from write operations, Commands, into distinct models. It was popularized by Greg Young, building on Bertrand Meyer's Command-Query Separation principle.

Read and write workloads often have very different performance and scaling needs, so treating them as a single unified model creates unnecessary friction. By separating them, you can optimize each side independently: for example, using denormalized read models or dedicated indexed projections on the query side without affecting your write logic.

It also simplifies complex domain logic. Commands encapsulate intent and business rules cleanly, without being cluttered by the concerns of how data is presented or fetched. This makes the write side easier to test and reason about.

CQRS pairs especially naturally with Event Sourcing, where state changes are stored as a sequence of events rather than overwriting rows — but it's worth noting that you don't need Event Sourcing to benefit from CQRS. The two are complementary, not dependent on each other.

`Documentation <https://martinfowler.com/bliki/CQRS.html>`__

Related : :ref:`Event Sourcing <event-sourcing>`

Related packages : `ecotone/ecotone <https://packagist.org/packages/ecotone/ecotone>`_, `backslashphp/backslash <https://packagist.org/packages/backslashphp/backslash>`_, `nontre/cqrs <https://packagist.org/packages/nontre/cqrs>`_
