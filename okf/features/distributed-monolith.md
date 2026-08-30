---
type: "concept"
title: "Distributed Monolith"
description: "A distributed monolith is an anti-pattern where a system is deployed as multiple separate services but remains tightly coupled in practice, changes to one service still require coordinated changes to others, defeating the purpose of the distribution."
resource: "https://www.techtarget.com/it-infrastructure/tip/The-distributed-monolith-What-it-is-and-how-to-escape-it"
tags: ["concept", "architecture"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Distributed Monolith

A distributed monolith is an anti-pattern where a system is deployed as multiple separate services but remains tightly coupled in practice, changes to one service still require coordinated changes to others, defeating the purpose of the distribution.

Common symptoms: shared database between services, synchronous call chains where all services must be available for any request to succeed, shared code libraries with business logic, deployment dependencies where service A must be deployed before service B, and a lack of independent scalability.

The distributed monolith combines the worst of both worlds: the operational complexity of microservices without the benefits.

The root cause is usually an attempt to split a monolith by technical layer, splitting into a ``frontend service`` and ``backend service``, rather than by business capability. True microservices require domain-driven boundaries and decentralised data management.

```php
<?php

    // Symptom: all services share one database, tight coupling at the data layer
    // Service A writes orders; Service B reads orders directly from the same schema.
    // A schema migration in Service A breaks Service B without any API change.
    
    // Symptom: synchronous chain, no service can fail independently
    // UserService -> OrderService -> PaymentService -> InventoryService
    // If Inventory is down, the entire chain fails, same as a monolith.
    
    // Correct approach: each service owns its data and communicates via events or APIs
    // Order placed -> event published -> Inventory consumes event independently

?>
```

## Documentation
- [https://www.techtarget.com/it-infrastructure/tip/The-distributed-monolith-What-it-is-and-how-to-escape-it](https://www.techtarget.com/it-infrastructure/tip/The-distributed-monolith-What-it-is-and-how-to-escape-it)

## See Also
- [Is your microservice a distributed monolith?](https://www.gremlin.com/blog/is-your-microservice-a-distributed-monolith)
- [Distributed monolith architecture: What it is, why it happens, and how to fix it](https://vfunction.com/blog/distributed-monolith-architecture/)

## Related
- [Monolith](/features/monolith.md)
- [Microservice](/features/microservice.md)
- [Service-Oriented Architecture (SOA)](/features/soa.md)
- [Shared Database](/features/shared-database.md)
- [Fault Isolation](/features/fault-isolation.md)
- [Coupling](/features/coupling.md)
- [Domain Design Driven (DDD)](/features/ddd.md)

