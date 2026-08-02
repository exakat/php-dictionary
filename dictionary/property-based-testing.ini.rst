.. _property-based-testing:
.. _generative-testing:
.. meta::
	:description:
		Property-Based Testing: Property-based testing is a testing technique where, instead of writing individual examples, the developer describes properties that should always hold for a function, then a framework generates a large number of random inputs to try to falsify them.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property-Based Testing
	:twitter:description: Property-Based Testing: Property-based testing is a testing technique where, instead of writing individual examples, the developer describes properties that should always hold for a function, then a framework generates a large number of random inputs to try to falsify them
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Property-Based Testing
	:og:type: article
	:og:description: Property-based testing is a testing technique where, instead of writing individual examples, the developer describes properties that should always hold for a function, then a framework generates a large number of random inputs to try to falsify them
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/property-based-testing.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/property-based-testing.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/property-based-testing.ini.html","name":"Property-Based Testing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:45:57 +0000","dateModified":"Sun, 02 Aug 2026 06:45:57 +0000","description":"Property-based testing is a testing technique where, instead of writing individual examples, the developer describes properties that should always hold for a function, then a framework generates a large number of random inputs to try to falsify them","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Property-Based Testing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Property-Based Testing
----------------------

Property-based testing is a testing technique where, instead of writing individual examples, the developer describes properties that should always hold for a function, then a framework generates a large number of random inputs to try to falsify them. For instance, ``reverse(reverse($array)) === $array`` should hold for any array.

When a failing case is found, most property-based testing frameworks shrink the input to the smallest counter-example that still fails, which makes the root cause much easier to identify than with a single random failure.

This approach complements example-based unit tests: it explores the input space more broadly and often uncovers edge cases, such as empty arrays, negative numbers, or unicode strings, that developers would not have thought to write by hand.

Popular PHP implementations include Eris and PHP-Quickcheck, inspired by Haskell's QuickCheck.

.. code-block:: php
   
   <?php
   
       use Eris\Generator;
       use Eris\TestTrait;
   
       class ReverseTest extends \PHPUnit\Framework\TestCase
       {
           use TestTrait;
   
           public function testReverseIsInvolution(): void
           {
               $this->forAll(Generator\seq(Generator\int()))
                   ->then(function (array $array) {
                       $this->assertEquals($array, array_reverse(array_reverse($array)));
                   });
           }
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Software_testing#Property_testing>`__

See also `QuickCheck <https://en.wikipedia.org/wiki/QuickCheck>`_.

Related : :ref:`Test <test>`, :ref:`Unit Test <unit-test>`, :ref:`Fuzzing <fuzzing>`, :ref:`Mutation Testing <mutation-test>`, :ref:`Edge Case <edge-case>`, :ref:`Test Framework <test-framework>`, :ref:`Assertions <assertion>`

Related packages : `giorgiosironi/eris <https://packagist.org/packages/giorgiosironi/eris>`_
