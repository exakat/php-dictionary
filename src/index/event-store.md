# Event Store
An event store is an append-only database that stores domain events as the primary source of truth. Instead of persisting the current state of an entity, as a traditional relational database does, the event store records every state-changing event in the order it occurred. The current state is derived by replaying all events for a given aggregate.

Event stores have three fundamental properties: events are immutable, as in never updated or deleted, ordered, as in within an aggregate stream, and complete , as in no information is lost. This makes them naturally auditable, debuggable, and replayable.

An event store differs from a general-purpose message queue: it is designed for long-term persistence and random-access replay, not just for transient message delivery. EventStoreDB is a purpose-built event store. Kafka is also used as an event store when configured with long retention periods.

In event-sourcing implementations, the event store is typically an abstraction over a PostgreSQL table, with JSON event payloads, Kafka, or EventStoreDB. Libraries such as Prooph or Broadway provide event store interfaces.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-store.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-store.html","name":"Event Store","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:49:25 +0000","dateModified":"Thu, 09 Jul 2026 08:49:25 +0000","description":"An event store is an append-only database that stores domain events as the primary source of truth","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Event Store.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Event Store"}]}]}</script>
```php
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
```

**[Documentation](https://en.wikipedia.org/wiki/Event_store)**
## See Also

+ [EventStoreDB](https://www.eventstore.com/)

## Related

+ [Event Sourcing](event-sourcing.html)
+ [Event Replay](event-replay.html)
+ [Event Streaming](event-streaming.html)
+ [Audit Trail](audit-trail.html)
+ [Domain Design Driven (DDD)](ddd.html)

## Related packages

+ [prooph/event-store](https://packagist.org/packages/prooph/event-store)
