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

## See Also

+ [3 Compelling Reasons For Developers To Write Tests](https://christoph-rumpel.com/2023/6/three-compelling-reasons-for-developers-to-write-tests)
+ [Testing tips](https://testing-tips.sarvendev.com/)
+ [How to test procedural functions with PHPUnit](https://unixdigest.com/tutorials/how-to-test-procedural-functions-with-phpunit.html)

Related : [Feature Testing](Feature Testing), [Code Coverage](Code Coverage), [Integration Test](Integration Test), [Unit Test](Unit Test), [End To End Test](End To End Test), [PHPunit](PHPunit), [Quality](Quality), [Refactoring](Refactoring), [Clock](Clock), [Faker](Faker), [Snapshot](Snapshot), [Test Pyramid](Test Pyramid), [DevOps](DevOps), [Edge Case](Edge Case), [Continuous Integration (CI)](Continuous Integration (CI)), [Continuous Delivery (CD)](Continuous Delivery (CD)), [Fuzzing](Fuzzing), [Property-Based Testing](Property-Based Testing), [Mutation Testing](Mutation Testing), [Test Framework](Test Framework), [Build](Build), [Continuous Integration](Continuous Integration), [Continuous Integration](Continuous Integration), [Regression](Regression), [Reliability](Reliability), [Test-Driven Development](Test-Driven Development), [Test Impact Analysis](Test Impact Analysis)
