---
type: "concept"
title: "Business Logic"
description: "Business logic, also called domain logic, is the part of the application that encodes the real-world rules, workflows, and decisions that the software is built to fulfill."
resource: "https://en.wikipedia.org/wiki/Business_logic"
tags: ["concept", "architecture", "sdlc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Business Logic

Business logic, also called domain logic, is the part of the application that encodes the real-world rules, workflows, and decisions that the software is built to fulfill. It is the ultimate goal of the software: the reason it exists.

Business logic answers questions like: how is an invoice calculated? What are the conditions for a user to be eligible for a discount? When is an order considered fulfilled? These rules come from the business domain, not from the technology.

Everything else in the application, like HTTP routing, database persistence, authentication, caching, logging, is infrastructure. Infrastructure exists to serve the business logic, not the other way around. A common design mistake is to scatter business rules across controllers, SQL queries, or framework callbacks, making them hard to find, test, and change.

Well-structured applications isolate business logic from infrastructure. Domain-Driven Design, Hexagonal Architecture, and Clean Architecture all promote this separation. The domain layer, which holds the business logic, should have no dependencies on frameworks, databases, or external services. This makes it independently testable and resilient to technology changes.

Business logic often leaks into controllers, the infamous ``fat controllers``, Eloquent models, the ``fat models``, or stored procedures, which are anti-patterns that couple the domain to infrastructure concerns.

## Documentation
- [https://en.wikipedia.org/wiki/Business_logic](https://en.wikipedia.org/wiki/Business_logic)

## See Also
- [Patterns of Enterprise Application Architecture (Fowler)](https://martinfowler.com/books/eaa.html)

## Related
- [Domain Design Driven (DDD)](/features/ddd.md)
- [Clean Architecture](/features/clean-architecture.md)
- [Hexagonal Architecture](/features/hexagonal.md)
- [Architecture](/features/architecture.md)
- [Fat Controller](/features/fat-controller.md)
- [Separation Of Concerns](/features/separation-of-concerns.md)
- [Model - View - Controller (MVC)](/features/mvc.md)
- [Service](/features/service.md)
- [Domain](/features/domain.md)
- [Specification](/features/specification.md)
- [Testable](/features/testable.md)

