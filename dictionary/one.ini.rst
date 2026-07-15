.. _one:
.. meta::
	:description:
		one: One is the ``1`` integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: one
	:twitter:description: one: One is the ``1`` integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: one
	:og:type: article
	:og:description: One is the ``1`` integer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/one.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/one.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/one.ini.html","name":"one","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:26:38 +0000","dateModified":"Fri, 19 Jun 2026 21:26:38 +0000","description":"One is the ``1`` integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/one.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


one
---

One is the ``1`` integer.One is part of the truthy values: it is the equivalent of ``true``. 

Multiplying, or dividing, a string by 1 turns it into an integer, just like the cast operator ``(int)`` does.

1 is one of the two valid index when building a callback with an array, along with 0.

1 is a classic magic number, although it has so many uses that it is usually look over, as generating too many false positives or scattered issues.

.. code-block:: php
   
   <?php
   
       $one = 1;
   
       $four = 4 * 1;
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Magic_number_(programming)>`__

Related : :ref:`False <false>`, :ref:`Callbacks <callback>`, :ref:`zero <zero>`, :ref:`Multiplication <multiplication>`, :ref:`Callable Arrays <array-callable>`, :ref:`Array Callback <array-callback>`, :ref:`Minus One -1 <minus-one>`, :ref:`Truthy <truthy>`, :ref:`Magic Numbers <magic-number>`, :ref:`Logarithm <logarithm>`, :ref:`Post-increment <post-increment>`, :ref:`zend\.assertions <zend-assertions>`
