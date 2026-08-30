---
type: "concept"
title: "Anemic Domain Model"
description: "The anemic domain model is an anti-pattern identified by Martin Fowler where domain objects contain only data, getters, setters, and no business logic."
resource: "https://en.wikipedia.org/wiki/Anemic_domain_model"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Anemic Domain Model

The anemic domain model is an anti-pattern identified by Martin Fowler where domain objects contain only data, getters, setters, and no business logic. All business logic is instead placed in service classes that operate on these passive data containers.

The result is a structural inversion: the domain layer becomes a schema mirror, while service classes accumulate all the behaviour. This defeats the purpose of object-oriented design, where objects encapsulate both state and the operations that depend on that state.

The symptoms are recognisable: entities have only getters/setters, service classes are large and growing, business rules are scattered across multiple services, and the same validation or computation is duplicated in several places.

The alternative is the rich domain model, where entities enforce their own invariants, expose meaningful behaviour, and reject invalid state. This is the model advocated by Domain-Driven Design.

Anemic models often emerge from ORM-first design, where Doctrine or Eloquent entities are modelled around the database schema rather than the domain.

```php
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
```

## Documentation
- [https://en.wikipedia.org/wiki/Anemic_domain_model](https://en.wikipedia.org/wiki/Anemic_domain_model)

## See Also
- [Rich vs Anemic Entities in PHP with Doctrine: How to Structure Your Business Logic Right](https://dev.to/mykola_vantukh/rich-vs-anemic-entities-in-php-how-to-structure-your-business-logic-right-7a0)
- [Martin Fowler: Anemic Domain Model](https://martinfowler.com/bliki/AnemicDomainModel.html)

## Related
- [Rich Domain Model](/features/rich-domain-model.md)
- [Domain Design Driven (DDD)](/features/ddd.md)
- [Domain](/features/domain.md)
- [OOP (Object Oriented Programming)](/features/oop.md)
- [Layered Architecture](/features/layered-architecture.md)

