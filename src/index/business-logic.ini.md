# Business Logic
Business logic is the part of the application that encodes the real-world rules, workflows, and decisions that the software is built to fulfill. It is the ultimate goal of the software: the reason it exists.

Business logic answers questions like: how is an invoice calculated? what are the conditions for a user to be eligible for a discount? when is an order considered fulfilled? These rules come from the business domain, not from the technology.

Everything else in the application, like HTTP routing, database persistence, authentication, caching, logging, is infrastructure. Infrastructure exists to serve the business logic, not the other way around. A common design mistake is to scatter business rules across controllers, SQL queries, or framework callbacks, making them hard to find, test, and change.

Well-structured applications isolate business logic from infrastructure. Domain-Driven Design, Hexagonal Architecture, and Clean Architecture all promote this separation. The domain layer, which holds the business logic, should have no dependencies on frameworks, databases, or external services. This makes it independently testable and resilient to technology changes.

Business logic often leaks into controllers, the infamous ``fat controllers``, Eloquent models, the ``fat models``, or stored procedures, which are anti-patterns that couple the domain to infrastructure concerns.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/business-logic.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/business-logic.ini.html","name":"Business Logic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:38 +0000","dateModified":"Fri, 19 Jun 2026 21:25:38 +0000","description":"Business logic is the part of the application that encodes the real-world rules, workflows, and decisions that the software is built to fulfill","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Business Logic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Business_logic)**
## See Also

+ [Patterns of Enterprise Application Architecture (Fowler)](https://martinfowler.com/books/eaa.html)

## Related

+ [Domain Design Driven (DDD)](ddd.ini.html)
+ [Clean Architecture](clean-architecture.ini.html)
+ [Hexagonal Architecture](hexagonal.ini.html)
+ [Architecture](architecture.ini.html)
+ [Fat Controller](fat-controller.ini.html)
+ [Separation Of Concerns](separation-of-concerns.ini.html)
+ [Model - View - Controller (MVC)](mvc.ini.html)
+ [Service](service.ini.html)
+ [Domain](domain.ini.html)
+ [Specification](specification.ini.html)
+ [Testable](testable.ini.html)
