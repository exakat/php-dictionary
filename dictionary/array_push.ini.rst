.. _array_push:
.. meta::
	:description:
		array_push(): ``array_push()`` adds the second argument, and all the next, to the end of the array, passed as first argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_push()
	:twitter:description: array_push(): ``array_push()`` adds the second argument, and all the next, to the end of the array, passed as first argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_push()
	:og:type: article
	:og:description: ``array_push()`` adds the second argument, and all the next, to the end of the array, passed as first argument
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_push.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"array_push()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 03 Jun 2026 15:02:46 +0000","dateModified":"Wed, 03 Jun 2026 15:02:46 +0000","description":"``array_push()`` adds the second argument, and all the next, to the end of the array, passed as first argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_push().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_push()
------------

``array_push()`` adds the second argument, and all the next, to the end of the array, passed as first argument. A new index is created for each new entry, in order.

``array_push()`` adds the new elements and creates the new keys. It is not possible to specify a key with this function: one should use the ``$array['key'] = $value`` syntax.

``array_pop()`` is the equivalent operation of the ``[]`` append operator. It is the opposite of ``array_push()``. With these functions, it is possible to build FIFO stack.


.. code-block:: php
   
   <?php
   
       $array = [0, 1, 2];
       print array_push($array, 3, 4); // 5, the number of elements
       // $array == [0, 1, 2, 3, 4];
   
       $array = [0, 1, 2];
       $array[] = 3; 
       // $array == [0, 1, 2, 3];
   
       $array = [0, 1, 2];
       $array[33] = 3; 
       // $array == [0, 1, 2, 33 => 3];
       
   ?>


`Documentation <https://www.php.net/manual/fr/function.array-pop.php>`__

See also `Introduction to Stacks & Queues in PHP <https://dev.to/matusstafura/introduction-to-stacks-queues-in-php-1lpf>`_.

Related : :ref:`Index For Arrays <index-array>`, :ref:`array_pop() <array_pop>`, :ref:`First In, First Out (FIFO) <fifo>`, :ref:`array_shift() <array_shift>`, :ref:`array_unshift() <array_unshift>`, :ref:`Pop <pop>`, :ref:`Array Prepend <prepend>`
