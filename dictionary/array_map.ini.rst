.. _array_map:
.. meta::
	:description:
		array_map(): ``array_map()`` is a PHP native function that applies a closure to every element of an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_map()
	:twitter:description: array_map(): ``array_map()`` is a PHP native function that applies a closure to every element of an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_map()
	:og:type: article
	:og:description: ``array_map()`` is a PHP native function that applies a closure to every element of an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_map.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/array_key_exists(): Argument #2 ($array) must be of type array, %s given.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/array_key_exists(): Argument #2 ($array) must be of type array, %s given.html","name":"array_map()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 21:18:22 +0000","dateModified":"Thu, 22 Jan 2026 21:18:22 +0000","description":"``array_map()`` is a PHP native function that applies a closure to every element of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_map().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_map()
-----------

``array_map()`` is a PHP native function that applies a closure to every element of an array.

``array_map()`` use the first argument as the callback, and the following subsequent arguments as one argument of that closure each. Any missing value in an array is assigned as ``null``, while a missing argument is a fatal error.

.. code-block:: php
   
   <?php
   
   function square($x) { return $x * $x; }
   
   $array = [1,2,3];
   $squared = array_map(square(...), $array);
   // array(1, 4, 9);
   
   function squareSum($x, $y) { return $x ** 2 + $y ** 2; }
   
   $squareSums = array_map(squareSum(...), [1, 2, 3], [4, 5]); // array_map uses the longest array
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-map.php>`__

Related : :ref:`array_walk() <array_walk>`
