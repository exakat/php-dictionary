.. _prepend:
.. _array-prepend:
.. _array-shift:
.. meta::
	:description:
		Array Prepend: Prepend is an array operation, which adds an element at the beginning of the array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Prepend
	:twitter:description: Array Prepend: Prepend is an array operation, which adds an element at the beginning of the array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Array Prepend
	:og:type: article
	:og:description: Prepend is an array operation, which adds an element at the beginning of the array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/prepend.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Array Prepend","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 24 Mar 2026 09:38:02 +0000","dateModified":"Tue, 24 Mar 2026 09:38:02 +0000","description":"Prepend is an array operation, which adds an element at the beginning of the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Array Prepend.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Array Prepend
-------------

Prepend is an array operation, which adds an element at the beginning of the array. It is also called a shift.

There are one function for this feature: ``array_unshift()``. It takes the array, and the value to add, returns a new array.

The opposite operation is a pop, with the function ``array_shift()``.

.. code-block:: php
   
   <?php
   
       $array = [1, 2, 3];
       
       array_push($array, 6);
       
       // $array === [1, 2, 3, 6];
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.array.php>`__

See also https://www.php.net/manual/en/function.array-unshift.php

Related : :ref:`Array Append <append>`, , 
