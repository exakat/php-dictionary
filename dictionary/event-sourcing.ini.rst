.. _event-sourcing:
.. meta::
	:description:
		Event Sourcing: Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Event Sourcing
	:twitter:description: Event Sourcing: Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Event Sourcing
	:og:type: article
	:og:description: Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/event-sourcing.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Event Sourcing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Mar 2026 14:46:29 +0000","dateModified":"Mon, 16 Mar 2026 14:46:29 +0000","description":"Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Event Sourcing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Event Sourcing
--------------

Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored. The current state is derived by replaying those events.

Event sourcing provides a full audit trail. It never loses history. Every change is recorded with a timestamp and context, which is invaluable for debugging, compliance, and support.

Event sourcing allows for time travel. It is possible to reconstruct the state of any entity at any point in the past by replaying events up to a given timestamp.

Event sourcing emphasize on decoupled side effects. Different parts of the system can react to events asynchronously, such as sending emails, updating read models, triggering workflows. All that without coupling them to the write logic.

Event sourcing pairs naturally with CQRS. The event stream is the write side; it relies on optimized read models, also called projections, and processes those events separately.

`Documentation <https://martinfowler.com/eaaDev/EventSourcing.html>`__

See also https://tech.osteel.me/posts/building-a-php-cli-tool-using-ddd-and-event-sourcing-getting-started-with-eventsauce

Related : :ref:`Event Storming <event-storming>`, :ref:`Audit Trail <audit-trail>`, :ref:`Command Query Responsibility Segregation (CQRS) <cqrs>`, :ref:`Side Effect <side-effect>`, 

Related packages : `temporal/sdk <https://packagist.org/packages/temporal/sdk>`_, `broadway/broadway <https://packagist.org/packages/broadway/broadway>`_, `eventsauce/eventsauce <https://packagist.org/packages/eventsauce/eventsauce>`_
