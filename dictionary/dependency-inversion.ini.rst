.. _dependency-inversion:
.. _dip:
.. meta::
	:description:
		Dependency Inversion (DIP): The Dependency Inversion Principle, or DIP, is the D in SOLID.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dependency Inversion (DIP)
	:twitter:description: Dependency Inversion (DIP): The Dependency Inversion Principle, or DIP, is the D in SOLID
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dependency Inversion (DIP)
	:og:type: article
	:og:description: The Dependency Inversion Principle, or DIP, is the D in SOLID
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dependency-inversion.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dependency Inversion (DIP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 14:58:42 +0000","dateModified":"Tue, 30 Jun 2026 14:58:42 +0000","description":"The Dependency Inversion Principle, or DIP, is the D in SOLID","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dependency Inversion (DIP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dependency Inversion (DIP)
--------------------------

The Dependency Inversion Principle, or DIP, is the D in SOLID. It states: high-level modules should not depend on low-level modules; both should depend on abstractions. Abstractions should not depend on details; details should depend on abstractions.

In practice, this means a business-logic class should type-hint an interface, not a concrete implementation. The concrete class is injected from the outside, typically by a dependency injection container. The high-level class has no knowledge of which concrete class it will receive.

Dependency inversion has two effects: it decouples the high-level policy from low-level implementation details, and it makes the high-level class testable: a test can inject a mock or in-memory implementation instead of the real dependency.

Dependency inversion is often confused with dependency injection, or DI. DI is the mechanism for delivering the dependency\; DIP is the principle that governs which direction the dependency arrow should point. You can have DI without DIP, but DIP requires DI (or a service locator) to be applied.

DIP is expressed through interfaces, abstract classes, and a DI container.

.. code-block:: php
   
   <?php
   
   // Violation: high-level class depends on a concrete low-level class
   class OrderService {
       private MySQLOrderRepository $repo; // concrete — tightly coupled
   
       public function place(array $data): Order {
           return $this->repo->save(Order::from($data));
       }
   }
   
   // DIP applied: both depend on an abstraction (interface)
   interface OrderRepository {
       public function save(Order $order): Order;
       public function findById(int $id): ?Order;
   }
   
   class OrderService {
       public function __construct(
           private OrderRepository $repo, // abstraction — no concrete dependency
       ) {}
   
       public function place(array $data): Order {
           return $this->repo->save(Order::from($data));
       }
   }
   
   // In tests: inject an in-memory implementation
   $service = new OrderService(new InMemoryOrderRepository());
   
   // In production: inject the real implementation via DI container
   // $container->bind(OrderRepository::class, MySQLOrderRepository::class);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Dependency_inversion_principle>`__

See also `Wikipedia: Dependency inversion principle <https://en.wikipedia.org/wiki/Dependency_inversion_principle>`_.

Related : :ref:`SOLID <solid>`, :ref:`Dependency Injection <dependency-injection>`, :ref:`Interface <interface>`, :ref:`Decoupling <decoupling>`, :ref:`Coupling <coupling>`, :ref:`Ports And Adapters <ports-and-adapters>`
