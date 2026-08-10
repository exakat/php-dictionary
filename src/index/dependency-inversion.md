# Dependency Inversion (DIP)
The Dependency Inversion Principle, or DIP, is the D in SOLID. It states: high-level modules should not depend on low-level modules; both should depend on abstractions. Abstractions should not depend on details; details should depend on abstractions.

In practice, this means a business-logic class should type-hint an interface, not a concrete implementation. The concrete class is injected from the outside, typically by a dependency injection container. The high-level class has no knowledge of which concrete class it will receive.

Dependency inversion has two effects: it decouples the high-level policy from low-level implementation details, and it makes the high-level class testable: a test can inject a mock or in-memory implementation instead of the real dependency.

Dependency inversion is often confused with dependency injection, or DI. DI is the mechanism for delivering the dependency\; DIP is the principle that governs which direction the dependency arrow should point. You can have DI without DIP, but DIP requires DI, or a service locator, to be applied.

DIP is expressed through interfaces, abstract classes, and a DI container.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency-inversion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency-inversion.html","name":"Dependency Inversion (DIP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:41:09 +0000","dateModified":"Fri, 17 Jul 2026 08:41:09 +0000","description":"The Dependency Inversion Principle, or DIP, is the D in SOLID","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dependency Inversion (DIP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Dependency Inversion (DIP)"}]}]}</script>
```php
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
```

**[Documentation](https://en.wikipedia.org/wiki/Dependency_inversion_principle)**
## Related

+ [SOLID](solid.html)
+ [Dependency Injection](dependency-injection.html)
+ [Interface](interface.html)
+ [Decoupling](decoupling.html)
+ [Coupling](coupling.html)
+ [Ports And Adapters](ports-and-adapters.html)
