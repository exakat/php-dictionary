.. _append:
.. _array-append:
.. _push:
.. meta::
	:description:
		Array Append: Append is an array operation, which adds an element at the end of the array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Append
	:twitter:description: Array Append: Append is an array operation, which adds an element at the end of the array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Array Append
	:og:type: article
	:og:description: Append is an array operation, which adds an element at the end of the array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/append.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Array Append","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 11:04:51 +0000","dateModified":"Thu, 15 Jan 2026 11:04:51 +0000","description":"Append is an array operation, which adds an element at the end of the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Array Append.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Array Append
------------

Append is an array operation, which adds an element at the end of the array. It is also called a push.

There are two operators for this feature ; the ``[]`` operator, which has to be placed after a variable or member. There is also the array_push() function, which is available as a callback, unlike the operator.

The opposite operation is a pop, with the function array_pop(). Array_unshift() is the append at the beginning of the array.

.. code-block:: php
   
   <?php
   
   $array = [1, 2, 3];
   $array[] = 4;
   
   $array []= 5; // Same as above, with a notation similar to a short assignation
   
   array_push($array, 6);
   
   // $array === [1, 2, 3, 4, 5, 6];
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.array.php>`__

See also https://www.php.net/manual/en/function.array-push.php
