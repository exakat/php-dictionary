# Test Framework
A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests. It typically offers assertion helpers, double, test runners, fixtures, and reporting.

A test framework does not dictate what to test; it provides the mechanics to express and execute tests repeatably, integrate with CI pipelines, and produce machine-readable reports, such as JUnit XML, code coverage, etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/test-framework.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/test-framework.ini.html","name":"Test Framework","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:20:28 +0000","dateModified":"Mon, 13 Jul 2026 09:20:28 +0000","description":"A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Test Framework.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/List_of_unit_testing_frameworks)**
## See Also

+ [PHPUnit](https://phpunit.de/)
+ [Pest](https://pestphp.com/)
+ [Codeception](https://codeception.com/)
+ [Testo](https://php-testo.github.io/)
+ [Atoum](https://atoum.org/)

## Related

+ [Test](test.ini.html)
+ [PHPunit](phpunit.ini.html)
+ [Continuous Integration (CI)](ci.ini.html)
+ [Double](double.ini.html)
+ [Fixture](fixture.ini.html)
+ [Code Coverage](code-coverage.ini.html)
+ [Continuous Integration](continuous-integration.ini.html)
+ [Continuous Integration](CI.ini.html)
+ [Regression](regression.ini.html)
+ [Test-Driven Development](test-driven-development.ini.html)
