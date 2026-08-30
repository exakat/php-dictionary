---
type: "concept"
title: "Ports And Adapters"
description: "Ports and Adapters is the formal name for the pattern underlying hexagonal architecture, coined by Alistair Cockburn."
resource: "https://alistair.cockburn.us/hexagonal-architecture/"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Ports And Adapters

Ports and Adapters is the formal name for the pattern underlying hexagonal architecture, coined by Alistair Cockburn. It separates the application core from its external dependencies by defining two types of boundary:

A port is an interface declared by the application core. It expresses what the application needs or what it accepts without knowing anything about the outside world.

An adapter is an implementation of a port that bridges the application core to a specific technology. A database adapter implements a repository port; an HTTP adapter implements a web input port; a test adapter implements a port using in-memory fakes.

Input ports represent entry points into the application: ``HTTP`` controllers, ``CLI`` commands, queue consumers. Output ports represent dependencies the application calls: databases, email senders, external APIs.

This pattern is expressed through interfaces and dependency injection: the core declares an interface which acts as the port, and a framework or infrastructure class implements it, which acts as the adapter. The DI container wires them together.

```php
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
```

## Documentation
- [https://alistair.cockburn.us/hexagonal-architecture/](https://alistair.cockburn.us/hexagonal-architecture/)

## See Also
- [From Chaos to Clean: Implementing Hexagonal Architecture in PHP](https://dev.to/helmarjunior/from-chaos-to-clean-implementing-hexagonal-architecture-in-php-2n01)

## Related
- [Hexagonal Architecture](/features/hexagonal.md)
- [Adapters](/features/adapter.md)
- [Dependency Injection](/features/dependency-injection.md)
- [Interface](/features/interface.md)
- [Clean Architecture](/features/clean-architecture.md)
- [Layered Architecture](/features/layered-architecture.md)
- [Domain Design Driven (DDD)](/features/ddd.md)

