# Ports And Adapters
Ports and Adapters is the formal name for the pattern underlying hexagonal architecture, coined by Alistair Cockburn. It separates the application core from its external dependencies by defining two types of boundary:

A port is an interface declared by the application core. It expresses what the application needs or what it accepts without knowing anything about the outside world.

An adapter is an implementation of a port that bridges the application core to a specific technology. A database adapter implements a repository port; an HTTP adapter implements a web input port; a test adapter implements a port using in-memory fakes.

Input ports represent entry points into the application: ``HTTP`` controllers, ``CLI`` commands, queue consumers. Output ports represent dependencies the application calls: databases, email senders, external APIs.

This pattern is expressed through interfaces and dependency injection: the core declares an interface which acts as the port, and a framework or infrastructure class implements it, which acts as the adapter. The DI container wires them together.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ports-and-adapters.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ports-and-adapters.html","name":"Ports And Adapters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:29:35 +0000","dateModified":"Tue, 14 Jul 2026 05:29:35 +0000","description":"Ports and Adapters is the formal name for the pattern underlying hexagonal architecture, coined by Alistair Cockburn","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Ports And Adapters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Ports And Adapters"}]}]}</script>
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

**[Documentation](https://alistair.cockburn.us/hexagonal-architecture/)**
## See Also

+ [From Chaos to Clean: Implementing Hexagonal Architecture in PHP](https://dev.to/helmarjunior/from-chaos-to-clean-implementing-hexagonal-architecture-in-php-2n01)

## Related

+ [Hexagonal Architecture](hexagonal.html)
+ [Adapters](adapter.html)
+ [Dependency Injection](dependency-injection.html)
+ [Interface](interface.html)
+ [Clean Architecture](clean-architecture.html)
+ [Layered Architecture](layered-architecture.html)
+ [Domain Design Driven (DDD)](ddd.html)
