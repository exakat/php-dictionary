# Test
Tests are tools that monitor the behavior of a code. The code should produce the expected results that are provided in the tests.

There are many different types of tests: 

+ Unit test: close to the class level of the code
+ Integration test: they check that components collaborate nicely
+ Functional tests: close to the specifications and the business level
+ Feature testing: close to the specifications and the business level
+ End-to-end tests: they run the software from beginning to the end
+ Performance tests: tests focusing on the behavior of the software under load
+ Property-based tests: tests focusing on the satisfaction of properties
+ Acceptance tests: the tests that the software must pass to be accepted by the end user
+ Smoke tests: tests that quickly detect a problem in the software. They are the most obvious. 
+ Exploratory tests: when tests are used to check new behavior of the code
+ Regression tests: tests that ensures that previous behaviors are still behaving the same
+ Fuzzing: testing the software with random data
+ Mutation testing: testing the software robustness by altering the code 

Tests may be manual, when they are executed manually. Those are not recorded. Test may be automated, when they are executed by another piece of software. 

PHP offers several testing framework, such as ``PHPunit``, ``pest``, ``pint``, ``simpletest``, ``atoum``.

Tests are often further automated in a Continuous Integration Pipeline.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/test.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/test.html","name":"Test","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 05:50:53 +0000","dateModified":"Tue, 04 Aug 2026 05:50:53 +0000","description":"Tests are tools that monitor the behavior of a code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Test.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Software_testing)**
## See Also

+ [3 Compelling Reasons For Developers To Write Tests](https://christoph-rumpel.com/2023/6/three-compelling-reasons-for-developers-to-write-tests)
+ [Testing tips](https://testing-tips.sarvendev.com/)
+ [How to test procedural functions with PHPUnit](https://unixdigest.com/tutorials/how-to-test-procedural-functions-with-phpunit.html)

## Related

+ [Feature Testing](feature-testing.ini.html)
+ [Code Coverage](code-coverage.ini.html)
+ [Integration Test](integration-test.ini.html)
+ [Unit Test](unit-test.ini.html)
+ [End To End Test](end-to-end-test.ini.html)
+ [PHPunit](phpunit.ini.html)
+ [Quality](quality.ini.html)
+ [Refactoring](refactoring.ini.html)
+ [Clock](clock.ini.html)
+ [Faker](faker.ini.html)
+ [Snapshot](snapshot.ini.html)
+ [Test Pyramid](test-pyramid.ini.html)
+ [DevOps](devops.ini.html)
+ [Edge Case](edge-case.ini.html)
+ [Continuous Integration (CI)](ci.ini.html)
+ [Continuous Delivery (CD)](cd.ini.html)
+ [Fuzzing](fuzzing.ini.html)
+ [Property-Based Testing](property-based-testing.ini.html)
+ [Mutation Testing](mutation-test.ini.html)
+ [Test Framework](test-framework.ini.html)
+ [Build](build.ini.html)
+ [Continuous Integration](continuous-integration.ini.html)
+ [Continuous Integration](CI.ini.html)
+ [Regression](regression.ini.html)
+ [Reliability](reliability.ini.html)
+ [Test-Driven Development](test-driven-development.ini.html)
+ [Test Impact Analysis](test-impact-analysis.ini.html)
