.. _business-logic:
.. _domain-logic:
.. meta::
	:description:
		Business Logic: Business logic is the part of the application that encodes the real-world rules, workflows, and decisions that the software is built to fulfill.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Business Logic
	:twitter:description: Business Logic: Business logic is the part of the application that encodes the real-world rules, workflows, and decisions that the software is built to fulfill
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Business Logic
	:og:type: article
	:og:description: Business logic is the part of the application that encodes the real-world rules, workflows, and decisions that the software is built to fulfill
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/business-logic.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Business Logic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"Business logic is the part of the application that encodes the real-world rules, workflows, and decisions that the software is built to fulfill","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Business Logic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Business Logic
--------------

Business logic is the part of the application that encodes the real-world rules, workflows, and decisions that the software is built to fulfill. It is the ultimate goal of the software: the reason it exists.

Business logic answers questions like: how is an invoice calculated? what are the conditions for a user to be eligible for a discount? when is an order considered fulfilled? These rules come from the business domain, not from the technology.

Everything else in the application — HTTP routing, database persistence, authentication, caching, logging — is infrastructure. Infrastructure exists to serve the business logic, not the other way around. A common design mistake is to scatter business rules across controllers, SQL queries, or framework callbacks, making them hard to find, test, and change.

Well-structured applications isolate business logic from infrastructure. Domain-Driven Design, Hexagonal Architecture, and Clean Architecture all promote this separation. The domain layer, which holds the business logic, should have no dependencies on frameworks, databases, or external services. This makes it independently testable and resilient to technology changes.

In PHP projects, business logic often leaks into controllers (``fat controllers``), Eloquent models (``fat models``), or stored procedures, which are anti-patterns that couple the domain to infrastructure concerns.

See also `Patterns of Enterprise Application Architecture (Fowler) <https://martinfowler.com/books/eaa.html>`_.

Related : :ref:`Domain Design Driven (DDD) <ddd>`, :ref:`Clean Architecture <clean-architecture>`, :ref:`Hexagonal Architecture <hexagonal>`, :ref:`Architecture <architecture>`, :ref:`Separation of Concerns <separation-of-concerns>`, :ref:`Model - View - Controller (MVC) <mvc>`, :ref:`Service <service>`
