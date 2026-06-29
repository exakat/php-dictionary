.. _pop:
.. meta::
	:description:
		Pop: Pop is the operation of removing and returning the last element of a stack or array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pop
	:twitter:description: Pop: Pop is the operation of removing and returning the last element of a stack or array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pop
	:og:type: article
	:og:description: Pop is the operation of removing and returning the last element of a stack or array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pop.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Pop","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 29 Jun 2026 09:36:02 +0000","dateModified":"Mon, 29 Jun 2026 09:36:02 +0000","description":"Pop is the operation of removing and returning the last element of a stack or array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pop.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pop
---

Pop is the operation of removing and returning the last element of a stack or array. It is the counterpart of push, and together they implement the Last-In, First-Out, LIFO, behaviour that defines a stack.

``array_pop()`` removes and returns the last element of an array, reducing its length by one. The array is passed by reference. If the array is empty, ``array_pop()`` returns ``null``.

For queue semantics, the counterpart operation is ``array_shift()``, which removes the first element.

PHP's ``SplStack`` and ``SplDoublyLinkedList`` also expose a ``pop()`` method that follows the same LIFO contract.

.. code-block:: php
   
   <?php
   
       $stack = [1, 2, 3, 4];
       
       $last = array_pop($stack);
       echo $last;        // 4
       print_r($stack);   // [1, 2, 3]
       
       // Using SplStack
       $splStack = new SplStack();
       $splStack->push('a');
       $splStack->push('b');
       $splStack->push('c');
       
       echo $splStack->pop(); // c
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-pop.php>`__

Related : :ref:`array_push() <array_push>`, :ref:`array_pop() <array_pop>`, :ref:`Stack <stack>`, :ref:`SplStack <splstack>`, :ref:`Last In, First Out (LIFO) <lifo>`, :ref:`First In, First Out (FIFO) <fifo>`, :ref:`Data Structure <datastructure>`, :ref:`Array, [] <array>`, :ref:`Insecure Deserialization <insecure-deserialization>`
