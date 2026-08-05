# Change Data Capture
Change Data Capture, or CDC, is a pattern that tracks and records row-level changes in a database, such as inserts, updates, and deletes, and makes them available to other systems in near real-time.

Instead of periodically polling the database for differences, CDC taps into the database's transaction log, such as the Write-Ahead Log in PostgreSQL or the binary log in MySQL, to detect changes as they are committed. This makes it both efficient and low-latency.

CDC is commonly used to feed downstream consumers such as search indexes, caches, analytics pipelines, or microservices that need to react to data changes without being tightly coupled to the originating system.

It is a natural complement to event-driven architectures: each database change becomes an event that can be published to a message broker like Kafka, allowing consumers to process it independently and asynchronously.

CDC also supports data replication and synchronization across heterogeneous systems, making it a key building block in ETL pipelines, data warehousing, and zero-downtime migrations.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/change-data-capture.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/change-data-capture.ini.html","name":"Change Data Capture","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:38:23 +0000","dateModified":"Thu, 23 Jul 2026 13:38:23 +0000","description":"Change Data Capture, or CDC, is a pattern that tracks and records row-level changes in a database, such as inserts, updates, and deletes, and makes them available to other systems in near real-time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Change Data Capture.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://martinfowler.com/articles/201701-event-driven.html)**
## Related

+ [Event Sourcing](event-sourcing.ini.html)
+ [Event Driven](event-driven.ini.html)
+ [Message Queue](message-queue.ini.html)
+ [Pub/Sub](pubsub.ini.html)
+ [Audit Trail](audit-trail.ini.html)
+ [Database](database.ini.html)
+ [Command Query Responsibility Segregation (CQRS)](cqrs.ini.html)
+ [Migration](migration.ini.html)
