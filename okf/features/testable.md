---
type: "adjective"
title: "Testable"
description: "A piece of code is testable when it may have related tests, that checks its behavior."
resource: "https://en.wikipedia.org/wiki/Software_testability"
tags: ["adjective", "test"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Testable

A piece of code is testable when it may have related tests, that checks its behavior. 

To make a code testable, the following features are useful:

+ Dependency injection
+ Programming to interface
+ Single responsibility principle
+ No global state
+ No static methods
+ No New in business logic
+ Pure functions
+ Deterministic functions
+ No direct output
+ No usage of ``exit()``

The golden rule: ``If it is not possible to write a test for it without setting up the whole world first, the code is not testable``.

## Documentation
- [https://en.wikipedia.org/wiki/Software_testability](https://en.wikipedia.org/wiki/Software_testability)

## See Also
- [Improve your PHP code testability](https://dev.to/fabiothiroki/improve-your-php-code-testability-1onb)
- [Manual:Writing testable PHP code](https://www.mediawiki.org/wiki/Manual:Writing_testable_PHP_code)

## Related
- [Exit](/features/exit.md)
- [Deterministic](/features/deterministic.md)
- [Single Responsability Principle (SRP)](/features/srp.md)
- [Static Method](/features/static-method.md)
- [Static Property](/features/static-property.md)
- [Business Logic](/features/business-logic.md)
- [Pure Function](/features/pure-function.md)
- [Direct Output](/features/direct-output.md)
- [Program To Interface](/features/program-to-interface.md)
- [Maintenability](/features/maintenability.md)

