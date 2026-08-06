# Distributed Transactions
A distributed transaction is a transaction that spans multiple independent data stores or services, requiring all participants to agree on the outcome: all commit or all abort.

The classic protocol is Two-Phase Commit, 2PC: a coordinator sends a PREPARE request to all participants; if all reply OK, the coordinator sends COMMIT; otherwise it sends ROLLBACK. 2PC is blocking: if the coordinator crashes after PREPARE, participants may be locked indefinitely.

In microservices, distributed transactions are largely avoided because they require all participating services to be available simultaneously, undermining the independence and fault isolation that microservices are designed to provide.

The preferred alternative is the Saga pattern: a long-running business process is decomposed into a sequence of local transactions, each publishing an event. If a step fails, a compensation transaction undoes the previous steps.

PHP applications typically avoid distributed transactions by using a single database, or by embracing eventual consistency and the Saga pattern in microservices contexts.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/distributed-transactions.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/distributed-transactions.html","name":"Distributed Transactions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:42:28 +0000","dateModified":"Fri, 17 Jul 2026 08:42:28 +0000","description":"A distributed transaction is a transaction that spans multiple independent data stores or services, requiring all participants to agree on the outcome: all commit or all abort","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Distributed Transactions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Distributed_transaction)**
## Related

+ [ACID](acid.ini.html)
+ [Eventual Consistency](eventual-consistency.ini.html)
+ [Compensation Logic](compensation-logic.ini.html)
+ [Event Sourcing](event-sourcing.ini.html)
+ [Microservice](microservice.ini.html)
+ [Distributed Systems](distributed-systems.ini.html)
