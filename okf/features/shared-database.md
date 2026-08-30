---
type: "concept"
title: "Shared Database"
description: "The shared database pattern, and more commonly, the shared database anti-pattern, describes multiple services or applications reading from and writing to the same database schema."
resource: "https://microservices.io/patterns/data/shared-database.html"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Shared Database

The shared database pattern, and more commonly, the shared database anti-pattern, describes multiple services or applications reading from and writing to the same database schema.

In a monolithic application, a shared database is natural and appropriate. In a microservices architecture, it is an anti-pattern: it creates tight coupling between services at the data layer. A schema change, such as renaming a column, changing a data type, splitting a table, in one service can silently break another, even with no API change. Services cannot be deployed or scaled independently when they share schema.

The alternative is the database-per-service pattern: each service owns its data exclusively, and other services access it only through the service's API or via events. This decouples the services at the data level, enabling independent schema evolution.

The shared database pattern is sometimes intentionally used during a monolith-to-microservices migration as a transitional step, but should be eliminated progressively.

```php
<?php

    // Anti-pattern: two services query the same 'orders' table directly
    
    // OrderService writes
    $pdo->exec('INSERT INTO orders (user_id, total) VALUES (1, 9900)');
    
    // ShippingService reads, tightly coupled to OrderService's schema
    $rows = $pdo->query('SELECT id, user_id, total FROM orders WHERE shipped = 0')->fetchAll();
    // A rename of 'total' to 'amount' in OrderService silently breaks ShippingService.
    
    // Correct approach: ShippingService calls the OrderService API or subscribes to events
    $orders = $httpClient->get('http://order-service/orders?shipped=false');
    // OR
    $event = new OrderPlaced($orderId, $total); // ShippingService listens for this event

?>
```

## Documentation
- [https://microservices.io/patterns/data/shared-database.html](https://microservices.io/patterns/data/shared-database.html)

## See Also
- [Is a Shared Database in Microservices Actually an Anti-pattern?](https://hackernoon.com/is-shared-database-in-microservices-actually-anti-pattern-8cc2536adfe4)

## Related
- [Distributed Monolith](/features/distributed-monolith.md)
- [Microservice](/features/microservice.md)
- [Database](/features/database.md)
- [Coupling](/features/coupling.md)
- [Domain Design Driven (DDD)](/features/ddd.md)
- [Event Driven](/features/event-driven.md)

