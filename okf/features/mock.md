---
type: "PHP Feature"
title: "Mock"
description: "A mock replaces a code dependency with an object, to make testing easier."
resource: "https://www.radview.com/glossary/what-is-mock-testing/"
tags: ["test", "versionUpdate"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Mock

A mock replaces a code dependency with an object, to make testing easier. Mocks are used when the dependency is difficult to set in a reproducible state: for example, in a rare state, or after a long set up.

Mocks turns the dependency into another piece of code, with total control over its behavior. 

On the other hand, mocks have to be coded to replace the dependency, and emulates its behavior as closely as possible: any change to the dependency behavior has to be back-ported. 

Mock objects are also called ``test double``.

## Documentation
- [https://www.radview.com/glossary/what-is-mock-testing/](https://www.radview.com/glossary/what-is-mock-testing/)

## See Also
- [Test doubles](https://docs.phpunit.de/en/13.1/test-doubles.html#test-doubles)
- [Mocking](https://laravel.com/docs/13.x/mocking)
- [Avoid mocking repositories by using in-memory implementations](https://danielrotter.at/2023/09/22/avoid-mocking-repositories-by-using-in-memory-implementations.html)
- [Testing without mocking frameworks](https://blog.frankdejonge.nl/testing-without-mocking-frameworks/)

## Related
- [Test Data Provider](/features/test-data-provider.md)
- [Spy](/features/spy.md)
- [Fixture](/features/fixture.md)
- [Use Alias](/features/use-alias.md)

## Details
- Packagist: [mockery/mockery](https://packagist.org/packages/mockery/mockery)
- Packagist: [phpspec/prophecy](https://packagist.org/packages/phpspec/prophecy)

