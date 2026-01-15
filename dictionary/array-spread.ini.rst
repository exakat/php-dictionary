.. _array-spread:
.. meta::
	:description:
		Array Spread: Array spread is the ellipsis operator, applied to an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Spread
	:twitter:description: Array Spread: Array spread is the ellipsis operator, applied to an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Array Spread
	:og:type: article
	:og:description: Array spread is the ellipsis operator, applied to an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array-spread.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Array and string offset access syntax with curly braces is no longer supported.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Array and string offset access syntax with curly braces is no longer supported.html","name":"Array Spread","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 11:04:51 +0000","dateModified":"Thu, 15 Jan 2026 11:04:51 +0000","description":"Array spread is the ellipsis operator, applied to an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Array Spread.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Array Spread
------------

Array spread is the ellipsis operator, applied to an array. Then, the array itself is replaced by each of its own element, as if each element was spread from the array.

.. code-block:: php
   
   <?php
   
   $a = [1,2,3];
   $b = [...$a, 4,5];
   
   // $b === [1,2,3,4,5];
   
   ?>


`Documentation <https://www.php.net/manual/en/migration74.new-features.php#migration74.new-features.standard.array-merge-no-args>`__

See also https://www.phptutorial.net/php-tutorial/php-spread-operator/

Related : :ref:`Ellipsis <ellipsis>`

Added in PHP 7.4
