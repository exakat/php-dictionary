---
type: "PHP Feature"
title: "Mutation Testing"
description: "Mutation testing is a way to enhance the quality of tests by checking how they react to a small perturbation of the code source."
resource: "https://en.wikipedia.org/wiki/Mutation_testing"
tags: ["test"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Mutation Testing

Mutation testing is a way to enhance the quality of tests by checking how they react to a small perturbation of the code source.

After writing a suite of tests and having it pass, mutation testing adds a modification to the code: for example, replacing a ``+`` by a ``-``. Then, it runs the test suite again, and the expectation is that one test, at least, should spot the error. That way, the code is well bordered by the tests. 

When the suite is still green after mutating the code, this means that the test suite is not sufficient to spot it. The code is now a mutant, and the test suite should be updated.

``Infection`` is a PHP mutation Testing framework.

## Documentation
- [https://en.wikipedia.org/wiki/Mutation_testing](https://en.wikipedia.org/wiki/Mutation_testing)

## See Also
- [Infection](https://infection.github.io/)

## Related
- [Test](/features/test.md)
- [Unit Test](/features/unit-test.md)
- [Fuzzing](/features/fuzzing.md)
- [Code Coverage](/features/code-coverage.md)
- [PHPunit](/features/phpunit.md)

## Details
- Packagist: [infection/infection](https://packagist.org/packages/infection/infection)

