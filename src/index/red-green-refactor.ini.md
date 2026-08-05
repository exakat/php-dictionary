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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/red-green-refactor.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/red-green-refactor.ini.html","name":"Red-Green-Refactor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:56:07 +0000","dateModified":"Fri, 24 Jul 2026 15:56:07 +0000","description":"Red-Green-Refactor is the core cycle of Test-Driven Development, TDD, a software development methodology where tests are written before the implementation code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Red-Green-Refactor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://martinfowler.com/bliki/TestDrivenDevelopment.html)**
## See Also

+ [Test-Driven Development by Kent Beck](https://externe.pages.maxds.fr/max-blog/test-driven-development-by-example/)
+ [PHPUnit](https://phpunit.de/)

## Related

+ [Test-Driven Development](test-driven-development.ini.html)
+ [Refactoring](refactoring.ini.html)
+ [Unit Test](unit-test.ini.html)
+ [Test](test.ini.html)
+ [PHPunit](phpunit.ini.html)
+ [Clean Code](clean-code.ini.html)
+ [Best Practices](best-practice.ini.html)
+ [Test Framework](test-framework.ini.html)
+ [Assertions](assertion.ini.html)
+ [Test Pyramid](test-pyramid.ini.html)

## Related packages

+ [phpunit/phpunit](https://packagist.org/packages/phpunit/phpunit)
