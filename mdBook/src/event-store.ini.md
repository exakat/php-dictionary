# Event Store
An event store is an append-only database that stores domain events as the primary source of truth. Instead of persisting the current state of an entity, as a traditional relational database does, the event store records every state-changing event in the order it occurred. The current state is derived by replaying all events for a given aggregate.

Event stores have three fundamental properties: events are immutable, as in never updated or deleted, ordered, as in within an aggregate stream, and complete , as in no information is lost. This makes them naturally auditable, debuggable, and replayable.

An event store differs from a general-purpose message queue: it is designed for long-term persistence and random-access replay, not just for transient message delivery. EventStoreDB is a purpose-built event store. Kafka is also used as an event store when configured with long retention periods.

In event-sourcing implementations, the event store is typically an abstraction over a PostgreSQL table, with JSON event payloads, Kafka, or EventStoreDB. Libraries such as Prooph or Broadway provide event store interfaces.
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

## See Also

+ [EventStoreDB](https://www.eventstore.com/)

Related : [Event Sourcing](Event Sourcing), [Event Replay](Event Replay), [Event Streaming](Event Streaming), [Audit Trail](Audit Trail), [Domain Design Driven (DDD)](Domain Design Driven (DDD))
