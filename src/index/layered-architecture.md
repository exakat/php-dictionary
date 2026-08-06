# Layered Architecture
Layered architecture organises a codebase into horizontal layers, each with a specific responsibility, where each layer only depends on the layer directly below it. The classic four layers are: presentation, business logic, data access, and infrastructure.

The Presentation layer handles user interaction and HTTP concerns, with controllers, templates. The Business Logic layer contains domain rules and application workflows. The Data Access layer, such as repository or DAO, abstracts persistence. The Infrastructure layer wraps external systems, like email, queues, file storage.

Layered architecture is the implicit structure of most MVC frameworks: controllers belong to the presentation layer, services to the business logic layer, and repositories to the data access layer.

The main risk is layer bleeding: business logic leaking into controllers, aka fat controller, or SQL queries scattered through the business layer. The anemic domain model anti-pattern often accompanies layered architecture when domain logic is spread across service classes rather than entities.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/layered-architecture.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/layered-architecture.html","name":"Layered Architecture","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:09:15 +0000","dateModified":"Tue, 07 Jul 2026 05:09:15 +0000","description":"Layered architecture organises a codebase into horizontal layers, each with a specific responsibility, where each layer only depends on the layer directly below it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Layered Architecture.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
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
```

**[Documentation](https://en.wikipedia.org/wiki/Multitier_architecture)**
## Related

+ [Hexagonal Architecture](hexagonal.ini.html)
+ [Clean Architecture](clean-architecture.ini.html)
+ [Model - View - Controller (MVC)](mvc.ini.html)
+ [Separation Of Concerns](separation-of-concerns.ini.html)
+ [Business Logic](business-logic.ini.html)
+ [Anemic Domain Model](anemic-domain-model.ini.html)
+ [Fat Controller](fat-controller.ini.html)
