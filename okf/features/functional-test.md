---
type: "PHP Feature"
title: "Functional Test"
description: "Functional tests are tests that verify that a feature of the application behaves as specified, by exercising it the way a user would, through its public interface, without checking the internal implementation."
resource: "https://en.wikipedia.org/wiki/Functional_testing"
tags: ["test"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Functional Test

Functional tests are tests that verify that a feature of the application behaves as specified, by exercising it the way a user would, through its public interface, without checking the internal implementation.

Functional tests operate at a higher level than unit tests: instead of testing a single class or function in isolation, they drive a whole feature, such as submitting a form or calling an API endpoint, and assert on its observable output. They differ from acceptance tests in that they may run at any stage of development to validate that a feature works, rather than serving as the final, business-facing sign-off before release.

Functional tests are a form of black box testing, and are commonly written against a running application, a web page, or an HTTP API, using frameworks such as Codeception, Behat, or PHPUnit's own functional test cases in Symfony and Laravel.

## Documentation
- [https://en.wikipedia.org/wiki/Functional_testing](https://en.wikipedia.org/wiki/Functional_testing)

## See Also
- [Functional Testing: Complete Guide with Examples](https://www.functionize.com/automated-testing/what-is-functional-testing)
- [Functional vs non-functional software testing](https://circleci.com/blog/functional-vs-non-functional-testing/)

## Related
- [Test](/features/test.md)
- [Acceptance Test](/features/acceptance-test.md)
- [Black Box Testing](/features/blackbox.md)
- [Unit Test](/features/unit-test.md)
- [Integration Test](/features/integration-test.md)
- [End To End Test](/features/end-to-end-test.md)

## Details
- Packagist: [codeception/codeception](https://packagist.org/packages/codeception/codeception)
- Packagist: [behat/behat](https://packagist.org/packages/behat/behat)

