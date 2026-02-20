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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"one","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 10:03:42 +0000","dateModified":"Thu, 19 Feb 2026 10:03:42 +0000","description":"One is the ``1`` integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/one.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


one
---

One is the ``1`` integer. Zero is part of the truthy values: it is the equivalent of ``true``. 

Multiplying, or dividing, a string by 1 turns it into an integer, just like the cast operator ``(int)`` does.

1 is one of the two valid index when building a callback with an array, along with 0.

1 is a classic magic number, although it has so many uses that it is usually look over, as generating too many false positives or scattered issues.

.. code-block:: php
   
   <?php
   
       $one = 1;
   
       $four = 4 * 1;
   
   ?>


Related : :ref:`False <false>`, :ref:`Callbacks <callback>`, :ref:`zero <zero>`, :ref:`Multiplication <multiplication>`
