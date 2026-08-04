# Event Sourcing
Event Sourcing is a pattern where instead of storing the current state of an entity, the sequence of events that led to that state is stored. The current state is derived by replaying those events.

Event sourcing provides a full audit trail. It never loses history. Every change is recorded with a timestamp and context, which is invaluable for debugging, compliance, and support.

Event sourcing allows for time travel. It is possible to reconstruct the state of any entity at any point in the past by replaying events up to a given timestamp.

Event sourcing emphasize on decoupled side effects. Different parts of the system can react to events asynchronously, such as sending emails, updating read models, triggering workflows. All that without coupling them to the write logic.

Event sourcing pairs naturally with CQRS. The event stream is the write side; it relies on optimized read models, also called projections, and processes those events separately.
## See Also

+ [Building a PHP CLI tool using DDD and Event Sourcing: getting started with EventSauce](https://tech.osteel.me/posts/building-a-php-cli-tool-using-ddd-and-event-sourcing-getting-started-with-eventsauce)

Related : [Event Storming](Event Storming), [Audit Trail](Audit Trail), [Command Query Responsibility Segregation (CQRS)](Command Query Responsibility Segregation (CQRS)), [Side Effect](Side Effect), [Time Travel](Time Travel), [Message Bus](Message Bus), [Snapshot](Snapshot), [Change Data Capture](Change Data Capture), [Compensation Logic](Compensation Logic), [Distributed Transactions](Distributed Transactions), [Event Replay](Event Replay), [Event Store](Event Store), [Event Streaming](Event Streaming), [Eventual Consistency](Eventual Consistency), [Replay](Replay), [Rich Domain Model](Rich Domain Model)
