.. _event-store:
.. _eventstore:
.. _event-log:
.. meta::
	:description:
		Event Store: An event store is an append-only database that stores domain events as the primary source of truth.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Event Store
	:twitter:description: Event Store: An event store is an append-only database that stores domain events as the primary source of truth
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Event Store
	:og:type: article
	:og:description: An event store is an append-only database that stores domain events as the primary source of truth
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/event-store.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/event-store.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/event-store.ini.html","name":"Event Store","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:49:25 +0000","dateModified":"Thu, 09 Jul 2026 08:49:25 +0000","description":"An event store is an append-only database that stores domain events as the primary source of truth","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Event Store.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Event Store
-----------

An event store is an append-only database that stores domain events as the primary source of truth. Instead of persisting the current state of an entity, as a traditional relational database does, the event store records every state-changing event in the order it occurred. The current state is derived by replaying all events for a given aggregate.

Event stores have three fundamental properties: events are immutable, as in never updated or deleted, ordered, as in within an aggregate stream, and complete , as in no information is lost. This makes them naturally auditable, debuggable, and replayable.

An event store differs from a general-purpose message queue: it is designed for long-term persistence and random-access replay, not just for transient message delivery. EventStoreDB is a purpose-built event store. Kafka is also used as an event store when configured with long retention periods.

In event-sourcing implementations, the event store is typically an abstraction over a PostgreSQL table, with JSON event payloads, Kafka, or EventStoreDB. Libraries such as Prooph or Broadway provide event store interfaces.

.. code-block:: php
   
   <?php
   
   // Simple append-only event store backed by PostgreSQL
   class PostgresEventStore {
       public function append(string $streamId, array $events, int $expectedVersion): void {
           $this->pdo->beginTransaction();
           foreach ($events as $i => $event) {
               $stmt = $this->pdo->prepare(
                   'INSERT INTO events (stream_id, version, event_type, payload, occurred_at)
                    VALUES (:stream, :version, :type, :payload, NOW())'
               );
               $stmt->execute([
                   'stream'  => $streamId,
                   'version' => $expectedVersion + $i + 1,
                   'type'    => get_class($event),
                   'payload' => json_encode($event),
               ]);
           }
           $this->pdo->commit();
       }
   
       public function load(string $streamId, int $fromVersion = 0): array {
           $stmt = $this->pdo->prepare(
               'SELECT * FROM events WHERE stream_id = ? AND version > ? ORDER BY version'
           );
           $stmt->execute([$streamId, $fromVersion]);
           return $stmt->fetchAll();
       }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Event_store>`__

See also `EventStoreDB <https://www.eventstore.com/>`_.

Related : :ref:`Event Sourcing <event-sourcing>`, :ref:`Event Replay <event-replay>`, :ref:`Event Streaming <event-streaming>`, :ref:`Audit Trail <audit-trail>`, :ref:`Domain Design Driven (DDD) <ddd>`

Related packages : `prooph/event-store <https://packagist.org/packages/prooph/event-store>`_
