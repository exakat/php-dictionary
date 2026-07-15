.. _array_pop:
.. meta::
	:description:
		array_pop(): ``array_pop()`` removes the last inserted element in an array, and returns it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_pop()
	:twitter:description: array_pop(): ``array_pop()`` removes the last inserted element in an array, and returns it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_pop()
	:og:type: article
	:og:description: ``array_pop()`` removes the last inserted element in an array, and returns it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_pop.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_pop.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_pop.ini.html","name":"array_pop()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_pop()`` removes the last inserted element in an array, and returns it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_pop().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_pop()
-----------

``array_pop()`` removes the last inserted element in an array, and returns it. The original array is reduced by one element.

``array_pop()`` removes the last element and the last key of the array. The operation is quick, ``O(1)`` of big O complexity. 

``array_pop()`` is the opposite operation of ``array_push()`` or the ``[]`` append operator. With these functions, it is possible to build FIFO stack.


.. code-block:: php
   
   <?php
   
       $array = [1, 2, 3, 4, 5];
       echo array_pop($array); // 5
       // $array == [1, 2, 3, 4];
   
       $array = [1, 2, 3, 4];
       $array[] = -2;
       echo array_pop($array); // -2
       
   ?>


`Documentation <https://www.php.net/manual/fr/function.array-pop.php>`__

See also `Introduction to Stacks & Queues in PHP <https://dev.to/matusstafura/introduction-to-stacks-queues-in-php-1lpf>`_.

Related : :ref:`Array Append <array-append>`, :ref:`array_push() <array_push>`, :ref:`First In, First Out (FIFO) <fifo>`, :ref:`array_shift() <array_shift>`, :ref:`array_unshift() <array_unshift>`, :ref:`Pop <pop>`
