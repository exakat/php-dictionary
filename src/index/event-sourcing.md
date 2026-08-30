# Event Sourcing
Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored. The current state is derived by replaying those events.

Event sourcing provides a full audit trail. It never loses history. Every change is recorded with a timestamp and context, which is invaluable for debugging, compliance, and support.

Event sourcing allows for time travel. It is possible to reconstruct the state of any entity at any point in the past by replaying events up to a given timestamp.

Event sourcing emphasize on decoupled side effects. Different parts of the system can react to events asynchronously, such as sending emails, updating read models, triggering workflows. All that without coupling them to the write logic.

Event sourcing pairs naturally with CQRS. The event stream is the write side; it relies on optimized read models, also called projections, and processes those events separately.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-sourcing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-sourcing.html","name":"Event Sourcing","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 09:14:33 +0000","dateModified":"Tue, 30 Jun 2026 09:14:33 +0000","description":"Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-sourcing.html"]}],"keywords":["paradigm"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-storming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/audit-trail.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cqrs.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/side-effect.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/time-travel.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-bus.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snapshot.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/change-data-capture.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compensation-logic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-transactions.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-replay.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-store.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-streaming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eventual-consistency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/replay.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rich-domain-model.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/martinfowler.com\/eaaDev\/EventSourcing.html"},{"@type":"CreativeWork","name":"Building a PHP CLI tool using DDD and Event Sourcing: getting started with EventSauce","url":"https:\/\/tech.osteel.me\/posts\/building-a-php-cli-tool-using-ddd-and-event-sourcing-getting-started-with-eventsauce"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"event-sourcing"}]}]}</script>
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
