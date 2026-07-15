.. _array_unshift:
.. meta::
	:description:
		array_unshift(): ``array_unshift()`` prepends one or more elements to the beginning of an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_unshift()
	:twitter:description: array_unshift(): ``array_unshift()`` prepends one or more elements to the beginning of an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_unshift()
	:og:type: article
	:og:description: ``array_unshift()`` prepends one or more elements to the beginning of an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_unshift.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_unshift.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_unshift.ini.html","name":"array_unshift()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_unshift()`` prepends one or more elements to the beginning of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_unshift().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_unshift()
---------------

``array_unshift()`` prepends one or more elements to the beginning of an array. All numeric keys are reset starting from zero, while string keys remain unchanged. The function returns the new number of elements in the array.

``array_unshift()`` is the opposite of ``array_shift()``, which removes and returns the first element. Together with ``array_push()`` and ``array_pop()``, these four functions are used to implement queue, FIFO, or stack, LIFO, data structures.

Note that ``array_unshift()`` is an ``O(n)`` operation because all integer keys must be renumbered.


.. code-block:: php
   
   <?php
   
       $array = [1, 2, 3];
       $count = array_unshift($array, 0);
       // $array == [0, 1, 2, 3], $count == 4
   
       // Prepend multiple elements
       array_unshift($array, -2, -1);
       // $array == [-2, -1, 0, 1, 2, 3]
   
       // String keys are preserved; integer keys are reset
       $assoc = ['b' => 2, 'c' => 3];
       array_unshift($assoc, 1);
       // $assoc == [0 => 1, 'b' => 2, 'c' => 3]
   
   ?>


`Documentation <https://www.php.net/array_unshift>`__

See also `array_unshift - PHP Manual <https://www.php.net/manual/en/function.array-unshift.php>`_.

Related : :ref:`array_shift() <array_shift>`, :ref:`array_push() <array_push>`, :ref:`array_pop() <array_pop>`, :ref:`First In, First Out (FIFO) <fifo>`, :ref:`Last In, First Out (LIFO) <lifo>`, :ref:`Array Prepend <prepend>`
