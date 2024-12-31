.. _test:
.. meta::
	:description:
		Test: Tests are tools that monitor the behavior of a code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Test
	:twitter:description: Test: Tests are tools that monitor the behavior of a code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Test
	:og:type: article
	:og:description: Tests are tools that monitor the behavior of a code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/test.ini.html
	:og:locale: en


Test
----

Tests are tools that monitor the behavior of a code. The code should produce the expected results that are provided in the tests.

There are many different types of tests : 

+ Unit test : close to the class level of the code
+ Integration test : they check that components collaborate nicely
+ Functional tests : close to the specifications and the business level
+ End-to-end tests : they run the software from beginning to the end
+ Performance tests : tests focusing on the behavior of the software under load
+ Acceptance tests : the tests that the software must pass to be accepted by the end user
+ Smoke tests : tests that quickly detect a problem in the software. They are the most obvious. 
+ Exploratory tests : when tests are used to check new behavior of the code
+ Regression tests : tests that ensures that previous behaviors are still behaving the same
+ Fuzzing : testing the software with random data

Tests may be manual, when they are executed manually. Those are not recorded. Test may be automated, when they are executed by another piece of software. 

PHP has several testing framework : PHPunit, pest, pint, simpletest, atoum.

Tests are often further automated in a Continuous Integration Pipeline.


See also `3 Compelling Reasons For Developers To Write Tests <https://christoph-rumpel.com/2023/6/three-compelling-reasons-for-developers-to-write-tests>`_, `Testing Best Practices: The Ultimate Guide <https://compiler.blog/testing-best-practices-the-ultimate-guide>`_, `Testing tips <https://testing-tips.sarvendev.com/>`_

Related : :ref:`Continuous Integration <ci>`
