# Snapshot
A snapshot captures the complete state of an object or aggregate at a specific point in time. It is commonly used as an optimization in event-sourced systems: instead of replaying the full event history to rebuild an aggregate, the system loads the latest snapshot and only replays events that occurred after it.

In testing, snapshot testing serializes the output of a component on the first run and stores it as a reference. Subsequent runs compare against this stored value, automatically detecting unintended changes to rendered output or computed results.

The Memento design pattern is the classical OOP formalization of the snapshot concept.
```php
<?php

final class OrderSnapshot {
    public function __construct(
        public readonly string            $orderId,
        public readonly OrderStatus       $status,
        public readonly DateTimeImmutable $at,
        public readonly int               $lastEventSequence,
    ) {}
}

?>
```

## See Also

+ [Spatie Snapshot Testing](https://github.com/spatie/pest-plugin-snapshots)

Related : [Event Sourcing](Event Sourcing), [Immutable](Immutable), [Serialization](Serialization), [Test](Test), [Design Pattern](Design Pattern), [Object Persistence](Object Persistence), [Domain Design Driven (DDD)](Domain Design Driven (DDD))
