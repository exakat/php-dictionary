# Mock
A mock replaces a code dependency with an object, to make testing easier. Mocks are used when the dependency is difficult to set in a reproducible state: for example, in a rare state, or after a long set up.

Mocks turns the dependency into another piece of code, with total control over its behavior. 

On the other hand, mocks have to be coded to replace the dependency, and emulates its behavior as closely as possible: any change to the dependency behavior has to be back-ported. 

Mock objects are also called ``test double``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mock.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mock.html","name":"Mock","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:21:58 +0000","dateModified":"Tue, 11 Aug 2026 14:21:58 +0000","description":"A mock replaces a code dependency with an object, to make testing easier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mock.html"]}],"alternateName":["test-double"],"keywords":["test","versionUpdate"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-data-provider.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fixture.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-alias.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.radview.com\/glossary\/what-is-mock-testing\/"},{"@type":"CreativeWork","name":"Test doubles","url":"https:\/\/docs.phpunit.de\/en\/13.1\/test-doubles.html#test-doubles"},{"@type":"CreativeWork","name":"Mocking","url":"https:\/\/laravel.com\/docs\/13.x\/mocking"},{"@type":"CreativeWork","name":"Avoid mocking repositories by using in-memory implementations","url":"https:\/\/danielrotter.at\/2023\/09\/22\/avoid-mocking-repositories-by-using-in-memory-implementations.html"},{"@type":"CreativeWork","name":"Testing without mocking frameworks","url":"https:\/\/blog.frankdejonge.nl\/testing-without-mocking-frameworks\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mock"}]}]}</script>
**[Documentation](https://www.radview.com/glossary/what-is-mock-testing/)**
## See Also

+ [Test doubles](https://docs.phpunit.de/en/13.1/test-doubles.html#test-doubles)
+ [Mocking](https://laravel.com/docs/13.x/mocking)
+ [Avoid mocking repositories by using in-memory implementations](https://danielrotter.at/2023/09/22/avoid-mocking-repositories-by-using-in-memory-implementations.html)
+ [Testing without mocking frameworks](https://blog.frankdejonge.nl/testing-without-mocking-frameworks/)

## Related

+ [Test Data Provider](test-data-provider.html)
+ [Spy](spy.html)
+ [Fixture](fixture.html)
+ [Use Alias](use-alias.html)

## Related packages

+ [mockery/mockery](https://packagist.org/packages/mockery/mockery)
+ [phpspec/prophecy](https://packagist.org/packages/phpspec/prophecy)
