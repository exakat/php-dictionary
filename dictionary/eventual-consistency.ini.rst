.. _eventual-consistency:
.. meta::
	:description:
		Eventual Consistency: Eventual consistency is a data consistency model used in distributed systems where replicas of the same data are allowed to diverge temporarily, but are guaranteed to converge to the same value if no new updates are made.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Eventual Consistency
	:twitter:description: Eventual Consistency: Eventual consistency is a data consistency model used in distributed systems where replicas of the same data are allowed to diverge temporarily, but are guaranteed to converge to the same value if no new updates are made
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Eventual Consistency
	:og:type: article
	:og:description: Eventual consistency is a data consistency model used in distributed systems where replicas of the same data are allowed to diverge temporarily, but are guaranteed to converge to the same value if no new updates are made
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/eventual-consistency.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Eventual Consistency","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 15:03:23 +0000","dateModified":"Tue, 30 Jun 2026 15:03:23 +0000","description":"Eventual consistency is a data consistency model used in distributed systems where replicas of the same data are allowed to diverge temporarily, but are guaranteed to converge to the same value if no new updates are made","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Eventual Consistency.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Eventual Consistency
--------------------

Eventual consistency is a data consistency model used in distributed systems where replicas of the same data are allowed to diverge temporarily, but are guaranteed to converge to the same value if no new updates are made.

It is a weaker guarantee than strong consistency, where all nodes see the same data at the same time, or ACID transactions, which guarantee immediate, atomic consistency. Eventual consistency trades immediate correctness for higher availability and partition tolerance: the AP side of the CAP theorem.

In practice, eventual consistency means a write to one node may not be immediately visible on another. A user updating their profile may see the old value for a few hundred milliseconds while the change propagates to read replicas.

In applications, eventual consistency arises when using: read replicas which write to primary and read from replica, caches which serve stale data after a write, event sourcing where projections lag behind the event store, or microservices communicating via events rather than synchronous API calls.

.. code-block:: php
   
   <?php
   
       // Common PHP scenario: write to primary, read from read replica
       // The replica may lag by milliseconds — eventual consistency
       
       $primary = new PDO($primaryDsn);
       $replica = new PDO($replicaDsn);
       
       $primary->exec('UPDATE users SET name = \'Alice\' WHERE id = 1');
       
       // Reading immediately from the replica may return the old name
       $row = $replica->query('SELECT name FROM users WHERE id = 1')->fetch();
       // $row['name'] could still be 'Bob' for a brief window
       
       // Mitigation: read-your-own-writes — read from primary just after a write
       // or use a sticky session to route reads to the same node for a period
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Eventual_consistency>`__

Related : :ref:`Consistency <consistency>`, :ref:`ACID <acid>`, :ref:`Distributed Systems <distributed-systems>`, :ref:`Event Sourcing <event-sourcing>`, :ref:`Distributed Transactions <distributed-transactions>`, :ref:`Cache <cache>`
