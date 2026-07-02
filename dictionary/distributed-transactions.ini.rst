.. _distributed-transactions:
.. _two-phase-commit:
.. _2pc:
.. meta::
	:description:
		Distributed Transactions: A distributed transaction is a transaction that spans multiple independent data stores or services, requiring all participants to agree on the outcome (all commit or all abort).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Distributed Transactions
	:twitter:description: Distributed Transactions: A distributed transaction is a transaction that spans multiple independent data stores or services, requiring all participants to agree on the outcome (all commit or all abort)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Distributed Transactions
	:og:type: article
	:og:description: A distributed transaction is a transaction that spans multiple independent data stores or services, requiring all participants to agree on the outcome (all commit or all abort)
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/distributed-transactions.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Distributed Transactions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 08:47:20 +0000","dateModified":"Tue, 30 Jun 2026 08:47:20 +0000","description":"A distributed transaction is a transaction that spans multiple independent data stores or services, requiring all participants to agree on the outcome (all commit or all abort)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Distributed Transactions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Distributed Transactions
------------------------

A distributed transaction is a transaction that spans multiple independent data stores or services, requiring all participants to agree on the outcome (all commit or all abort).

The classic protocol is Two-Phase Commit, 2PC: a coordinator sends a PREPARE request to all participants; if all reply OK, the coordinator sends COMMIT; otherwise it sends ROLLBACK. 2PC is blocking: if the coordinator crashes after PREPARE, participants may be locked indefinitely.

In microservices, distributed transactions are largely avoided because they require all participating services to be available simultaneously, undermining the independence and fault isolation that microservices are designed to provide.

The preferred alternative is the Saga pattern: a long-running business process is decomposed into a sequence of local transactions, each publishing an event. If a step fails, a compensation transaction undoes the previous steps.

PHP applications typically avoid distributed transactions by using a single database, or by embracing eventual consistency and the Saga pattern in microservices contexts.

.. code-block:: php
   
   <?php
   
   // Saga pattern: choreography-based (event-driven)
   // Each service handles its local transaction and publishes an event.
   // No central coordinator — services react to each other's events.
   
   // 1. OrderService places order and publishes OrderPlaced
   $order = Order::place($data);
   $orderRepository->save($order);
   $eventBus->publish(new OrderPlaced($order->id, $order->total));
   
   // 2. PaymentService listens for OrderPlaced, charges the card
   //    On success: publishes PaymentProcessed
   //    On failure: publishes PaymentFailed -> OrderService compensates (cancels order)
   
   // 3. InventoryService listens for PaymentProcessed, reserves stock
   //    On failure: publishes StockUnavailable -> PaymentService compensates (refund)
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Distributed_transaction>`__

See also `Wikipedia: Distributed transaction <https://en.wikipedia.org/wiki/Distributed_transaction>`_ and `Saga pattern <https://microservices.io/patterns/data/saga.html>`_.

Related : :ref:`ACID <acid>`, :ref:`Eventual Consistency <eventual-consistency>`, :ref:`Compensation Logic <compensation-logic>`, :ref:`Event Sourcing <event-sourcing>`, :ref:`Microservice <microservice>`, :ref:`Distributed Systems <distributed-systems>`
