.. _array_values:
.. meta::
	:description:
		array_values(): The ``array_values()`` PHP native function returns the values in an array, with automatically generated indexes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_values()
	:twitter:description: array_values(): The ``array_values()`` PHP native function returns the values in an array, with automatically generated indexes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_values()
	:og:type: article
	:og:description: The ``array_values()`` PHP native function returns the values in an array, with automatically generated indexes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_values.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"array_values()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"The ``array_values()`` PHP native function returns the values in an array, with automatically generated indexes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_values().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_values()
--------------

The ``array_values()`` PHP native function returns the values in an array, with automatically generated indexes. It reindexes the values as if they all were appended in the array, on after the other.

The values are in the same order than in the original array.

``array_values()`` provides a way to reach the n-th value in an array, when the keys have been set arbitrarily. For the first value, there is the function ``array_first()``.

.. code-block:: php
   
   <?php
   
       $array = ['a' => 1, 'b' => 2, ];
   
       // displays [1, 2]
       var_dump(array_values($array)); 
   
       $array = [-2 => 'a', 3 => 'b', 'c'];
       // displays ['a', 'b', 'c']; 
       // equivalent to [0 => 'a', 1 => 'b', 2 => 'c']; 
       var_dump(array_values($array)); 
   
       print array_values($array)[0]; // prints the first value, a
       print array_first($array);     // prints the first value, a
       print array_values($array)[1]; // prints the second value, b
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-values.php>`__

See also https://www.php.net/manual/en/function.array-values.php

Related : :ref:`array_keys() <array_keys>`
