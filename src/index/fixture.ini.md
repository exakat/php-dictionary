# Fixture
A fixture is a set of test data. They are used to set up the environment in a known state, so that to run the test in good conditions.

Fixtures typically populate a database, a filesystem, or an object graph with predictable values before a test runs, and are torn down afterward so that one test cannot leak state into the next. With ``PHPUnit``, this is often done through ``setUp()`` and ``tearDown()`` methods, or through dedicated fixture files loaded per test case or test suite.

Good fixtures make tests deterministic and repeatable: the same input state produces the same result every time, regardless of the order in which tests run or what ran before them. Poorly managed fixtures, by contrast, are a common source of flaky tests, since hidden dependencies between tests can make outcomes depend on execution order.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fixture.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fixture.ini.html","name":"Fixture","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:16:22 +0000","dateModified":"Tue, 04 Aug 2026 11:16:22 +0000","description":"A fixture is a set of test data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Fixture.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Test_fixture)**
## See Also

+ [Fixtures in PHPUnit](https://docs.phpunit.de/en/12.5/fixtures.html)
+ [Working with fixture data in your tests](https://dyrynda.com.au/blog/working-with-test-fixtures)
+ [Fixture Factory in PHP](https://medium.com/ticketswap/fixture-factory-in-php-7969efd9c5d7)

## Related

+ [Mock](mock.ini.html)
+ [Dataset](dataset.ini.html)
+ [PHPunit](phpunit.ini.html)
