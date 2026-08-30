---
type: "PHP Feature"
title: "Red-Green-Refactor"
description: "Red-Green-Refactor is the core cycle of Test-Driven Development, TDD, a software development methodology where tests are written before the implementation code."
resource: "https://martinfowler.com/bliki/TestDrivenDevelopment.html"
tags: ["methodology", "testing", "tdd"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Red-Green-Refactor

Red-Green-Refactor is the core cycle of Test-Driven Development, TDD, a software development methodology where tests are written before the implementation code.

The cycle consists of three phases:

+ Red: write a failing test that defines the desired behavior. Since the implementation does not exist yet, the test fails
+ Green: write the minimum amount of code necessary to make the test pass. The implementation does not need to be elegant or optimized; it just needs to satisfy the test.
+ Refactor: improve the code's structure, readability, and performance while keeping all tests green. This step eliminates duplication, applies design patterns, and enhances code quality.

This disciplined approach ensures:

+ Comprehensive test coverage from the start
+ Clear understanding of requirements before implementation
+ Incremental, verifiable progress
+ Clean, well-designed code through continuous refactoring
+ Confidence to make changes without breaking existing functionality

TDD was popularized by Kent Beck in his book ``Test-Driven Development: By Example`` and is widely adopted in modern software development practices.

```php
<?php

    // RED: Write a failing test
    class CalculatorTest extends \PHPUnit\Framework\TestCase {
        public function test_add_returns_sum(): void {
            $calc = new Calculator();
            $this->assertEquals(5, $calc->add(2, 3));
        }
    }

    // GREEN: Minimal implementation to pass
    class Calculator {
        public function add(int $a, int $b): int {
            return $a + $b;
        }
    }

    // REFACTOR: Improve the code
    class Calculator {
        public function add(int ...$numbers): int {
            return array_sum($numbers);
        }
    }

?>
```

## Documentation
- [https://martinfowler.com/bliki/TestDrivenDevelopment.html](https://martinfowler.com/bliki/TestDrivenDevelopment.html)

## See Also
- [Test-Driven Development by Kent Beck](https://externe.pages.maxds.fr/max-blog/test-driven-development-by-example/)
- [PHPUnit](https://phpunit.de/)

## Related
- [Test-Driven Development](/features/test-driven-development.md)
- [Refactoring](/features/refactoring.md)
- [Unit Test](/features/unit-test.md)
- [Test](/features/test.md)
- [PHPunit](/features/phpunit.md)
- [Clean Code](/features/clean-code.md)
- [Best Practices](/features/best-practice.md)
- [Test Framework](/features/test-framework.md)
- [Assertions](/features/assertion.md)
- [Test Pyramid](/features/test-pyramid.md)

## Details
- Packagist: [phpunit/phpunit](https://packagist.org/packages/phpunit/phpunit)

