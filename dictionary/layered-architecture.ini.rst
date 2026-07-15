.. _layered-architecture:
.. _n-tier-architecture:
.. _three-tier-architecture:
.. _multi-tier-architecture:
.. meta::
	:description:
		Layered Architecture: Layered architecture organises a codebase into horizontal layers, each with a specific responsibility, where each layer only depends on the layer directly below it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Layered Architecture
	:twitter:description: Layered Architecture: Layered architecture organises a codebase into horizontal layers, each with a specific responsibility, where each layer only depends on the layer directly below it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Layered Architecture
	:og:type: article
	:og:description: Layered architecture organises a codebase into horizontal layers, each with a specific responsibility, where each layer only depends on the layer directly below it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/layered-architecture.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/layered-architecture.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/layered-architecture.ini.html","name":"Layered Architecture","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:09:15 +0000","dateModified":"Tue, 07 Jul 2026 05:09:15 +0000","description":"Layered architecture organises a codebase into horizontal layers, each with a specific responsibility, where each layer only depends on the layer directly below it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Layered Architecture.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Layered Architecture
--------------------

Layered architecture organises a codebase into horizontal layers, each with a specific responsibility, where each layer only depends on the layer directly below it. The classic four layers are: presentation, business logic, data access, and infrastructure.

The Presentation layer handles user interaction and HTTP concerns, with controllers, templates. The Business Logic layer contains domain rules and application workflows. The Data Access layer, such as repository or DAO, abstracts persistence. The Infrastructure layer wraps external systems, like email, queues, file storage.

Layered architecture is the implicit structure of most MVC frameworks: controllers belong to the presentation layer, services to the business logic layer, and repositories to the data access layer.

The main risk is layer bleeding: business logic leaking into controllers, aka fat controller, or SQL queries scattered through the business layer. The anemic domain model anti-pattern often accompanies layered architecture when domain logic is spread across service classes rather than entities.

.. code-block:: php
   
   <?php
   
   // Presentation layer — controller
   class OrderController {
       public function __construct(private OrderService $service) {}
   
       public function create(Request $request): Response {
           $order = $this->service->placeOrder($request->validated());
           return new JsonResponse($order->toArray(), 201);
       }
   }
   
   // Business logic layer — service
   class OrderService {
       public function __construct(private OrderRepository $orders) {}
   
       public function placeOrder(array $data): Order {
           $order = Order::new($data);
           $order->validate();
           return $this->orders->save($order);
       }
   }
   
   // Data access layer — repository
   class OrderRepository {
       public function save(Order $order): Order {
           $this->pdo->prepare('INSERT INTO orders ...');
           return $order;
       }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Multitier_architecture>`__

Related : :ref:`Hexagonal Architecture <hexagonal>`, :ref:`Clean Architecture <clean-architecture>`, :ref:`Model - View - Controller (MVC) <mvc>`, :ref:`Separation Of Concerns <separation-of-concerns>`, :ref:`Business Logic <business-logic>`, :ref:`Anemic Domain Model <anemic-domain-model>`, :ref:`Fat Controller <fat-controller>`
