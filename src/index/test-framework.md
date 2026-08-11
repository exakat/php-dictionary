# Test Framework
A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests. It typically offers assertion helpers, double, test runners, fixtures, and reporting.

A test framework does not dictate what to test; it provides the mechanics to express and execute tests repeatably, integrate with CI pipelines, and produce machine-readable reports, such as ``JUnit XML``, code coverage, etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-framework.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-framework.html","name":"Test Framework","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 17:03:38 +0000","dateModified":"Mon, 10 Aug 2026 17:03:38 +0000","description":"A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Test Framework.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"test-framework"}]}]}</script>
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

+ [Test](test.html)
+ [PHPunit](phpunit.html)
+ [Continuous Integration (CI)](ci.html)
+ [Double](double.html)
+ [Fixture](fixture.html)
+ [Code Coverage](code-coverage.html)
+ [Continuous Integration](continuous-integration.html)
+ [Continuous Integration](CI.html)
+ [Regression](regression.html)
+ [Test-Driven Development](test-driven-development.html)
