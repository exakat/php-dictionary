.. _wrapper-pattern:
.. meta::
	:description:
		Wrapper Pattern: The wrapper apttern is also called decorator or adapter.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Wrapper Pattern
	:twitter:description: Wrapper Pattern: The wrapper apttern is also called decorator or adapter
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Wrapper Pattern
	:og:type: article
	:og:description: The wrapper apttern is also called decorator or adapter
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wrapper-pattern.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Wrapper Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 08 Feb 2026 17:02:56 +0000","dateModified":"Sun, 08 Feb 2026 17:02:56 +0000","description":"The wrapper apttern is also called decorator or adapter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Wrapper Pattern.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Wrapper Pattern
---------------

The wrapper apttern is also called decorator or adapter. The wrapper pattern wraps one object inside another object to change, extend, simplify or adapt its behavior without modifying the original object.

This is commonly used to add functionality (logging, caching, validation, etc.), simplify or standardize an interface, isolate third-party code or make testing easier. The concept is also used to describe a class that provide features based on a remote object, such as an API or a system tool, or even higher level features.

The wrapper pattern is identifiable with thin methods, an injection of the same interface, or containing a single distinct object. Identification may require several clues.

`Documentation <https://refactoring.guru/design-patterns/decorator>`__

Related : :ref:`PHP Wrappers <php-wrapper>`, :ref:`file:// <wrapper-file>`, :ref:`Thin Method <thin-method>`
