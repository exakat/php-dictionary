# Event Replay
Event replay is the process of re-reading stored events from an event store to reconstruct the state of an aggregate, rebuild a projection, or bootstrap a new view of the data.

In event sourcing, the current state of any aggregate is not stored directly: it is always derived by loading the aggregate's event stream and applying each event in order. This is event replay at the aggregate level. For a simple entity, replaying tens or hundreds of events takes microseconds; for aggregates with thousands of events, snapshots are used to avoid replaying the entire history on every load.

Replay is also used at the projection level: a read model can be dropped and rebuilt entirely from the event store by replaying all events through the projection's handlers. This is invaluable for fixing bugs in projections, adding new read models, and migrating to a new schema.

Temporal replay enables querying the state of the system at any point in the past by replaying events up to a given timestamp.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-replay.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-replay.html","name":"Event Replay","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 13:29:05 +0000","dateModified":"Sun, 09 Aug 2026 13:29:05 +0000","description":"Event replay is the process of re-reading stored events from an event store to reconstruct the state of an aggregate, rebuild a projection, or bootstrap a new view of the data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Event Replay.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"event-replay"}]}]}</script>
```php
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
```

**[Documentation](https://martinfowler.com/eaaDev/EventSourcing.html)**
## See Also

+ [EventStore documentation](https://developers.eventstore.com/)
+ [Broadway: CQRS and event sourcing library for PHP](https://github.com/broadway/broadway)

## Related

+ [Event Store](event-store.html)
+ [Event Sourcing](event-sourcing.html)
+ [Event Streaming](event-streaming.html)
+ [Snapshot](snapshot.html)
+ [Domain Design Driven (DDD)](ddd.html)
+ [Temporal Replay](temporal-replay.html)
