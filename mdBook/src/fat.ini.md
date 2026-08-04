# Fat
Fat is an informal qualifier applied to a class, most commonly a controller or a model, that has grown too large in terms of responsibilities, methods, and lines of code.

A fat class violates the Single Responsibility Principle. It is harder to test, understand, and maintain. Common symptoms include: many unrelated methods, large amounts of private helper code, direct database access mixed with business logic, and deep dependencies on infrastructure.

The opposite is a thin class, which delegates most work to collaborators. The right balance depends on architecture: an MVC application typically favours thin controllers and rich domain models or services.

Related terms: fat controller, fat model, god class, big ball of mud.
## See Also

+ [Large Class code smell](https://refactoring.guru/smells/large-class)
+ [Thin controllers, fat models](https://symfony.com/doc/current/best_practices.html#controllers)

Related : [Fat Controller](Fat Controller), [Thin](Thin), [Slim](Slim), [Single Responsability Principle (SRP)](Single Responsability Principle (SRP)), [God Object](God Object), [Refactoring](Refactoring), [Business Logic](Business Logic)
