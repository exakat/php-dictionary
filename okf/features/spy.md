---
type: "PHP Feature"
title: "Spy"
description: "A spy is a test double that wraps a real object, letting its original behavior run while recording how it was called: which methods, with which arguments, and how many times."
resource: "https://www.javacodegeeks.com/2015/11/mocks-spies-partial-mocks-and-stubbing.html"
tags: ["test"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Spy

A spy is a test double that wraps a real object, letting its original behavior run while recording how it was called: which methods, with which arguments, and how many times. Unlike a full mock, which replaces the dependency entirely, a spy is a partial substitute, so it is also called a ``partial mock``.

Spies are useful when the actual behavior of the dependency is needed for the test to be meaningful, but the test also needs to assert on the interaction with that dependency afterward.

Because a spy keeps the real implementation active, it can have the same side effects as the original code, which makes it less isolating than a mock, but closer to the real production behavior.

## Documentation
- [https://www.javacodegeeks.com/2015/11/mocks-spies-partial-mocks-and-stubbing.html](https://www.javacodegeeks.com/2015/11/mocks-spies-partial-mocks-and-stubbing.html)

## See Also
- [Working with Spies and Partial Mocks](https://www.baeldung.com/members/courses/learn-mockito/lessons/lesson-1-working-with-spies-and-partial-mocks)
- [Test Double PHP](https://testdoublephp.com/)

## Related
- [Mock](/features/mock.md)
- [Test Data Provider](/features/test-data-provider.md)
- [Fixture](/features/fixture.md)

## Details
- Packagist: [mockery/mockery](https://packagist.org/packages/mockery/mockery)
- Packagist: [phpspec/prophecy](https://packagist.org/packages/phpspec/prophecy)

