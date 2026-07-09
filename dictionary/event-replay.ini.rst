.. _event-replay:
.. _replaying-events:
.. _event-sourcing-replay:
.. meta::
	:description:
		Event Replay: Event replay is the process of re-reading stored events from an event store to reconstruct the state of an aggregate, rebuild a projection, or bootstrap a new view of the data.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Event Replay
	:twitter:description: Event Replay: Event replay is the process of re-reading stored events from an event store to reconstruct the state of an aggregate, rebuild a projection, or bootstrap a new view of the data
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Event Replay
	:og:type: article
	:og:description: Event replay is the process of re-reading stored events from an event store to reconstruct the state of an aggregate, rebuild a projection, or bootstrap a new view of the data
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/event-replay.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Event Replay","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:41:56 +0000","dateModified":"Thu, 09 Jul 2026 08:41:56 +0000","description":"Event replay is the process of re-reading stored events from an event store to reconstruct the state of an aggregate, rebuild a projection, or bootstrap a new view of the data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Event Replay.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Event Replay
------------

Event replay is the process of re-reading stored events from an event store to reconstruct the state of an aggregate, rebuild a projection, or bootstrap a new view of the data.

In event sourcing, the current state of any aggregate is not stored directly: it is always derived by loading the aggregate's event stream and applying each event in order. This is event replay at the aggregate level. For a simple entity, replaying tens or hundreds of events takes microseconds; for aggregates with thousands of events, snapshots are used to avoid replaying the entire history on every load.

Replay is also used at the projection level: a read model can be dropped and rebuilt entirely from the event store by replaying all events through the projection's handlers. This is invaluable for fixing bugs in projections, adding new read models, and migrating to a new schema.

Temporal replay enables querying the state of the system at any point in the past by replaying events up to a given timestamp.

.. code-block:: php
   
   <?php
   
   // Reconstruct aggregate state by replaying its event stream
   class Order {
       private string $status = 'new';
       private float  $total  = 0.0;
   
       public static function reconstitute(array $events): self {
           $order = new self();
           foreach ($events as $event) {
               $order->apply($event);
           }
           return $order;
       }
   
       private function apply(object $event): void {
           match (true) {
               $event instanceof OrderPlaced   => $this->total  = $event->total,
               $event instanceof OrderShipped  => $this->status = 'shipped',
               $event instanceof OrderCancelled => $this->status = 'cancelled',
               default                         => null,
           };
       }
   }
   
   // Rebuild a projection from the event store
   class RebuildOrderSummaryProjection {
       public function run(EventStore $store): void {
           $this->db->exec('TRUNCATE order_summaries');
           foreach ($store->loadAll('orders') as $event) {
               $this->project($event);
           }
       }
   }
   
   ?>


`Documentation <https://martinfowler.com/eaaDev/EventSourcing.html>`__

Related : :ref:`Event Store <event-store>`, :ref:`Event Sourcing <event-sourcing>`, :ref:`Event Streaming <event-streaming>`, :ref:`Snapshot <snapshot>`, :ref:`Domain Design Driven (DDD) <ddd>`, :ref:`Temporal Replay <temporal-replay>`
