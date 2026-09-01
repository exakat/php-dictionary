# Functional Test
Functional tests are tests that verify that a feature of the application behaves as specified, by exercising it the way a user would, through its public interface, without checking the internal implementation.

Functional tests operate at a higher level than unit tests: instead of testing a single class or function in isolation, they drive a whole feature, such as submitting a form or calling an API endpoint, and assert on its observable output. They differ from acceptance tests in that they may run at any stage of development to validate that a feature works, rather than serving as the final, business-facing sign-off before release.

Functional tests are a form of black box testing, and are commonly written against a running application, a web page, or an HTTP API, using frameworks such as Codeception, Behat, or PHPUnit's own functional test cases in Symfony and Laravel.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functional-test.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functional-test.html","name":"Functional Test","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 07:37:41 +0000","dateModified":"Sun, 30 Aug 2026 07:37:41 +0000","description":"Functional tests are tests that verify that a feature of the application behaves as specified, by exercising it the way a user would, through its public interface, without checking the internal implementation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functional-test.html"]}],"keywords":["test"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acceptance-test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blackbox.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unit-test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integration-test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/end-to-end-test.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Functional_testing"},{"@type":"CreativeWork","name":"Functional Testing: Complete Guide with Examples","url":"https:\/\/www.functionize.com\/automated-testing\/what-is-functional-testing"},{"@type":"CreativeWork","name":"Functional vs non-functional software testing","url":"https:\/\/circleci.com\/blog\/functional-vs-non-functional-testing\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"functional-test"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Functional_testing)**
## See Also

+ [Functional Testing: Complete Guide with Examples](https://www.functionize.com/automated-testing/what-is-functional-testing)
+ [Functional vs non-functional software testing](https://circleci.com/blog/functional-vs-non-functional-testing/)

## Related

+ [Test](test.html)
+ [Acceptance Test](acceptance-test.html)
+ [Black Box Testing](blackbox.html)
+ [Unit Test](unit-test.html)
+ [Integration Test](integration-test.html)
+ [End To End Test](end-to-end-test.html)

## Related packages

+ [codeception/codeception](https://packagist.org/packages/codeception/codeception)
+ [behat/behat](https://packagist.org/packages/behat/behat)
