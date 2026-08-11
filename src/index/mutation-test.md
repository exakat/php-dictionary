# Mutation Testing
Mutation testing is a way to enhance the quality of tests by checking how they react to a small perturbation of the code source.

After writing a suite of tests and having it pass, mutation testing adds a modification to the code: for example, replacing a ``+`` by a ``-``. Then, it runs the test suite again, and the expectation is that one test, at least, should spot the error. That way, the code is well bordered by the tests. 

When the suite is still green after mutating the code, this means that the test suite is not sufficient to spot it. The code is now a mutant, and the test suite should be updated.

``Infection`` is a PHP mutation Testing framework.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutation-test.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutation-test.html","name":"Mutation Testing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Mutation testing is a way to enhance the quality of tests by checking how they react to a small perturbation of the code source","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Mutation Testing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mutation-test"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Mutation_testing)**
## See Also

+ [Infection](https://infection.github.io/)

## Related

+ [Test](test.html)
+ [Unit Test](unit-test.html)
+ [Fuzzing](fuzzing.html)
+ [Code Coverage](code-coverage.html)
+ [PHPunit](phpunit.html)

## Related packages

+ [infection/infection](https://packagist.org/packages/infection/infection)
