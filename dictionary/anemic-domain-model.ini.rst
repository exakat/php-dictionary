.. _anemic-domain-model:
.. _anemic-model:
.. _anemic-domain:
.. meta::
	:description:
		Anemic Domain Model: The anemic domain model is an anti-pattern identified by Martin Fowler where domain objects, contain only data, getters, setters, and no business logic.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anemic Domain Model
	:twitter:description: Anemic Domain Model: The anemic domain model is an anti-pattern identified by Martin Fowler where domain objects, contain only data, getters, setters, and no business logic
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Anemic Domain Model
	:og:type: article
	:og:description: The anemic domain model is an anti-pattern identified by Martin Fowler where domain objects, contain only data, getters, setters, and no business logic
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/anemic-domain-model.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Anemic Domain Model","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:54:48 +0000","dateModified":"Thu, 02 Jul 2026 08:54:48 +0000","description":"The anemic domain model is an anti-pattern identified by Martin Fowler where domain objects, contain only data, getters, setters, and no business logic","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Anemic Domain Model.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Anemic Domain Model
-------------------

The anemic domain model is an anti-pattern identified by Martin Fowler where domain objects, contain only data, getters, setters, and no business logic. All business logic is instead placed in service classes that operate on these passive data containers.

The result is a structural inversion: the domain layer becomes a schema mirror, while service classes accumulate all the behaviour. This defeats the purpose of object-oriented design, where objects encapsulate both state and the operations that depend on that state.

The symptoms are recognisable: entities have only getters/setters, service classes are large and growing, business rules are scattered across multiple services, and the same validation or computation is duplicated in several places.

The alternative is the rich domain model, where entities enforce their own invariants, expose meaningful behaviour, and reject invalid state. This is the model advocated by Domain-Driven Design.

Anemic models often emerge from ORM-first design, where Doctrine or Eloquent entities are modelled around the database schema rather than the domain.

.. code-block:: php
   
   <?php
   
   // Anemic: Order is a data bag; all logic in OrderService
   class Order {
       public int    $id;
       public string $status;
       public float  $total;
       public array  $items = [];
   }
   
   class OrderService {
       public function ship(Order $order): void {
           if ($order->status !== 'paid') {          // business rule in service
               throw new \LogicException('...');
           }
           $order->status = 'shipped';               // service mutates the entity
           $this->repository->save($order);
       }
   }
   
   // Rich: Order enforces its own invariants
   class Order {
       private string $status = 'new';
   
       public function ship(): void {
           if ($this->status !== 'paid') {           // rule lives in the entity
               throw new \DomainException('Order must be paid before shipping.');
           }
           $this->status = 'shipped';
           $this->record(new OrderShipped($this->id));
       }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Anemic_domain_model>`__

See also `Rich vs Anemic Entities in PHP with Doctrine: How to Structure Your Business Logic Right <https://dev.to/mykola_vantukh/rich-vs-anemic-entities-in-php-how-to-structure-your-business-logic-right-7a0>`_ and `Martin Fowler: Anemic Domain Model <https://martinfowler.com/bliki/AnemicDomainModel.html>`_.

Related : :ref:`Rich Domain Model <rich-domain-model>`, :ref:`Domain Design Driven (DDD) <ddd>`, :ref:`Domain <domain>`, :ref:`OOP (Object Oriented Programming) <oop>`, :ref:`Layered Architecture <layered-architecture>`
