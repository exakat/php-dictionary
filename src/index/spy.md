# Spy
A spy is a test double that wraps a real object, letting its original behavior run while recording how it was called: which methods, with which arguments, and how many times. Unlike a full mock, which replaces the dependency entirely, a spy is a partial substitute, so it is also called a ``partial mock``.

Spies are useful when the actual behavior of the dependency is needed for the test to be meaningful, but the test also needs to assert on the interaction with that dependency afterward.

Because a spy keeps the real implementation active, it can have the same side effects as the original code, which makes it less isolating than a mock, but closer to the real production behavior.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spy.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spy.html","name":"Spy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 04:21:11 +0000","dateModified":"Wed, 12 Aug 2026 04:21:11 +0000","description":"A spy is a test double that wraps a real object, letting its original behavior run while recording how it was called: which methods, with which arguments, and how many times","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Spy.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"spy"}]}]}</script>
**[Documentation](https://www.javacodegeeks.com/2015/11/mocks-spies-partial-mocks-and-stubbing.html)**
## See Also

+ [Working with Spies and Partial Mocks](https://www.baeldung.com/members/courses/learn-mockito/lessons/lesson-1-working-with-spies-and-partial-mocks)
+ [Test Double PHP](https://testdoublephp.com/)

## Related

+ [Mock](mock.html)
+ [Test Data Provider](test-data-provider.html)
+ [Fixture](fixture.html)

## Related packages

+ [mockery/mockery](https://packagist.org/packages/mockery/mockery)
+ [phpspec/prophecy](https://packagist.org/packages/phpspec/prophecy)
