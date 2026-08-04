# Change Data Capture
Change Data Capture, or CDC, is a pattern that tracks and records row-level changes in a database, such as inserts, updates, and deletes, and makes them available to other systems in near real-time.

Instead of periodically polling the database for differences, CDC taps into the database's transaction log, such as the Write-Ahead Log in PostgreSQL or the binary log in MySQL, to detect changes as they are committed. This makes it both efficient and low-latency.

CDC is commonly used to feed downstream consumers such as search indexes, caches, analytics pipelines, or microservices that need to react to data changes without being tightly coupled to the originating system.

It is a natural complement to event-driven architectures: each database change becomes an event that can be published to a message broker like Kafka, allowing consumers to process it independently and asynchronously.

CDC also supports data replication and synchronization across heterogeneous systems, making it a key building block in ETL pipelines, data warehousing, and zero-downtime migrations.
Related : [Event Sourcing](Event Sourcing), [Event Driven](Event Driven), [Message Queue](Message Queue), [Pub/Sub](Pub/Sub), [Audit Trail](Audit Trail), [Database](Database), [Command Query Responsibility Segregation (CQRS)](Command Query Responsibility Segregation (CQRS)), [Migration](Migration)
