.. _test-framework:
.. meta::
	:description:
		Test Framework: A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Test Framework
	:twitter:description: Test Framework: A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Test Framework
	:og:type: article
	:og:description: A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/test-framework.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/test-framework.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/test-framework.ini.html","name":"Test Framework","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:20:28 +0000","dateModified":"Mon, 13 Jul 2026 09:20:28 +0000","description":"A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Test Framework.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Test Framework
--------------

A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests. It typically offers assertion helpers, double, test runners, fixtures, and reporting.

A test framework does not dictate what to test; it provides the mechanics to express and execute tests repeatably, integrate with CI pipelines, and produce machine-readable reports, such as JUnit XML, code coverage, etc.

.. code-block:: php
   
   <?php
   
       // PHPUnit example
       use PHPUnit\Framework\TestCase;
   
       class MathTest extends TestCase {
           public function testAdd(): void {
               $this->assertSame(4, 2 + 2);
           }
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/List_of_unit_testing_frameworks>`__

See also `PHPUnit <https://phpunit.de/>`_, `Pest <https://pestphp.com/>`_, `Codeception <https://codeception.com/>`_, `Testo <https://php-testo.github.io/>`_ and `Atoum <https://atoum.org/>`_.

Related : :ref:`Test <test>`, :ref:`PHPunit <phpunit>`, :ref:`Continuous Integration (CI) <ci>`, :ref:`Double <double>`, :ref:`Fixture <fixture>`, :ref:`Code Coverage <code-coverage>`, :ref:`Continuous Integration <continuous-integration>`, :ref:`Continuous Integration <CI>`, :ref:`Regression <regression>`, :ref:`Test-Driven Development <test-driven-development>`
