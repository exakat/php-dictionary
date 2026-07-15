.. _cap-theorem:
.. _cap:
.. _brewer-theorem:
.. meta::
	:description:
		CAP Theorem: The CAP theorem (Brewer's theorem) states that a distributed data store can provide at most two of the following three guarantees simultaneously:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: CAP Theorem
	:twitter:description: CAP Theorem: The CAP theorem (Brewer's theorem) states that a distributed data store can provide at most two of the following three guarantees simultaneously:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: CAP Theorem
	:og:type: article
	:og:description: The CAP theorem (Brewer's theorem) states that a distributed data store can provide at most two of the following three guarantees simultaneously:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cap-theorem.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cap-theorem.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cap-theorem.ini.html","name":"CAP Theorem","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 15:19:25 +0000","dateModified":"Tue, 30 Jun 2026 15:19:25 +0000","description":"The CAP theorem (Brewer's theorem) states that a distributed data store can provide at most two of the following three guarantees simultaneously:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/CAP Theorem.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


CAP Theorem
-----------

The CAP theorem (Brewer's theorem) states that a distributed data store can provide at most two of the following three guarantees simultaneously:

+ Consistency: every read receives the most recent write or an error. All nodes see the same data at the same time.
+ Availability: every request receives a non-error response, though it may not reflect the most recent write.
+ Partition tolerance: the system continues to operate even if network messages are dropped or delayed between nodes.

Since network partitions are unavoidable in real distributed systems, the practical choice is between CP (consistent and partition-tolerant, e.g., HBase, ZooKeeper) and AP (available and partition-tolerant, e.g., Cassandra, CouchDB).

PHP applications interact with distributed stores from the client side, selecting a backend that matches their consistency or availability requirements.

.. code-block:: php
   
   <?php
   
   // CP: Redis with WAIT ensures synchronous replication before returning
   $redis = new Redis();
   $redis->connect('redis-primary', 6379);
   $redis->set('balance', 100);
   $redis->wait(1, 100); // wait for 1 replica, 100 ms timeout
   
   // AP: reading from a replica may return stale data
   $replica = new Redis();
   $replica->connect('redis-replica', 6379);
   $balance = $replica->get('balance'); // possibly a past value
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/CAP_theorem>`__

See also `CAP theorem <https://en.wikipedia.org/wiki/CAP_theorem>`_ and `Brewer's conjecture (original paper) <https://dl.acm.org/doi/10.1145/564585.564601>`_.

Related : :ref:`Distributed Systems <distributed-systems>`, :ref:`Eventual Consistency <eventual-consistency>`, :ref:`Consistency <consistency>`, :ref:`Availability <availability>`, :ref:`ACID <acid>`, :ref:`Nosql Database <nosql-database>`, :ref:`Distributed Transactions <distributed-transactions>`
