.. _distributed-monolith:
.. meta::
	:description:
		Distributed Monolith: A distributed monolith is an anti-pattern where a system is deployed as multiple separate services but remains tightly coupled in practice, changes to one service still require coordinated changes to others, defeating the purpose of the distribution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Distributed Monolith
	:twitter:description: Distributed Monolith: A distributed monolith is an anti-pattern where a system is deployed as multiple separate services but remains tightly coupled in practice, changes to one service still require coordinated changes to others, defeating the purpose of the distribution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Distributed Monolith
	:og:type: article
	:og:description: A distributed monolith is an anti-pattern where a system is deployed as multiple separate services but remains tightly coupled in practice, changes to one service still require coordinated changes to others, defeating the purpose of the distribution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/distributed-monolith.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/distributed-monolith.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/distributed-monolith.ini.html","name":"Distributed Monolith","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 08:51:22 +0000","dateModified":"Fri, 03 Jul 2026 08:51:22 +0000","description":"A distributed monolith is an anti-pattern where a system is deployed as multiple separate services but remains tightly coupled in practice, changes to one service still require coordinated changes to others, defeating the purpose of the distribution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Distributed Monolith.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Distributed Monolith
--------------------

A distributed monolith is an anti-pattern where a system is deployed as multiple separate services but remains tightly coupled in practice, changes to one service still require coordinated changes to others, defeating the purpose of the distribution.

Common symptoms: shared database between services, synchronous call chains where all services must be available for any request to succeed, shared code libraries with business logic, deployment dependencies (service A must be deployed before service B), and a lack of independent scalability.

The distributed monolith combines the worst of both worlds: the operational complexity of microservices without the benefits.

The root cause is usually an attempt to split a monolith by technical layer, splitting into a ``frontend service`` and ``backend service``, rather than by business capability. True microservices require domain-driven boundaries and decentralised data management.

.. code-block:: php
   
   <?php
   
   // Symptom: all services share one database — tight coupling at the data layer
   // Service A writes orders; Service B reads orders directly from the same schema.
   // A schema migration in Service A breaks Service B without any API change.
   
   // Symptom: synchronous chain — no service can fail independently
   // UserService -> OrderService -> PaymentService -> InventoryService
   // If Inventory is down, the entire chain fails, same as a monolith.
   
   // Correct approach: each service owns its data and communicates via events or APIs
   // Order placed -> event published -> Inventory consumes event independently
   
   ?>


`Documentation <https://www.techtarget.com/searchapparchitecture/tip/The-distributed-monolith-What-it-is-and-how-to-escape-it>`__

See also `The distributed monolith <https://www.techtarget.com/searchapparchitecture/tip/The-distributed-monolith-What-it-is-and-how-to-escape-it>`_.

Related : :ref:`Monolith <monolith>`, :ref:`Microservice <microservice>`, :ref:`Service-Oriented Architecture (SOA) <soa>`, :ref:`Shared Database <shared-database>`, :ref:`Fault Isolation <fault-isolation>`, :ref:`Coupling <coupling>`, :ref:`Domain Design Driven (DDD) <ddd>`
