---
type: "concept"
title: "Layered Architecture"
description: "Layered architecture organises a codebase into horizontal layers, each with a specific responsibility, where each layer only depends on the layer directly below it."
resource: "https://en.wikipedia.org/wiki/Multitier_architecture"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Layered Architecture

Layered architecture organises a codebase into horizontal layers, each with a specific responsibility, where each layer only depends on the layer directly below it. The classic four layers are: presentation, business logic, data access, and infrastructure.

The Presentation layer handles user interaction and HTTP concerns, with controllers, templates. The Business Logic layer contains domain rules and application workflows. The Data Access layer, such as repository or DAO, abstracts persistence. The Infrastructure layer wraps external systems, like email, queues, file storage.

Layered architecture is the implicit structure of most MVC frameworks: controllers belong to the presentation layer, services to the business logic layer, and repositories to the data access layer.

The main risk is layer bleeding: business logic leaking into controllers, aka fat controller, or SQL queries scattered through the business layer. The anemic domain model anti-pattern often accompanies layered architecture when domain logic is spread across service classes rather than entities.

```php
<?php

    // Presentation layer, controller
    class OrderController {
        public function __construct(private OrderService $service) {}
    
        public function create(Request $request): Response {
            $order = $this->service->placeOrder($request->validated());
            return new JsonResponse($order->toArray(), 201);
        }
    }
    
    // Business logic layer, service
    class OrderService {
        public function __construct(private OrderRepository $orders) {}
    
        public function placeOrder(array $data): Order {
            $order = Order::new($data);
            $order->validate();
            return $this->orders->save($order);
        }
    }

    // Data access layer, repository
    class OrderRepository {
        public function save(Order $order): Order {
            $this->pdo->prepare('INSERT INTO orders ...');
            return $order;
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Multitier_architecture](https://en.wikipedia.org/wiki/Multitier_architecture)

## See Also
- [The Clean Architecture](https://blog.cleancoder.com/uncle-bob/2012/08/13/the-clean-architecture.html)

## Related
- [Hexagonal Architecture](/features/hexagonal.md)
- [Clean Architecture](/features/clean-architecture.md)
- [Model - View - Controller (MVC)](/features/mvc.md)
- [Separation Of Concerns](/features/separation-of-concerns.md)
- [Business Logic](/features/business-logic.md)
- [Anemic Domain Model](/features/anemic-domain-model.md)
- [Fat Controller](/features/fat-controller.md)

