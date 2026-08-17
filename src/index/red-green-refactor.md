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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/red-green-refactor.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/red-green-refactor.html","name":"Red-Green-Refactor","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:56:07 +0000","dateModified":"Fri, 24 Jul 2026 15:56:07 +0000","description":"Red-Green-Refactor is the core cycle of Test-Driven Development, TDD, a software development methodology where tests are written before the implementation code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Red-Green-Refactor.html"]}],"alternateName":["tdd-cycle"],"keywords":["methodology","testing","tdd"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-driven-development.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/refactoring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unit-test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpunit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clean-code.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/best-practice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-framework.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assertion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-pyramid.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/martinfowler.com\/bliki\/TestDrivenDevelopment.html"},{"@type":"CreativeWork","name":"Test-Driven Development by Kent Beck","url":"https:\/\/externe.pages.maxds.fr\/max-blog\/test-driven-development-by-example\/"},{"@type":"CreativeWork","name":"PHPUnit","url":"https:\/\/phpunit.de\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"red-green-refactor"}]}]}</script>
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

+ [Test-Driven Development](test-driven-development.html)
+ [Refactoring](refactoring.html)
+ [Unit Test](unit-test.html)
+ [Test](test.html)
+ [PHPunit](phpunit.html)
+ [Clean Code](clean-code.html)
+ [Best Practices](best-practice.html)
+ [Test Framework](test-framework.html)
+ [Assertions](assertion.html)
+ [Test Pyramid](test-pyramid.html)

## Related packages

+ [phpunit/phpunit](https://packagist.org/packages/phpunit/phpunit)
