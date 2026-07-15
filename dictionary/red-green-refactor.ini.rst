.. _red-green-refactor:
.. _tdd-cycle:
.. meta::
	:description:
		Red-Green-Refactor: Red-Green-Refactor is the core cycle of Test-Driven Development, TDD, a software development methodology where tests are written before the implementation code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Red-Green-Refactor
	:twitter:description: Red-Green-Refactor: Red-Green-Refactor is the core cycle of Test-Driven Development, TDD, a software development methodology where tests are written before the implementation code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Red-Green-Refactor
	:og:type: article
	:og:description: Red-Green-Refactor is the core cycle of Test-Driven Development, TDD, a software development methodology where tests are written before the implementation code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/red-green-refactor.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/red-green-refactor.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/red-green-refactor.ini.html","name":"Red-Green-Refactor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:28:39 +0000","dateModified":"Tue, 14 Jul 2026 06:28:39 +0000","description":"Red-Green-Refactor is the core cycle of Test-Driven Development, TDD, a software development methodology where tests are written before the implementation code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Red-Green-Refactor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Red-Green-Refactor
------------------

Red-Green-Refactor is the core cycle of Test-Driven Development, TDD, a software development methodology where tests are written before the implementation code.

The cycle consists of three phases:

+ Red: write a failing test that defines the desired behavior. Since the implementation does not exist yet, the test fails
+ Green: write the minimum amount of code necessary to make the test pass. The implementation does not need to be elegant or optimized; it just needs to satisfy the test.
+ Refactor: improve the code's structure, readability, and performance while keeping all tests green. This step eliminates duplication, applies design patterns, and enhances code quality.

This disciplined approach ensures:

+ Comprehensive test coverage from the start
+ Clear understanding of requirements before implementation
+ Incremental, verifiable progress
+ Clean, well-designed code through continuous refactoring
+ Confidence to make changes without breaking existing functionality

TDD was popularized by Kent Beck in his book ``Test-Driven Development: By Example`` and is widely adopted in modern software development practices.

.. code-block:: php
   
   <?php
   
       // RED: Write a failing test
       class CalculatorTest extends \PHPUnit\Framework\TestCase {
           public function test_add_returns_sum(): void {
               $calc = new Calculator();
               $this->assertEquals(5, $calc->add(2, 3));
           }
       }
   
       // GREEN: Minimal implementation to pass
       class Calculator {
           public function add(int $a, int $b): int {
               return $a + $b;
           }
       }
   
       // REFACTOR: Improve the code
       class Calculator {
           public function add(int ...$numbers): int {
               return array_sum($numbers);
           }
       }
   
   ?>


`Documentation <https://martinfowler.com/articles/tdd.html>`__

See also `Test-Driven Development by Kent Beck <https://www.oreilly.com/library/view/test-driven-development/0321146530/>`_ and `PHPUnit <https://phpunit.de/>`_.

Related : :ref:`Test-Driven Development <test-driven-development>`, :ref:`Refactoring <refactoring>`, :ref:`Unit Test <unit-test>`, :ref:`Test <test>`, :ref:`PHPunit <phpunit>`, :ref:`Clean Code <clean-code>`, :ref:`Best Practices <best-practice>`, :ref:`Test Framework <test-framework>`, :ref:`Assertions <assertion>`, :ref:`Test Pyramid <test-pyramid>`

Related packages : `phpunit/phpunit <https://packagist.org/packages/phpunit/phpunit>`_
