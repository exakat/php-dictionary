.. _deque:
.. meta::
	:description:
		Deque: A deque is a special kind of stack and queue: it is actually both of them at the same time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Deque
	:twitter:description: Deque: A deque is a special kind of stack and queue: it is actually both of them at the same time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Deque
	:og:type: article
	:og:description: A deque is a special kind of stack and queue: it is actually both of them at the same time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/deque.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/deque.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/deque.ini.html","name":"Deque","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A deque is a special kind of stack and queue: it is actually both of them at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Deque.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Deque
-----

A deque is a special kind of stack and queue: it is actually both of them at the same time. It allows insertions and deletions at both ends.

.. code-block:: php
   
   <?php
   
       $deque = new \Ds\Deque();
       
       $deque->insert(0, e);             // [e]
       $deque->insert(1, f);             // [e, f]
       $deque->insert(2, g);             // [e, f, g]
       $deque->insert(0, a, b);        // [a, b, e, f, g]
       $deque->insert(2, ...[c, d]);   // [a, b, c, d, e, f, g]
       
       var_dump($deque);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Double-ended_queue>`__

See also `Algorithms in PHP: Deques (and circular buffers + linked lists) <https://withinboredom.info/posts/algorithms-in-php-deques-and-circular-buffers-linked-lists/>`_ and `Deque Class <https://www.php.net/manual/en/class.ds-deque.php>`_.

Related : :ref:`Datastack <datastack>`, :ref:`Data Structure <datastructure>`, :ref:`SplDoublyLinkedList <spldoublylinkedlist>`
