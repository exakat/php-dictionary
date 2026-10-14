# Contract Test
A contract test checks that two sides of an interface agree on the messages they exchange. For an HTTP API, the consumer, aka the application, declares what it expects from the provider, aka the remote service: the endpoints, the request fields, the response fields and their types. The provider is then checked against that contract.

Contract tests sit between unit tests and end-to-end tests. Unlike unit tests with a mock, they catch the case where the mock no longer matches the real service. Unlike end-to-end tests, they do not need the whole system running, and can run offline against the recorded contract.

A contract test is only as good as its contract, so it must be updated when either side changes.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/contract-test.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/contract-test.html","name":"Contract Test","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 16:57:05 +0000","dateModified":"Wed, 14 Oct 2026 16:57:05 +0000","description":"A contract test checks that two sides of an interface agree on the messages they exchange","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/contract-test.html"]}],"alternateName":["contract testing"],"keywords":["test","api","best practice"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/contract.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mocking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-double.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canned-response.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integration-test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/third-party-api.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/martinfowler.com\/bliki\/ContractTest.html"},{"@type":"CreativeWork","name":"Pact PHP","url":"https:\/\/github.com\/pact-foundation\/pact-php"},{"@type":"CreativeWork","name":"Martin Fowler: Contract Test","url":"https:\/\/martinfowler.com\/bliki\/ContractTest.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"contract-test"}]}]}</script>
**[Documentation](https://martinfowler.com/bliki/ContractTest.html)**
## See Also

+ [Pact PHP](https://github.com/pact-foundation/pact-php)
+ [Martin Fowler: Contract Test](https://martinfowler.com/bliki/ContractTest.html)

## Related

+ [Design By Contract (DBC)](contract.html)
+ [Mocking](mocking.html)
+ [Test Double](test-double.html)
+ [Canned Response](canned-response.html)
+ [Integration Test](integration-test.html)
+ [Third-Party API](third-party-api.html)

## Related packages

+ [pact-foundation/pact-php](https://packagist.org/packages/pact-foundation/pact-php)
