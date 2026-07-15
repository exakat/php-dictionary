.. _compensation-logic:
.. _compensating-transaction:
.. _saga-compensation:
.. meta::
	:description:
		Compensation Logic: Compensation logic refers to the set of actions taken to undo or neutralise the effects of a previously completed step when a subsequent step in a distributed process fails.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Compensation Logic
	:twitter:description: Compensation Logic: Compensation logic refers to the set of actions taken to undo or neutralise the effects of a previously completed step when a subsequent step in a distributed process fails
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Compensation Logic
	:og:type: article
	:og:description: Compensation logic refers to the set of actions taken to undo or neutralise the effects of a previously completed step when a subsequent step in a distributed process fails
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/compensation-logic.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/compensation-logic.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/compensation-logic.ini.html","name":"Compensation Logic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:15:27 +0000","dateModified":"Tue, 14 Jul 2026 06:15:27 +0000","description":"Compensation logic refers to the set of actions taken to undo or neutralise the effects of a previously completed step when a subsequent step in a distributed process fails","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Compensation Logic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Compensation Logic
------------------

Compensation logic refers to the set of actions taken to undo or neutralise the effects of a previously completed step when a subsequent step in a distributed process fails. It is the rollback mechanism for operations that cannot be part of a single ACID transaction.

The concept originates in the Saga pattern: a long-running business process is split into a sequence of local transactions. If transaction N fails, compensation transactions are executed in reverse order, N-1, N-2, ... to restore the system to a consistent state. Compensation is not always a perfect undo, a sent email cannot be unsent, a payment refunded is not the same as a payment never made.

Because compensation logic is domain-specific, it must be designed and tested explicitly. The failure modes of compensation steps themselves must also be handled.

Compensation logic is typically implemented as event handlers or command handlers that react to failure events published by downstream services.

.. code-block:: php
   
   <?php
   
   // Compensation handler: listens for PaymentFailed and cancels the order
   class CancelOrderOnPaymentFailed {
       public function __construct(
           private OrderRepository  $orders,
           private EventBus         $bus,
       ) {}
   
       public function handle(PaymentFailed $event): void {
           $order = $this->orders->findById($event->orderId);
   
           if ($order === null || $order->isCancelled()) {
               return; // idempotent — safe to call multiple times
           }
   
           $order->cancel(reason: 'payment_failed');
           $this->orders->save($order);
           $this->bus->publish(new OrderCancelled($order->id));
       }
   }
   
   ?>


`Documentation <https://microservices.io/patterns/data/saga.html>`__

Related : :ref:`Distributed Transactions <distributed-transactions>`, :ref:`Event Sourcing <event-sourcing>`, :ref:`Event Driven <event-driven>`, :ref:`Microservice <microservice>`, :ref:`Idempotent <idempotent>`, :ref:`ACID <acid>`
