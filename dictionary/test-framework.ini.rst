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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot use temporary expression in write context.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot use temporary expression in write context.html","name":"Test Framework","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Test Framework.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Test Framework
--------------

A test framework is a library or tool that provides the infrastructure for writing, organising, and running automated tests. It typically offers assertion helpers, test runners, fixtures, and reporting.

In PHP, the dominant test framework is PHPUnit. Pest is a newer alternative built on top of PHPUnit, offering a more expressive, function-based syntax. Other frameworks include atoum and Codeception.

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


See also `PHPUnit <https://phpunit.de/>`_, `Pest <https://pestphp.com/>`_ and `Codeception <https://codeception.com/>`_.

Related : :ref:`Test <test>`, :ref:`PHPunit <phpunit>`, :ref:`Continuous Integration (CI) <ci>`, :ref:`Code Coverage <code-coverage>`
