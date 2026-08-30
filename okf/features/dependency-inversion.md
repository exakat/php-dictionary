---
type: "concept"
title: "Dependency Inversion (DIP)"
description: "The Dependency Inversion Principle, or DIP, is the D in SOLID."
resource: "https://en.wikipedia.org/wiki/Dependency_inversion_principle"
tags: ["concept", "acronym", "solid"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Dependency Inversion (DIP)

The Dependency Inversion Principle, or DIP, is the D in SOLID. It states: high-level modules should not depend on low-level modules; both should depend on abstractions. Abstractions should not depend on details; details should depend on abstractions.

In practice, this means a business-logic class should type-hint an interface, not a concrete implementation. The concrete class is injected from the outside, typically by a dependency injection container. The high-level class has no knowledge of which concrete class it will receive.

Dependency inversion has two effects: it decouples the high-level policy from low-level implementation details, and it makes the high-level class testable: a test can inject a mock or in-memory implementation instead of the real dependency.

Dependency inversion is often confused with dependency injection, or DI. DI is the mechanism for delivering the dependency\; DIP is the principle that governs which direction the dependency arrow should point. You can have DI without DIP, but DIP requires DI, or a service locator, to be applied.

DIP is expressed through interfaces, abstract classes, and a DI container.

```php
<?php

    // Violation: high-level class depends on a concrete low-level class
    class OrderService {
        private MySQLOrderRepository $repo; // concrete, tightly coupled
    
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
            private OrderRepository $repo, // abstraction, no concrete dependency
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
```

## Documentation
- [https://en.wikipedia.org/wiki/Dependency_inversion_principle](https://en.wikipedia.org/wiki/Dependency_inversion_principle)

## See Also
- [Dependency Inversion Principle in PHP — Depend on Abstractions, Not Concrete](https://medium.com/@hasanra17/dependency-inversion-principle-in-php-depend-on-abstractions-not-concrete-e94781446dba)
- [Dependency Injection vs Dependency Inversion: Understanding the Difference (Simplified for PHP Developers)](https://www.codegenes.net/blog/difference-between-dependency-injection-and-dependency-inversion/)

## Related
- [SOLID](/features/solid.md)
- [Dependency Injection](/features/dependency-injection.md)
- [Interface](/features/interface.md)
- [Decoupling](/features/decoupling.md)
- [Coupling](/features/coupling.md)
- [Ports And Adapters](/features/ports-and-adapters.md)

