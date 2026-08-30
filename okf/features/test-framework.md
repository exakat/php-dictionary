---
type: "concept"
title: "Test Framework"
description: "A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests."
resource: "https://en.wikipedia.org/wiki/List_of_unit_testing_frameworks"
tags: ["concept", "test", "tool"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Test Framework

A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests. It typically offers assertion helpers, double, test runners, fixtures, and reporting.

A test framework does not dictate what to test; it provides the mechanics to express and execute tests repeatably, integrate with CI pipelines, and produce machine-readable reports, such as ``JUnit XML``, code coverage, etc.

```php
<?php

    // PHPUnit example
    use PHPUnit\Framework\TestCase;

    class MathTest extends TestCase {
        public function testAdd(): void {
            $this->assertSame(4, 2 + 2);
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/List_of_unit_testing_frameworks](https://en.wikipedia.org/wiki/List_of_unit_testing_frameworks)

## See Also
- [PHPUnit](https://phpunit.de/)
- [Pest](https://pestphp.com/)
- [Codeception](https://codeception.com/)
- [Testo](https://php-testo.github.io/)
- [Atoum](https://atoum.org/)

## Related
- [Test](/features/test.md)
- [PHPunit](/features/phpunit.md)
- [Continuous Integration (CI)](/features/ci.md)
- [Double](/features/double.md)
- [Fixture](/features/fixture.md)
- [Code Coverage](/features/code-coverage.md)
- [Continuous Integration](/features/continuous-integration.md)
- [Regression](/features/regression.md)
- [Test-Driven Development](/features/test-driven-development.md)

