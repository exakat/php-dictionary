.. _trailing-comma:
.. meta::
	:description:
		Trailing Comma: The trailing comma is the possibility to leave the last element of a list empty.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Trailing Comma
	:twitter:description: Trailing Comma: The trailing comma is the possibility to leave the last element of a list empty
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Trailing Comma
	:og:type: article
	:og:description: The trailing comma is the possibility to leave the last element of a list empty
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/trailing-comma.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Trailing Comma","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"The trailing comma is the possibility to leave the last element of a list empty","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Trailing Comma.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Trailing Comma
--------------

The trailing comma is the possibility to leave the last element of a list empty. This is for presentation reasons. In particular, VCS will be able to treat the last line just like any another previous line, with a final comma. This reduces de amount of diff.

Trailing commas were introduced progressively in PHP. In PHP 7.2, in use statements; in PHP 7.3, in method calls; in PHP 8.0, in method declarations; in very old version, in array declarations.


.. code-block:: php
   
   <?php
   
   $a = array(1,
              2,
              3,
              // Adding a new element in this array only creates
              // a one line diff, when using the trailing comma
              )
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php#functions.arguments>`__

See also `How I learned to stop worrying and love the trailing comma <https://c-harrison.medium.com/how-i-learned-to-stop-worrying-and-love-the-trailing-comma-480f3a73d203>`_

Related : :ref:`Comma <comma>`, :ref:`Convention <convention>`
