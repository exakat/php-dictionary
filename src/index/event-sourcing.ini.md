# Event Sourcing
Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored. The current state is derived by replaying those events.

Event sourcing provides a full audit trail. It never loses history. Every change is recorded with a timestamp and context, which is invaluable for debugging, compliance, and support.

Event sourcing allows for time travel. It is possible to reconstruct the state of any entity at any point in the past by replaying events up to a given timestamp.

Event sourcing emphasize on decoupled side effects. Different parts of the system can react to events asynchronously, such as sending emails, updating read models, triggering workflows. All that without coupling them to the write logic.

Event sourcing pairs naturally with CQRS. The event stream is the write side; it relies on optimized read models, also called projections, and processes those events separately.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/event-sourcing.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/event-sourcing.ini.html","name":"Event Sourcing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 09:14:33 +0000","dateModified":"Tue, 30 Jun 2026 09:14:33 +0000","description":"Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Event Sourcing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://martinfowler.com/eaaDev/EventSourcing.html)**
## See Also

+ [Building a PHP CLI tool using DDD and Event Sourcing: getting started with EventSauce](https://tech.osteel.me/posts/building-a-php-cli-tool-using-ddd-and-event-sourcing-getting-started-with-eventsauce)

## Related

+ [Event Storming](event-storming.ini.html)
+ [Audit Trail](audit-trail.ini.html)
+ [Command Query Responsibility Segregation (CQRS)](cqrs.ini.html)
+ [Side Effect](side-effect.ini.html)
+ [Time Travel](time-travel.ini.html)
+ [Message Bus](message-bus.ini.html)
+ [Snapshot](snapshot.ini.html)
+ [Change Data Capture](change-data-capture.ini.html)
+ [Compensation Logic](compensation-logic.ini.html)
+ [Distributed Transactions](distributed-transactions.ini.html)
+ [Event Replay](event-replay.ini.html)
+ [Event Store](event-store.ini.html)
+ [Event Streaming](event-streaming.ini.html)
+ [Eventual Consistency](eventual-consistency.ini.html)
+ [Replay](replay.ini.html)
+ [Rich Domain Model](rich-domain-model.ini.html)

## Related packages

+ [temporal/sdk](https://packagist.org/packages/temporal/sdk)
+ [broadway/broadway](https://packagist.org/packages/broadway/broadway)
+ [eventsauce/eventsauce](https://packagist.org/packages/eventsauce/eventsauce)
