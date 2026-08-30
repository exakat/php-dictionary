---
type: "concept"
title: "Distributed Transactions"
description: "A distributed transaction is a transaction that spans multiple independent data stores or services, requiring all participants to agree on the outcome: all commit or all abort."
resource: "https://en.wikipedia.org/wiki/Distributed_transaction"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Distributed Transactions

A distributed transaction is a transaction that spans multiple independent data stores or services, requiring all participants to agree on the outcome: all commit or all abort.

The classic protocol is Two-Phase Commit, 2PC: a coordinator sends a PREPARE request to all participants; if all reply OK, the coordinator sends COMMIT; otherwise it sends ROLLBACK. 2PC is blocking: if the coordinator crashes after PREPARE, participants may be locked indefinitely.

In microservices, distributed transactions are largely avoided because they require all participating services to be available simultaneously, undermining the independence and fault isolation that microservices are designed to provide.

The preferred alternative is the Saga pattern: a long-running business process is decomposed into a sequence of local transactions, each publishing an event. If a step fails, a compensation transaction undoes the previous steps.

PHP applications typically avoid distributed transactions by using a single database, or by embracing eventual consistency and the Saga pattern in microservices contexts.

```php
<?php

    // Saga pattern: choreography-based (event-driven)
    // Each service handles its local transaction and publishes an event.
    // No central coordinator — services react to each other's events.
    
    // 1. OrderService places order and publishes OrderPlaced
    $order = Order::place($data);
    $orderRepository->save($order);
    $eventBus->publish(new OrderPlaced($order->id, $order->total));
    
    // 2. PaymentService listens for OrderPlaced, charges the card
    //    On success: publishes PaymentProcessed
    //    On failure: publishes PaymentFailed -> OrderService compensates (cancels order)
    
    // 3. InventoryService listens for PaymentProcessed, reserves stock
    //    On failure: publishes StockUnavailable -> PaymentService compensates (refund)

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Distributed_transaction](https://en.wikipedia.org/wiki/Distributed_transaction)

## See Also
- [Microservices Pattern: Saga](https://microservices.io/patterns/data/saga.html)
- [Two-phase commit protocol](https://en.wikipedia.org/wiki/Two-phase_commit_protocol)

## Related
- [ACID](/features/acid.md)
- [Eventual Consistency](/features/eventual-consistency.md)
- [Compensation Logic](/features/compensation-logic.md)
- [Event Sourcing](/features/event-sourcing.md)
- [Microservice](/features/microservice.md)
- [Distributed Systems](/features/distributed-systems.md)

