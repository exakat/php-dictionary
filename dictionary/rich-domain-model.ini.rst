.. _rich-domain-model:
.. _rich-model:
.. _behavioural-domain-model:
.. meta::
	:description:
		Rich Domain Model: A rich domain model is one where domain objects, entities, aggregates, value objects, encapsulate both state and the business behaviour that depends on that state.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Rich Domain Model
	:twitter:description: Rich Domain Model: A rich domain model is one where domain objects, entities, aggregates, value objects, encapsulate both state and the business behaviour that depends on that state
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Rich Domain Model
	:og:type: article
	:og:description: A rich domain model is one where domain objects, entities, aggregates, value objects, encapsulate both state and the business behaviour that depends on that state
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rich-domain-model.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rich-domain-model.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rich-domain-model.ini.html","name":"Rich Domain Model","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:33:57 +0000","dateModified":"Fri, 10 Jul 2026 09:33:57 +0000","description":"A rich domain model is one where domain objects, entities, aggregates, value objects, encapsulate both state and the business behaviour that depends on that state","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Rich Domain Model.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Rich Domain Model
-----------------

A rich domain model is one where domain objects, entities, aggregates, value objects, encapsulate both state and the business behaviour that depends on that state. Business rules, invariants, and domain logic live inside the objects themselves, not in external service classes.

A rich domain model is the alternative to the anemic domain model. Rather than exposing raw setters and relying on service classes to enforce rules, a rich entity exposes meaningful, intention-revealing methods that internally validate state transitions and enforce invariants.

Rich domain models align with the principles of Domain-Driven Design: the domain layer is the most important part of the codebase, the language of the code mirrors the language of the domain experts, and the objects protect themselves from invalid state.

Building a rich domain model means: using private properties with no public setters, returning new instances or recording domain events from methods, and throwing domain exceptions when a requested transition is invalid. Value objects are immutable and validated at construction.

.. code-block:: php
   
   <?php
   
       // Rich domain entity: Order enforces its own lifecycle
       final class Order {
           private OrderStatus $status;
           private Money       $total;
           private array       $events = [];
       
           private function __construct(OrderStatus $status, Money $total) {
               $this->status = $status;
               $this->total  = $total;
           }
       
           public static function place(CustomerId $customer, array $items): self {
               if (empty($items)) {
                   throw new \DomainException('An order must have at least one item.');
               }
               $total = Money::sum(array_map(fn($i) => $i->price, $items));
               $order = new self(OrderStatus::Pending, $total);
               $order->events[] = new OrderPlaced($customer, $total);
               return $order;
           }
       
           public function pay(Payment $payment): void {
               if (!$this->status->isPending()) {
                   throw new \DomainException('Only pending orders can be paid.');
               }
               if (!$payment->covers($this->total)) {
                   throw new \DomainException('Payment is insufficient.');
               }
               $this->status   = OrderStatus::Paid;
               $this->events[] = new OrderPaid($payment->id);
           }
       
           public function releaseEvents(): array {
               $events       = $this->events;
               $this->events = [];
               return $events;
           }
       }
   
   ?>


`Documentation <https://martinfowler.com/bliki/AnemicDomainModel.html>`__

See also `Anemic Domain Model vs Rich Domain Model with Examples <https://thevaluable.dev/anemic-domain-model/>`_ and `Rich vs Anemic Entities in PHP with Doctrine: How to Structure Your Business Logic Right <https://dev.to/mykola_vantukh/rich-vs-anemic-entities-in-php-how-to-structure-your-business-logic-right-7a0>`_.

Related : :ref:`Anemic Domain Model <anemic-domain-model>`, :ref:`Domain Design Driven (DDD) <ddd>`, :ref:`Domain <domain>`, :ref:`Value Object <value-object>`, :ref:`Event Sourcing <event-sourcing>`, :ref:`OOP (Object Oriented Programming) <oop>`
