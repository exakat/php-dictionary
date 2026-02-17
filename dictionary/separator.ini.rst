.. _separator:
.. meta::
	:description:
		Separator: Separators are specific characters that ends a previous area, and open a new one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Separator
	:twitter:description: Separator: Separators are specific characters that ends a previous area, and open a new one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Separator
	:og:type: article
	:og:description: Separators are specific characters that ends a previous area, and open a new one
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/separator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Separator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 09 Feb 2026 16:26:35 +0000","dateModified":"Mon, 09 Feb 2026 16:26:35 +0000","description":"Separators are specific characters that ends a previous area, and open a new one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Separator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Separator
---------

Separators are specific characters that ends a previous area, and open a new one. They are used in structured dataset, to allow multiple values to be hosted.

The separator makes the building and parsing of the string easy. The separator must be forbidden in the separated values, or it must be protected to avoid confusion between a literal value and an actual separator.

Multiple separators may be used in the same format. For example, in query strings, ``&`` is used to distinguish different variables, and ``=`` is used to distinguish the name and the value.

Separators are argument in functions such as ``implode()``, ``explode()`` or ``http_build_query()``.

Some separators: 

+ ``|`` is used to separate types in a Union type
+ ``&`` is used to separate values in a query string
+ ``/`` is used to separate directory names in a file system path.
+ ``,`` is used in list of values.

.. code-block:: php
   
   <?php
   
   print join(\glue\, [1, 2, 3]);
   
   ?>


Related : :ref:`Glue <glue>`, :ref:`implode() <implode>`, :ref:`explode() <explode>`, :ref:`http_build_query() <http_build_query>`
