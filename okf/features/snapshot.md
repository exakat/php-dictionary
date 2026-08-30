---
type: "PHP Feature"
title: "Snapshot"
description: "A snapshot captures the complete state of an object or aggregate at a specific point in time."
resource: "https://en.wikipedia.org/wiki/Memento_pattern"
tags: ["design pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://en.wikipedia.org/wiki/Memento_pattern](https://en.wikipedia.org/wiki/Memento_pattern)

## See Also
- [Spatie Snapshot Testing](https://github.com/spatie/pest-plugin-snapshots)

## Related
- [Event Sourcing](/features/event-sourcing.md)
- [Immutable](/features/immutable.md)
- [Serialization](/features/serialization.md)
- [Test](/features/test.md)
- [Design Pattern](/features/design-pattern.md)
- [Object Persistence](/features/object-persistence.md)
- [Domain Design Driven (DDD)](/features/ddd.md)

## Details
- Packagist: [spatie/pest-plugin-snapshots](https://packagist.org/packages/spatie/pest-plugin-snapshots)

