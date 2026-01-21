.. _mock:
.. meta::
	:description:
		Mock: A mock replaces a code dependency with an object, to make testing easier.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Mock
	:twitter:description: Mock: A mock replaces a code dependency with an object, to make testing easier
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Mock
	:og:type: article
	:og:description: A mock replaces a code dependency with an object, to make testing easier
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mock.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Mock","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:20:47 +0000","dateModified":"Tue, 20 Jan 2026 07:20:47 +0000","description":"A mock replaces a code dependency with an object, to make testing easier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Mock.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Mock
----

A mock replaces a code dependency with an object, to make testing easier. Mocks are used when the dependency is difficult to set in a reproducible state : for example, in a rare state, or after a long set up.

Mocks turns the dependency into another piece of code, with total control over its behavior. 

On the other hand, mocks have to be coded to replace the dependency, and emulates its behavior as closely as possible : any change to the dependency behavior has to be back-ported. 

Mock objects are also called ``test double``.

`Documentation <https://www.radview.com/glossary/what-is-mock-testing/>`__

See also https://phpunit.readthedocs.io/en/9.5/test-doubles.html, https://laravel.com/docs/9.x/mocking, https://danielrotter.at/2023/09/22/avoid-mocking-repositories-by-using-in-memory-implementations.html, https://blog.frankdejonge.nl/testing-without-mocking-frameworks/

Related : :ref:`Test Data Provider <test-data-provider>`

Related packages : `mockery/mockery <https://packagist.org/packages/mockery/mockery>`_, `phpspec/prophecy <https://packagist.org/packages/phpspec/prophecy>`_
