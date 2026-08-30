---
type: "PHP Feature"
title: "Test"
description: "Tests are tools that monitor the behavior of a code."
resource: "https://en.wikipedia.org/wiki/Software_testing"
tags: ["test"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Test

Tests are tools that monitor the behavior of a code. The code should produce the expected results that are provided in the tests.

There are many different types of tests: 

+ Unit test: close to the class level of the code
+ Integration test: they check that components collaborate nicely
+ Functional tests: close to the specifications and the business level
+ Feature testing: close to the specifications and the business level
+ End-to-end tests: they run the software from beginning to the end
+ Performance tests: tests focusing on the behavior of the software under load
+ Property-based tests: tests focusing on the satisfaction of properties
+ Acceptance tests: the tests that the software must pass to be accepted by the end user
+ Smoke tests: tests that quickly detect a problem in the software. They are the most obvious. 
+ Exploratory tests: when tests are used to check new behavior of the code
+ Regression tests: tests that ensures that previous behaviors are still behaving the same
+ Fuzzing: testing the software with random data
+ Mutation testing: testing the software robustness by altering the code 

Tests may be manual, when they are executed manually. Those are not recorded. Test may be automated, when they are executed by another piece of software. 

PHP offers several testing framework, such as ``PHPunit``, ``pest``, ``pint``, ``simpletest``, ``atoum``.

Tests are often further automated in a Continuous Integration Pipeline.

## Documentation
- [https://en.wikipedia.org/wiki/Software_testing](https://en.wikipedia.org/wiki/Software_testing)

## See Also
- [3 Compelling Reasons For Developers To Write Tests](https://christoph-rumpel.com/2023/6/three-compelling-reasons-for-developers-to-write-tests)
- [Testing tips](https://testing-tips.sarvendev.com/)
- [How to test procedural functions with PHPUnit](https://unixdigest.com/tutorials/how-to-test-procedural-functions-with-phpunit.html)

## Related
- [Feature Testing](/features/feature-testing.md)
- [Code Coverage](/features/code-coverage.md)
- [Integration Test](/features/integration-test.md)
- [Unit Test](/features/unit-test.md)
- [End To End Test](/features/end-to-end-test.md)
- [PHPunit](/features/phpunit.md)
- [Quality](/features/quality.md)
- [Refactoring](/features/refactoring.md)
- [Clock](/features/clock.md)
- [Faker](/features/faker.md)
- [Snapshot](/features/snapshot.md)
- [Test Pyramid](/features/test-pyramid.md)
- [DevOps](/features/devops.md)
- [Edge Case](/features/edge-case.md)
- [Continuous Integration (CI)](/features/ci.md)
- [Continuous Delivery (CD)](/features/cd.md)
- [Fuzzing](/features/fuzzing.md)
- [Property-Based Testing](/features/property-based-testing.md)
- [Mutation Testing](/features/mutation-test.md)
- [Test Framework](/features/test-framework.md)
- [Build](/features/build.md)
- [Continuous Integration](/features/continuous-integration.md)
- [Regression](/features/regression.md)
- [Reliability](/features/reliability.md)
- [Test-Driven Development](/features/test-driven-development.md)
- [Test Impact Analysis](/features/test-impact-analysis.md)

