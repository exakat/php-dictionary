# Temporal Replay
Temporal replay is the technique of re-executing a recorded sequence of timestamped events, in their original order, to reconstruct the state a system had at any point in time, or to reproduce a past execution for debugging, testing, or auditing. It differs from a plain snapshot, which only captures a single state, in that it makes every intermediate state reachable, simply by stopping the replay at the desired timestamp.

Temporal replay is central to event-sourced systems, where the event store is the source of truth, and the current state is only ever a projection obtained by replaying events from the beginning, or from the last snapshot. It is also the mechanism behind time-travel debuggers, which record every step of a program's execution so it can be replayed backwards and forwards, and behind chaos-engineering tools, which replay recorded production traffic against a new version of a service to compare its behavior.

Because temporal replay depends on determinism, replaying the same events the same way should produce the same state, side effects, such as sending an email or calling an external API, are usually recorded, or stubbed, rather than actually re-executed during a replay.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/temporal-replay.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/temporal-replay.html","name":"Temporal Replay","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:15:08 +0000","dateModified":"Fri, 10 Jul 2026 09:15:08 +0000","description":"Temporal replay is the technique of re-executing a recorded sequence of timestamped events, in their original order, to reconstruct the state a system had at any point in time, or to reproduce a past execution for debugging, testing, or auditing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Temporal Replay.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://martinfowler.com/eaaDev/EventSourcing.html)**
## Related

+ [Event Sourcing](event-sourcing.ini.html)
+ [Event Replay](event-replay.ini.html)
+ [Time Travel](time-travel.ini.html)
+ [Replay](replay.ini.html)
+ [Snapshot](snapshot.ini.html)
+ [Command Query Responsibility Segregation (CQRS)](cqrs.ini.html)
