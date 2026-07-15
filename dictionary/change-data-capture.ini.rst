.. _change-data-capture:
.. _CDC:
.. meta::
	:description:
		Change Data Capture: Change Data Capture (CDC) is a pattern that tracks and records row-level changes in a database, such as inserts, updates, and deletes, and makes them available to other systems in near real-time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Change Data Capture
	:twitter:description: Change Data Capture: Change Data Capture (CDC) is a pattern that tracks and records row-level changes in a database, such as inserts, updates, and deletes, and makes them available to other systems in near real-time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Change Data Capture
	:og:type: article
	:og:description: Change Data Capture (CDC) is a pattern that tracks and records row-level changes in a database, such as inserts, updates, and deletes, and makes them available to other systems in near real-time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/change-data-capture.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/change-data-capture.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/change-data-capture.ini.html","name":"Change Data Capture","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 17:10:09 +0000","dateModified":"Fri, 19 Jun 2026 17:10:09 +0000","description":"Change Data Capture (CDC) is a pattern that tracks and records row-level changes in a database, such as inserts, updates, and deletes, and makes them available to other systems in near real-time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Change Data Capture.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Change Data Capture
-------------------

Change Data Capture (CDC) is a pattern that tracks and records row-level changes in a database, such as inserts, updates, and deletes, and makes them available to other systems in near real-time.

Instead of periodically polling the database for differences, CDC taps into the database's transaction log, such as the Write-Ahead Log in PostgreSQL or the binary log in MySQL, to detect changes as they are committed. This makes it both efficient and low-latency.

CDC is commonly used to feed downstream consumers such as search indexes, caches, analytics pipelines, or microservices that need to react to data changes without being tightly coupled to the originating system.

It is a natural complement to event-driven architectures: each database change becomes an event that can be published to a message broker like Kafka, allowing consumers to process it independently and asynchronously.

CDC also supports data replication and synchronization across heterogeneous systems, making it a key building block in ETL pipelines, data warehousing, and zero-downtime migrations.

`Documentation <https://martinfowler.com/articles/201701-event-driven.html>`__

Related : :ref:`Event Sourcing <event-sourcing>`, :ref:`Event Driven <event-driven>`, :ref:`Message Queue <message-queue>`, :ref:`Pub/Sub <pubsub>`, :ref:`Audit Trail <audit-trail>`, :ref:`Database <database>`, :ref:`Command Query Responsibility Segregation (CQRS) <cqrs>`, :ref:`Migration <migration>`
