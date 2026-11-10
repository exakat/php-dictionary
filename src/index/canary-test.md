# Canary Test
A canary test is a deliberately trivial test that is expected to pass. Its only job is to show that the test harness itself works: the autoloader loads, the database connects, the environment variables are set, and PHPUnit runs the suite. If the canary fails, the problem lies in the setup, not in the feature under test.

Without a canary, a broken setup can look like a broken feature. A suite that fails on every test for a missing configuration file gives the same red result as a real regression, and the team loses time looking for a bug in the code. A canary separates the two cases at a glance.

A canary test should stay simple and fast, and it should exercise exactly the parts the other tests depend on. It is not a substitute for unit or integration tests, and it should not check business logic.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canary-test.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canary-test.html","name":"Canary Test","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:38:14 +0000","dateModified":"Tue, 10 Nov 2026 11:38:14 +0000","description":"A canary test is a deliberately trivial test that is expected to pass","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canary-test.html"]}],"alternateName":["smoke-canary"],"keywords":["concept","testing","disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpunit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-framework.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unit-test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sentinel.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canary.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/docs.phpunit.de\/en\/13.4\/"},{"@type":"CreativeWork","name":"PHPUnit documentation","url":"https:\/\/docs.phpunit.de\/en\/13.4\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"canary-test"}]}]}</script>
```php
<?php

    use PHPUnit\Framework\TestCase;

    class CanaryTest extends TestCase
    {
        // If this fails, the harness is broken, not the feature under test
        public function testHarnessIsWorking(): void
        {
            $this->assertTrue(class_exists(\App\Kernel::class));
            $this->assertNotFalse(getenv('APP_ENV'));
        }
    }

?>
```

**[Documentation](https://docs.phpunit.de/en/13.4/)**
## See Also

+ [PHPUnit documentation](https://docs.phpunit.de/en/13.4/)

## Related

+ [PHPunit](phpunit.html)
+ [Test](test.html)
+ [Test Framework](test-framework.html)
+ [Unit Test](unit-test.html)
+ [Sentinel](sentinel.html)
+ [Canary](canary.html)
