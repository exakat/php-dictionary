# Test Framework
A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests. It typically offers assertion helpers, double, test runners, fixtures, and reporting.

A test framework does not dictate what to test; it provides the mechanics to express and execute tests repeatably, integrate with CI pipelines, and produce machine-readable reports, such as JUnit XML, code coverage, etc.
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

## See Also

+ [PHPUnit](https://phpunit.de/)
+ [Pest](https://pestphp.com/)
+ [Codeception](https://codeception.com/)
+ [Testo](https://php-testo.github.io/)
+ [Atoum](https://atoum.org/)

Related : [Test](Test), [PHPunit](PHPunit), [Continuous Integration (CI)](Continuous Integration (CI)), [Double](Double), [Fixture](Fixture), [Code Coverage](Code Coverage), [Continuous Integration](Continuous Integration), [Continuous Integration](Continuous Integration), [Regression](Regression), [Test-Driven Development](Test-Driven Development)
