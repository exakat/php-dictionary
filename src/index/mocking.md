# Mocking
Mocking is the practice of replacing a dependency with a controlled object during a test. The code under test calls the mock as if it were the real dependency, and the test decides what it returns and checks how it was called.

Mocking is useful when the real dependency is slow, unavailable, or hard to put in a specific state: a remote API, a payment gateway, a clock, or a rare error condition.

Mocks have a cost. They must imitate the behaviour of the real dependency, so any change to that dependency has to be reflected in the mock. Tests that mock too much end up checking the mock rather than the code.

Mocking is done by hand, with an anonymous class, or with a library such as PHPUnit's mock builder, Mockery or Prophecy.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mocking.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mocking.html","name":"Mocking","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 16:55:56 +0000","dateModified":"Wed, 14 Oct 2026 16:55:56 +0000","description":"Mocking is the practice of replacing a dependency with a controlled object during a test","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mocking.html"]}],"alternateName":["mocks"],"keywords":["test","best practice"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-double.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fixture.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/third-party-api.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/martinfowler.com\/articles\/mocksArentStubs.html"},{"@type":"CreativeWork","name":"Mocking","url":"https:\/\/laravel.com\/docs\/13.x\/mocking"},{"@type":"CreativeWork","name":"Test doubles (PHPUnit)","url":"https:\/\/docs.phpunit.de\/en\/13.1\/test-doubles.html#test-doubles"},{"@type":"CreativeWork","name":"Avoid mocking repositories by using in-memory implementations","url":"https:\/\/danielrotter.at\/2023\/09\/22\/avoid-mocking-repositories-by-using-in-memory-implementations.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mocking"}]}]}</script>
**[Documentation](https://martinfowler.com/articles/mocksArentStubs.html)**
## See Also

+ [Mocking](https://laravel.com/docs/13.x/mocking)
+ [Test doubles (PHPUnit)](https://docs.phpunit.de/en/13.1/test-doubles.html#test-doubles)
+ [Avoid mocking repositories by using in-memory implementations](https://danielrotter.at/2023/09/22/avoid-mocking-repositories-by-using-in-memory-implementations.html)

## Related

+ [Mock](mock.html)
+ [Test Double](test-double.html)
+ [Spy](spy.html)
+ [Fixture](fixture.html)
+ [Third-Party API](third-party-api.html)

## Related packages

+ [mockery/mockery](https://packagist.org/packages/mockery/mockery)
+ [phpspec/prophecy](https://packagist.org/packages/phpspec/prophecy)
