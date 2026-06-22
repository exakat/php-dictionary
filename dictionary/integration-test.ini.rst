.. _integration-test:
.. meta::
	:description:
		Integration Test: Integration tests are tests that verify how multiple components or packages work together, as opposed to unit tests, where test are dedicated to one component.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Integration Test
	:twitter:description: Integration Test: Integration tests are tests that verify how multiple components or packages work together, as opposed to unit tests, where test are dedicated to one component
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Integration Test
	:og:type: article
	:og:description: Integration tests are tests that verify how multiple components or packages work together, as opposed to unit tests, where test are dedicated to one component
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/integration-test.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Integration Test","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Integration tests are tests that verify how multiple components or packages work together, as opposed to unit tests, where test are dedicated to one component","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Integration Test.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Integration Test
----------------

Integration tests are tests that verify how multiple components or packages work together, as opposed to unit tests, where test are dedicated to one component.

The most important with integration testing is to test realistic scenarios: actual HTTP requests, real database writes, real service interactions, so as to cover the bugs that only appear when everything is wired together.

Integration testing relies on mock objects, to simulate external, autonomous or hard to generate situations.

`Documentation <https://en.wikipedia.org/wiki/Integration_testing>`__

See also `PHP Test Driven Development Part 5: Integration Testing <https://medium.com/@sameernyaupane/php-test-driven-development-part-5-integration-testing-51535ca56bf0s>`_.

Related : :ref:`Test <test>`, :ref:`End To End Test <end-to-end-test>`, :ref:`Unit Test <unit-test>`
