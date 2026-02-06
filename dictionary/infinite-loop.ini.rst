.. _infinite-loop:
.. meta::
	:description:
		Infinite Loop: An infinite loop never ends, unless there is an external event.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Infinite Loop
	:twitter:description: Infinite Loop: An infinite loop never ends, unless there is an external event
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Infinite Loop
	:og:type: article
	:og:description: An infinite loop never ends, unless there is an external event
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/infinite-loop.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Infinite Loop","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 05 Feb 2026 10:34:15 +0000","dateModified":"Thu, 05 Feb 2026 10:34:15 +0000","description":"An infinite loop never ends, unless there is an external event","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Infinite Loop.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Infinite Loop
-------------

An infinite loop never ends, unless there is an external event.

Infinite loops are usually not wanted, and should be avoided. They are prevented by PHP which enforces a ``max_execution_time`` or ``memory_limit`` error.

.. code-block:: php
   
   <?php
   
   // infinite loop while
   while(true) { }
   
   // infinite loop while
   do { } while(1);
   
   for(;;) {} 
   
   ?>


`Documentation <https://fr.wikipedia.org/wiki/Infinite_Loop>`__

See also https://www.exakat.io/infinite-loops-in-php/

Related : :ref:`INF <inf>`, :ref:`Infinite <infinite>`, :ref:`InfiniteIterator <infiniteiterator>`, :ref:`max_execution_time <max_execution_time>`
