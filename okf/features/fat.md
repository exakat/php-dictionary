---
type: "concept"
title: "Fat"
description: "Fat is an informal qualifier applied to a class, most commonly a controller or a model, that has grown too large in terms of responsibilities, methods, and lines of code."
resource: "https://en.wikipedia.org/wiki/God_object"
tags: ["anti-pattern", "concept", "adjective"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Fat

Fat is an informal qualifier applied to a class, most commonly a controller or a model, that has grown too large in terms of responsibilities, methods, and lines of code.

A fat class violates the Single Responsibility Principle. It is harder to test, understand, and maintain. Common symptoms include: many unrelated methods, large amounts of private helper code, direct database access mixed with business logic, and deep dependencies on infrastructure.

The opposite is a thin class, which delegates most work to collaborators. The right balance depends on architecture: an MVC application typically favours thin controllers and rich domain models or services.

Related terms: fat controller, fat model, god class, big ball of mud.

## Documentation
- [https://en.wikipedia.org/wiki/God_object](https://en.wikipedia.org/wiki/God_object)

## See Also
- [Large Class code smell](https://refactoring.guru/smells/large-class)
- [Thin controllers, fat models](https://symfony.com/doc/current/best_practices.html#controllers)

## Related
- [Fat Controller](/features/fat-controller.md)
- [Thin](/features/thin.md)
- [Slim](/features/slim.md)
- [Single Responsability Principle (SRP)](/features/srp.md)
- [Refactoring](/features/refactoring.md)
- [Business Logic](/features/business-logic.md)

