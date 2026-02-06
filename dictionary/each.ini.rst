.. _each:
.. meta::
	:description:
		each: each() was a native function, that would yield each element in an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: each
	:twitter:description: each: each() was a native function, that would yield each element in an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: each
	:og:type: article
	:og:description: each() was a native function, that would yield each element in an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/each.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"each","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 17:15:05 +0000","dateModified":"Mon, 26 Jan 2026 17:15:05 +0000","description":"each() was a native function, that would yield each element in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/each.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


each
----

each() was a native function, that would yield each element in an array. It was used in while() loops, to traverse lists.

It was deprecated during PHP 7.x and it is completely removed in PHP 8.

The classic while-each-list structure, shown below, is, nowadays, advantageously replaced by a foreach() loop.

.. code-block:: php
   
   <?php
   
   $array = ['a' => 1, 'b' => 3, 'c' => 5];
   while(list($key, $value) = each($array)) {
       print $key . ' => ' . $value . PHP_EOL;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.each.php>`__

Related : :ref:`Array Element <array-element>`

Added in PHP 1.0

Removed in PHP 1.0
