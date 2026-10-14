# Test Double
A test double is any object that stands in for a real dependency during a test. The name comes from stunt doubles: the object plays the role of the real one, so the code under test can run without it.

There are several kinds of test doubles:

+ Dummy: passed around to satisfy a signature, but never used.
+ Stub: returns fixed answers to calls.
+ Spy: records how it was called, so the test can check it later.
+ Fake: a working but simplified implementation, such as an in-memory repository.
+ Mock: checks expectations on the calls it receives.

Test doubles keep tests fast, isolated and reproducible, because they do not depend on databases, networks or clocks.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-double.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-double.html","name":"Test Double","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 16:37:44 +0000","dateModified":"Wed, 14 Oct 2026 16:37:44 +0000","description":"A test double is any object that stands in for a real dependency during a test","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-double.html"]}],"alternateName":["test doubles"],"keywords":["test","best practice"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mocking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fixture.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canned-response.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/martinfowler.com\/articles\/mocksArentStubs.html"},{"@type":"CreativeWork","name":"Test doubles (PHPUnit)","url":"https:\/\/docs.phpunit.de\/en\/13.1\/test-doubles.html#test-doubles"},{"@type":"CreativeWork","name":"Mocks Aren't Stubs","url":"https:\/\/martinfowler.com\/articles\/mocksArentStubs.html"},{"@type":"CreativeWork","name":"Test double (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Test_double"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"test-double"}]}]}</script>
**[Documentation](https://martinfowler.com/articles/mocksArentStubs.html)**
## See Also

+ [Test doubles (PHPUnit)](https://docs.phpunit.de/en/13.1/test-doubles.html#test-doubles)
+ [Mocks Aren't Stubs](https://martinfowler.com/articles/mocksArentStubs.html)
+ [Test double (Wikipedia)](https://en.wikipedia.org/wiki/Test_double)

## Related

+ [Mock](mock.html)
+ [Mocking](mocking.html)
+ [Spy](spy.html)
+ [Fixture](fixture.html)
+ [Canned Response](canned-response.html)

## Related packages

+ [phpunit/phpunit](https://packagist.org/packages/phpunit/phpunit)
