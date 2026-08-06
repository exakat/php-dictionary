# Mutation Testing
Mutation testing is a way to enhance the quality of tests by checking how they react to a small perturbation of the code source.

After writing a suite of tests and having it pass, mutation testing adds a modification to the code: for example, replacing a ``+`` by a ``-``. Then, it runs the test suite again, and the expectation is that one test, at least, should spot the error. That way, the code is well bordered by the tests. 

When the suite is still green after mutating the code, this means that the test suite is not sufficient to spot it. The code is now a mutant, and the test suite should be updated.

``Infection`` is a PHP mutation Testing framework.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mutation-test.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mutation-test.html","name":"Mutation Testing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:30:29 +0000","dateModified":"Thu, 23 Jul 2026 13:30:29 +0000","description":"Mutation testing is a way to enhance the quality of tests by checking how they react to a small perturbation of the code source","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Mutation Testing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Mutation_testing)**
## See Also

+ [Infection](https://infection.github.io/)

## Related

+ [Test](test.ini.html)
+ [Unit Test](unit-test.ini.html)
+ [Fuzzing](fuzzing.ini.html)
+ [Code Coverage](code-coverage.ini.html)
+ [PHPunit](phpunit.ini.html)

## Related packages

+ [infection/infection](https://packagist.org/packages/infection/infection)
