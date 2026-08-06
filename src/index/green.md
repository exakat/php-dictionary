# Green
Green describes a build, a test run, or a pipeline stage that has passed: every assertion succeeded, nothing failed, nothing errored. The term comes from the traffic-light convention used by CI dashboards and test runners, where green means go and red means stop.

Green is best known from the ``red, green, refactor`` cycle of test-driven development: write a failing test in red, write the minimum code to make it pass to green, then improve the code without changing its behaviour, with refactor. A codebase is only safe to refactor once it is green, since the tests are what confirm that behaviour was preserved.

At the pipeline level, a green build means every stage, tests, static analysis, linting, deployment checks, succeeded, so the commit is considered safe to merge or deploy. A red build blocks merges in most CI setups until it turns green again. Keeping the main branch green is a common team discipline: nobody should merge on top of a known-broken build, since that hides new failures behind an old one.

``Green`` is distinct from ``greenfield``, a fresh project with no legacy constraints, and from a ``green thread``, a lightweight, runtime-scheduled thread. All three share the same word but describe unrelated concepts.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/green.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/green.html","name":"Green","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:34:00 +0000","dateModified":"Thu, 16 Jul 2026 14:34:00 +0000","description":"Green describes a build, a test run, or a pipeline stage that has passed: every assertion succeeded, nothing failed, nothing errored","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Green.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // PHPUnit: red before green
    final class CartTest extends \PHPUnit\Framework\TestCase
    {
        public function testEmptyCartTotalIsZero(): void
        {
            $cart = new Cart();
    
            // Red: Cart::total() does not exist yet.
            // Green: implement Cart::total() to return 0 for an empty cart.
            $this->assertSame(0, $cart->total());
        }
    }
    
    // Running the suite: exit code 0 means green.
    // vendor/bin/phpunit --colors=always
    // $ echo $?
    // 0

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Test-driven_development)**
## See Also

+ [Test-Driven Development by Kent Beck](https://martinfowler.com/bliki/TestDrivenDevelopment.html)
+ [Test-Driven Development (TDD) in PHP](https://webreference.com/php/testing/tdd/)

## Related

+ [Test-Driven Development](test-driven-development.ini.html)
+ [Continuous Integration](continuous-integration.ini.html)
+ [Regression](regression.ini.html)
+ [Greenfield](green-field.ini.html)
+ [Green Thread](green-thread.ini.html)
+ [Testable](testable.ini.html)
