---
type: "PHP Feature"
title: "Event Sourcing"
description: "Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored."
resource: "https://martinfowler.com/eaaDev/EventSourcing.html"
tags: ["paradigm"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Event Sourcing

Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored. The current state is derived by replaying those events.

Event sourcing provides a full audit trail. It never loses history. Every change is recorded with a timestamp and context, which is invaluable for debugging, compliance, and support.

Event sourcing allows for time travel. It is possible to reconstruct the state of any entity at any point in the past by replaying events up to a given timestamp.

Event sourcing emphasize on decoupled side effects. Different parts of the system can react to events asynchronously, such as sending emails, updating read models, triggering workflows. All that without coupling them to the write logic.

Event sourcing pairs naturally with CQRS. The event stream is the write side; it relies on optimized read models, also called projections, and processes those events separately.

## Documentation
- [https://martinfowler.com/eaaDev/EventSourcing.html](https://martinfowler.com/eaaDev/EventSourcing.html)

## See Also
- [Building a PHP CLI tool using DDD and Event Sourcing: getting started with EventSauce](https://tech.osteel.me/posts/building-a-php-cli-tool-using-ddd-and-event-sourcing-getting-started-with-eventsauce)

## Related
- [Event Storming](/features/event-storming.md)
- [Audit Trail](/features/audit-trail.md)
- [Command Query Responsibility Segregation (CQRS)](/features/cqrs.md)
- [Side Effect](/features/side-effect.md)
- [Time Travel](/features/time-travel.md)
- [Message Bus](/features/message-bus.md)
- [Snapshot](/features/snapshot.md)
- [Change Data Capture](/features/change-data-capture.md)
- [Compensation Logic](/features/compensation-logic.md)
- [Distributed Transactions](/features/distributed-transactions.md)
- [Event Replay](/features/event-replay.md)
- [Event Store](/features/event-store.md)
- [Event Streaming](/features/event-streaming.md)
- [Eventual Consistency](/features/eventual-consistency.md)
- [Replay](/features/replay.md)
- [Rich Domain Model](/features/rich-domain-model.md)

## Details
- Packagist: [temporal/sdk](https://packagist.org/packages/temporal/sdk)
- Packagist: [broadway/broadway](https://packagist.org/packages/broadway/broadway)
- Packagist: [eventsauce/eventsauce](https://packagist.org/packages/eventsauce/eventsauce)

