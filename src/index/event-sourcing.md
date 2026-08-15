# Event Sourcing
Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored. The current state is derived by replaying those events.

Event sourcing provides a full audit trail. It never loses history. Every change is recorded with a timestamp and context, which is invaluable for debugging, compliance, and support.

Event sourcing allows for time travel. It is possible to reconstruct the state of any entity at any point in the past by replaying events up to a given timestamp.

Event sourcing emphasize on decoupled side effects. Different parts of the system can react to events asynchronously, such as sending emails, updating read models, triggering workflows. All that without coupling them to the write logic.

Event sourcing pairs naturally with CQRS. The event stream is the write side; it relies on optimized read models, also called projections, and processes those events separately.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-sourcing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-sourcing.html","name":"Event Sourcing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 09:14:33 +0000","dateModified":"Tue, 30 Jun 2026 09:14:33 +0000","description":"Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Event Sourcing.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"event-sourcing"}]}]}</script>
**[Documentation](https://martinfowler.com/eaaDev/EventSourcing.html)**
## See Also

+ [Building a PHP CLI tool using DDD and Event Sourcing: getting started with EventSauce](https://tech.osteel.me/posts/building-a-php-cli-tool-using-ddd-and-event-sourcing-getting-started-with-eventsauce)

## Related

+ [Event Storming](event-storming.html)
+ [Audit Trail](audit-trail.html)
+ [Command Query Responsibility Segregation (CQRS)](cqrs.html)
+ [Side Effect](side-effect.html)
+ [Time Travel](time-travel.html)
+ [Message Bus](message-bus.html)
+ [Snapshot](snapshot.html)
+ [Change Data Capture](change-data-capture.html)
+ [Compensation Logic](compensation-logic.html)
+ [Distributed Transactions](distributed-transactions.html)
+ [Event Replay](event-replay.html)
+ [Event Store](event-store.html)
+ [Event Streaming](event-streaming.html)
+ [Eventual Consistency](eventual-consistency.html)
+ [Replay](replay.html)
+ [Rich Domain Model](rich-domain-model.html)

## Related packages

+ [temporal/sdk](https://packagist.org/packages/temporal/sdk)
+ [broadway/broadway](https://packagist.org/packages/broadway/broadway)
+ [eventsauce/eventsauce](https://packagist.org/packages/eventsauce/eventsauce)
