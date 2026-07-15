.. _datastructure:
.. _data-structure:
.. meta::
	:description:
		Data Structure: A data structure is a way of organizing and storing data in memory to enable efficient access and modification.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Data Structure
	:twitter:description: Data Structure: A data structure is a way of organizing and storing data in memory to enable efficient access and modification
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Data Structure
	:og:type: article
	:og:description: A data structure is a way of organizing and storing data in memory to enable efficient access and modification
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/datastructure.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/datastructure.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/datastructure.ini.html","name":"Data Structure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A data structure is a way of organizing and storing data in memory to enable efficient access and modification","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Data Structure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Data Structure
--------------

A data structure is a way of organizing and storing data in memory to enable efficient access and modification. PHP's primary data structure are the classes and arrays, which include indexed arrays, associative arrays, anonymous classes and nested structures in a single construct.

For more specialized needs, the spl and ds extensions offers types beyond the default PHP ones.

Choosing the right data structure has a direct impact on algorithmic complexity and memory usage.

.. code-block:: php
   
   <?php
   
       use Ds\Vector;
       use Ds\Map;
       
       $vector = new Vector([1, 2, 3]);
       $map    = new Map(['key' => 'value']);
       
       $stack = new SplStack();
       $stack->push('first');
   
   ?>


`Documentation <https://www.php.net/manual/en/book.spl.php>`__

See also `Data Structures for PHP (ds extension) <https://www.php.net/manual/en/book.ds.php>`_ and `SPL Data Structures <https://www.php.net/manual/en/spl.datastructures.php>`_.

Related : :ref:`Array, [] <array>`, :ref:`Data Structure <ds>`, :ref:`Standard PHP Library (SPL) <spl>`, :ref:`Collection <collection>`, :ref:`Deque <deque>`, :ref:`SplStack <splstack>`, :ref:`Map <map>`, :ref:`Tree <tree>`, :ref:`Queue <queue>`, :ref:`Algorithmic Complexity <algorithmic-complexity>`, :ref:`Big-o-notation <big-o-notation>`, :ref:`Bucket <bucket>`, :ref:`Handle <handle>`, :ref:`Pair <pair>`, :ref:`Pop <pop>`, :ref:`Sequence <sequence>`, :ref:`Set <set>`, :ref:`SplDoublyLinkedList <spldoublylinkedlist>`, :ref:`SplObjectStorage <splobjectstorage>`

Related packages : `php-ds/php-ds <https://packagist.org/packages/php-ds/php-ds>`_
