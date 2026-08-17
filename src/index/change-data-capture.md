# Change Data Capture
Change Data Capture, or CDC, is a pattern that tracks and records row-level changes in a database, such as inserts, updates, and deletes, and makes them available to other systems in near real-time.

Instead of periodically polling the database for differences, CDC taps into the database's transaction log, such as the Write-Ahead Log in PostgreSQL or the binary log in MySQL, to detect changes as they are committed. This makes it both efficient and low-latency.

CDC is commonly used to feed downstream consumers such as search indexes, caches, analytics pipelines, or microservices that need to react to data changes without being tightly coupled to the originating system.

It is a natural complement to event-driven architectures: each database change becomes an event that can be published to a message broker like Kafka, allowing consumers to process it independently and asynchronously.

CDC also supports data replication and synchronization across heterogeneous systems, making it a key building block in ETL pipelines, data warehousing, and zero-downtime migrations.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/change-data-capture.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/change-data-capture.html","name":"Change Data Capture","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:38:23 +0000","dateModified":"Thu, 23 Jul 2026 13:38:23 +0000","description":"Change Data Capture, or CDC, is a pattern that tracks and records row-level changes in a database, such as inserts, updates, and deletes, and makes them available to other systems in near real-time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Change Data Capture.html"]}],"alternateName":["CDC"],"keywords":["paradigm","architecture","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-sourcing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-driven.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pubsub.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/audit-trail.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cqrs.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/migration.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/martinfowler.com\/articles\/201701-event-driven.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"change-data-capture"}]}]}</script>
**[Documentation](https://martinfowler.com/articles/201701-event-driven.html)**
## Related

+ [Event Sourcing](event-sourcing.html)
+ [Event Driven](event-driven.html)
+ [Message Queue](message-queue.html)
+ [Pub/Sub](pubsub.html)
+ [Audit Trail](audit-trail.html)
+ [Database](database.html)
+ [Command Query Responsibility Segregation (CQRS)](cqrs.html)
+ [Migration](migration.html)
