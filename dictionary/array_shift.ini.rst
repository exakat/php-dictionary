.. _array_shift:
.. meta::
	:description:
		array_shift(): ``array_shift()`` is a PHP native function that removes and returns the first element of an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_shift()
	:twitter:description: array_shift(): ``array_shift()`` is a PHP native function that removes and returns the first element of an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_shift()
	:og:type: article
	:og:description: ``array_shift()`` is a PHP native function that removes and returns the first element of an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_shift.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_shift.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_shift.ini.html","name":"array_shift()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_shift()`` is a PHP native function that removes and returns the first element of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_shift().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_shift()
-------------

``array_shift()`` is a PHP native function that removes and returns the first element of an array. All numeric keys are re-indexed starting from zero; string keys are unaffected.

The operation is ``O(n)`` because all remaining numeric keys must be renumbered after the removal. This makes it slower than ``array_pop()``, which removes the last element in ``O(1)``.

Together with ``array_push()`` or the ``[]`` append operator, ``array_shift()`` enables a FIFO queue pattern.

.. code-block:: php
   
   <?php
   
       $array = [1, 2, 3, 4, 5];
       echo array_shift($array); // 1
       // $array == [2, 3, 4, 5];
   
       $array = ['a' => 'x', 0 => 'y', 1 => 'z'];
       echo array_shift($array); // x
       // $array == [0 => 'y', 1 => 'z'];
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-shift.php>`__

Related : :ref:`array_unshift() <array_unshift>`, :ref:`array_pop() <array_pop>`, :ref:`array_push() <array_push>`, :ref:`array_splice() <array_splice>`, :ref:`First In, First Out (FIFO) <fifo>`, :ref:`Queue <queue>`
