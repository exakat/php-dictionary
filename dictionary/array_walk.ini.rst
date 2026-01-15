.. _array_walk:
.. meta::
	:description:
		array_walk(): ``array_walk()`` is a PHP native function that applies a closure to every element of an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_walk()
	:twitter:description: array_walk(): ``array_walk()`` is a PHP native function that applies a closure to every element of an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_walk()
	:og:type: article
	:og:description: ``array_walk()`` is a PHP native function that applies a closure to every element of an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_walk.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"array_walk()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 12:47:56 +0000","dateModified":"Thu, 15 Jan 2026 12:47:56 +0000","description":"``array_walk()`` is a PHP native function that applies a closure to every element of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_walk().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_walk()
------------

``array_walk()`` is a PHP native function that applies a closure to every element of an array.

``array_walk()`` use the first argument as the array or object with the elements, the second argument as the callback, and the following subsequent arguments as one argument of that closure each. Any missing value in an array is assigned as ``null``, while a missing argument is a fatal error.

The callback may take two arguments. This way, it may apply modifications that take the key into account. This is unlike ``array_map()``.

If the walk has to be reflected in the source array, the first argument of the callback must be a reference, and it should be updated.

Although both methods are very similar, ``array_walk()``  and ``array_map()`` do no have the same argument order, return value nor behavior.

.. code-block:: php
   
   <?php
   
   function square(&$x, $c) { $x = $x * $x + $c; }
   
   $array = [1,2,3];
   array_walk($array, square(...));
   print_r($array);
   // array(1, 5, 11);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-map.php>`__

Related : :ref:`array_map() <array_map>`
