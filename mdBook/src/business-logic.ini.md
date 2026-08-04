# Business Logic
Business logic is the part of the application that encodes the real-world rules, workflows, and decisions that the software is built to fulfill. It is the ultimate goal of the software: the reason it exists.

Business logic answers questions like: how is an invoice calculated? what are the conditions for a user to be eligible for a discount? when is an order considered fulfilled? These rules come from the business domain, not from the technology.

Everything else in the application, like HTTP routing, database persistence, authentication, caching, logging, is infrastructure. Infrastructure exists to serve the business logic, not the other way around. A common design mistake is to scatter business rules across controllers, SQL queries, or framework callbacks, making them hard to find, test, and change.

Well-structured applications isolate business logic from infrastructure. Domain-Driven Design, Hexagonal Architecture, and Clean Architecture all promote this separation. The domain layer, which holds the business logic, should have no dependencies on frameworks, databases, or external services. This makes it independently testable and resilient to technology changes.

Business logic often leaks into controllers, the infamous ``fat controllers``, Eloquent models, the ``fat models``, or stored procedures, which are anti-patterns that couple the domain to infrastructure concerns.
## See Also

+ [Patterns of Enterprise Application Architecture (Fowler)](https://martinfowler.com/books/eaa.html)

Related : [Domain Design Driven (DDD)](Domain Design Driven (DDD)), [Clean Architecture](Clean Architecture), [Hexagonal Architecture](Hexagonal Architecture), [Architecture](Architecture), [Fat Controller](Fat Controller), [Separation Of Concerns](Separation Of Concerns), [Model - View - Controller (MVC)](Model - View - Controller (MVC)), [Service](Service), [Domain](Domain), [Specification](Specification), [Testable](Testable)
