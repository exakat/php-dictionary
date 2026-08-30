---
type: "concept"
title: "Rich Domain Model"
description: "A rich domain model is one where domain objects, entities, aggregates, value objects, encapsulate both state and the business behaviour that depends on that state."
resource: "https://martinfowler.com/bliki/AnemicDomainModel.html"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Rich Domain Model

A rich domain model is one where domain objects, entities, aggregates, value objects, encapsulate both state and the business behaviour that depends on that state. Business rules, invariants, and domain logic live inside the objects themselves, not in external service classes.

A rich domain model is the alternative to the anemic domain model. Rather than exposing raw setters and relying on service classes to enforce rules, a rich entity exposes meaningful, intention-revealing methods that internally validate state transitions and enforce invariants.

Rich domain models align with the principles of Domain-Driven Design: the domain layer is the most important part of the codebase, the language of the code mirrors the language of the domain experts, and the objects protect themselves from invalid state.

Building a rich domain model means: using private properties with no public setters, returning new instances or recording domain events from methods, and throwing domain exceptions when a requested transition is invalid. Value objects are immutable and validated at construction.

```php
<?php

    // Rich domain entity: Order enforces its own lifecycle
    final class Order {
        private OrderStatus $status;
        private Money       $total;
        private array       $events = [];
    
        private function __construct(OrderStatus $status, Money $total) {
            $this->status = $status;
            $this->total  = $total;
        }
    
        public static function place(CustomerId $customer, array $items): self {
            if (empty($items)) {
                throw new \DomainException('An order must have at least one item.');
            }
            $total = Money::sum(array_map(fn($i) => $i->price, $items));
            $order = new self(OrderStatus::Pending, $total);
            $order->events[] = new OrderPlaced($customer, $total);
            return $order;
        }
    
        public function pay(Payment $payment): void {
            if (!$this->status->isPending()) {
                throw new \DomainException('Only pending orders can be paid.');
            }
            if (!$payment->covers($this->total)) {
                throw new \DomainException('Payment is insufficient.');
            }
            $this->status   = OrderStatus::Paid;
            $this->events[] = new OrderPaid($payment->id);
        }
    
        public function releaseEvents(): array {
            $events       = $this->events;
            $this->events = [];
            return $events;
        }
    }

?>
```

## Documentation
- [https://martinfowler.com/bliki/AnemicDomainModel.html](https://martinfowler.com/bliki/AnemicDomainModel.html)

## See Also
- [Anemic Domain Model vs Rich Domain Model with Examples](https://thevaluable.dev/anemic-domain-model/)
- [Rich vs Anemic Entities in PHP with Doctrine: How to Structure Your Business Logic Right](https://dev.to/mykola_vantukh/rich-vs-anemic-entities-in-php-how-to-structure-your-business-logic-right-7a0)

## Related
- [Anemic Domain Model](/features/anemic-domain-model.md)
- [Domain Design Driven (DDD)](/features/ddd.md)
- [Domain](/features/domain.md)
- [Value Object](/features/value-object.md)
- [Event Sourcing](/features/event-sourcing.md)
- [OOP (Object Oriented Programming)](/features/oop.md)

