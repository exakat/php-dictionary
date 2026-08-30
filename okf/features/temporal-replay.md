---
type: "concept"
title: "Temporal Replay"
description: "Temporal replay is the technique of re-executing a recorded sequence of timestamped events, in their original order, to reconstruct the state a system had at any point in time, or to reproduce a past execution for debugging, testing, or auditing."
resource: "https://martinfowler.com/eaaDev/EventSourcing.html"
tags: ["concept", "paradigm"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Temporal Replay

Temporal replay is the technique of re-executing a recorded sequence of timestamped events, in their original order, to reconstruct the state a system had at any point in time, or to reproduce a past execution for debugging, testing, or auditing. It differs from a plain snapshot, which only captures a single state, in that it makes every intermediate state reachable, simply by stopping the replay at the desired timestamp.

Temporal replay is central to event-sourced systems, where the event store is the source of truth, and the current state is only ever a projection obtained by replaying events from the beginning, or from the last snapshot. It is also the mechanism behind time-travel debuggers, which record every step of a program's execution so it can be replayed backwards and forwards, and behind chaos-engineering tools, which replay recorded production traffic against a new version of a service to compare its behavior.

Because temporal replay depends on determinism, replaying the same events the same way should produce the same state, side effects, such as sending an email or calling an external API, are usually recorded, or stubbed, rather than actually re-executed during a replay.

## Documentation
- [https://martinfowler.com/eaaDev/EventSourcing.html](https://martinfowler.com/eaaDev/EventSourcing.html)

## See Also
- [Martin Fowler: CQRS](https://martinfowler.com/bliki/CQRS.html)
- [Time travel debugging - Wikipedia](https://en.wikipedia.org/wiki/Time_travel_debugging)

## Related
- [Event Sourcing](/features/event-sourcing.md)
- [Event Replay](/features/event-replay.md)
- [Time Travel](/features/time-travel.md)
- [Replay](/features/replay.md)
- [Snapshot](/features/snapshot.md)
- [Command Query Responsibility Segregation (CQRS)](/features/cqrs.md)

