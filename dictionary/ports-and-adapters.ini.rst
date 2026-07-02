.. _ports-and-adapters:
.. meta::
	:description:
		Ports And Adapters: Ports and Adapters is the formal name for the pattern underlying hexagonal architecture, coined by Alistair Cockburn.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Ports And Adapters
	:twitter:description: Ports And Adapters: Ports and Adapters is the formal name for the pattern underlying hexagonal architecture, coined by Alistair Cockburn
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Ports And Adapters
	:og:type: article
	:og:description: Ports and Adapters is the formal name for the pattern underlying hexagonal architecture, coined by Alistair Cockburn
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ports-and-adapters.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Ports And Adapters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 15:16:06 +0000","dateModified":"Tue, 30 Jun 2026 15:16:06 +0000","description":"Ports and Adapters is the formal name for the pattern underlying hexagonal architecture, coined by Alistair Cockburn","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Ports And Adapters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Ports And Adapters
------------------

Ports and Adapters is the formal name for the pattern underlying hexagonal architecture, coined by Alistair Cockburn. It separates the application core from its external dependencies by defining two types of boundary:

A port is an interface declared by the application core. It expresses what the application needs or what it accepts without knowing anything about the outside world.

An adapter is an implementation of a port that bridges the application core to a specific technology. A database adapter implements a repository port; an HTTP adapter implements a web input port; a test adapter implements a port using in-memory fakes.

Input ports represent entry points into the application: HTTP controllers, CLI commands, queue consumers. Output ports represent dependencies the application calls: databases, email senders, external APIs.

This pattern is expressed through interfaces and dependency injection: the core declares an interface which acts as the port, and a framework or infrastructure class implements it, which acts as the adapter. The DI container wires them together.

.. code-block:: php
   
   <?php
   
   // Output port — declared in the domain layer
   interface OrderRepository {
       public function findById(int $id): ?Order;
       public function save(Order $order): void;
   }
   
   // Adapter — lives in the infrastructure layer
   class PdoOrderRepository implements OrderRepository {
       public function findById(int $id): ?Order { /* SQL */ }
       public function save(Order $order): void   { /* SQL */ }
   }
   
   // Test adapter — in-memory, no database needed
   class InMemoryOrderRepository implements OrderRepository {
       private array $store = [];
       public function findById(int $id): ?Order  { return $this->store[$id] ?? null; }
       public function save(Order $order): void    { $this->store[$order->id] = $order; }
   }
   
   // Input port — application service driven by an HTTP adapter (controller)
   class PlaceOrderUseCase {
       public function __construct(private OrderRepository $orders) {}
       public function execute(PlaceOrderCommand $cmd): Order { /* domain logic */ }
   }
   
   ?>


`Documentation <https://alistair.cockburn.us/hexagonal-architecture/>`__

See also `Alistair Cockburn: Hexagonal Architecture <https://alistair.cockburn.us/hexagonal-architecture/>`_.

Related : :ref:`Hexagonal Architecture <hexagonal>`, :ref:`Adapters <adapter>`, :ref:`Dependency Injection <dependency-injection>`, :ref:`Interface <interface>`, :ref:`Clean Architecture <clean-architecture>`, :ref:`Layered Architecture <layered-architecture>`, :ref:`Domain Design Driven (DDD) <ddd>`
