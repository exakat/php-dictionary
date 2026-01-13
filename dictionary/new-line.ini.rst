.. _new-line:
.. meta::
	:description:
		New Line: A new-line ``\n`` (invisible) character.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: New Line
	:twitter:description: New Line: A new-line ``\n`` (invisible) character
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: New Line
	:og:type: article
	:og:description: A new-line ``\n`` (invisible) character
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/new-line.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/New expressions are not supported in this context.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/New expressions are not supported in this context.html","name":"New Line","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 13 Jan 2026 10:58:44 +0000","dateModified":"Tue, 13 Jan 2026 10:58:44 +0000","description":"A new-line ``\\n`` (invisible) character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/New Line.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


New Line
--------

A new-line ``\n`` (invisible) character. It may be represented by this string sequence, or an actual new line, within a string, or, also by the ``PHP_EOL`` native constant. 

PHP uses the ``\r\f`` representation for a new line: it is a combinaison of line feed and return carriage. This is the Linux standard. The ``PHP_EOL`` constant depends on the running platform: its  value is adapted to the underlying OS.

By convention, PHP files are expected to end on a new line.

It was possible to use new lines within a namespace name, until PHP 8.0. This is not possible anymore.

.. code-block:: php
   
   <?php
   
   $string = "one new line
   another new line\nAnd then another new line" . PHP_EOL
   
   ?>


Related : , 
