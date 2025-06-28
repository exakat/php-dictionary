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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Test","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 13 May 2025 05:31:55 +0000","dateModified":"Tue, 13 May 2025 05:31:55 +0000","description":"Tests are tools that monitor the behavior of a code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Test.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
+ Mutation testing : testing the software robustness by altering the code 

Tests may be manual, when they are executed manually. Those are not recorded. Test may be automated, when they are executed by another piece of software. 

PHP has several testing framework : PHPunit, pest, pint, simpletest, atoum.

Tests are often further automated in a Continuous Integration Pipeline.


See also `3 Compelling Reasons For Developers To Write Tests <https://christoph-rumpel.com/2023/6/three-compelling-reasons-for-developers-to-write-tests>`_, `Testing Best Practices: The Ultimate Guide <https://compiler.blog/testing-best-practices-the-ultimate-guide>`_, `Testing tips <https://testing-tips.sarvendev.com/>`_

Related : :ref:`Continuous Integration (CI) <ci>`
