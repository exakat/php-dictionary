---
type: "concept"
title: "Compensation Logic"
description: "Compensation logic, also called a compensating transaction or saga compensation, refers to the set of actions taken to undo or neutralise the effects of a previously completed step when a subsequent step in a distributed process fails."
resource: "https://microservices.io/patterns/data/saga.html"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Compensation Logic

Compensation logic, also called a compensating transaction or saga compensation, refers to the set of actions taken to undo or neutralise the effects of a previously completed step when a subsequent step in a distributed process fails. It is the rollback mechanism for operations that cannot be part of a single ACID transaction.

The concept originates in the Saga pattern: a long-running business process is split into a sequence of local transactions. If transaction N fails, compensation transactions are executed in reverse order, N-1, N-2, ... to restore the system to a consistent state. Compensation is not always a perfect undo, a sent email cannot be unsent, a payment refunded is not the same as a payment never made.

Because compensation logic is domain-specific, it must be designed and tested explicitly. The failure modes of compensation steps themselves must also be handled.

Compensation logic is typically implemented as event handlers or command handlers that react to failure events published by downstream services.

```php
<?php

    // Compensation handler: listens for PaymentFailed and cancels the order
    class CancelOrderOnPaymentFailed {
        public function __construct(
            private OrderRepository  $orders,
            private EventBus         $bus,
        ) {}
    
        public function handle(PaymentFailed $event): void {
            $order = $this->orders->findById($event->orderId);
    
            if ($order === null || $order->isCancelled()) {
                return; // idempotent: safe to call multiple times
            }
    
            $order->cancel(reason: 'payment_failed');
            $this->orders->save($order);
            $this->bus->publish(new OrderCancelled($order->id));
        }
    }

?>
```

## Documentation
- [https://microservices.io/patterns/data/saga.html](https://microservices.io/patterns/data/saga.html)

## See Also
- [Saga Pattern on AWS - Distributed Transactions with Compensation](https://www.bhaweshkumar.com/blog/2025/12/26/saga-pattern-on-aws-distributed-transactions-with-compensation/)
- [Saga distributed transactions pattern](https://learn.microsoft.com/en-us/azure/architecture/reference-architectures/saga/saga)

## Related
- [Distributed Transactions](/features/distributed-transactions.md)
- [Event Sourcing](/features/event-sourcing.md)
- [Event Driven](/features/event-driven.md)
- [Microservice](/features/microservice.md)
- [Idempotent](/features/idempotent.md)
- [ACID](/features/acid.md)

