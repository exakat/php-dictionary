.. _foreach:
.. meta::
	:description:
		foreach(): ``foreach()`` is the most popular loop in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: foreach()
	:twitter:description: foreach(): ``foreach()`` is the most popular loop in PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: foreach()
	:og:type: article
	:og:description: ``foreach()`` is the most popular loop in PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/foreach.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"foreach()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``foreach()`` is the most popular loop in PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/foreach().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


foreach()
---------

``foreach()`` is the most popular loop in PHP. 

The ``foreach()`` loop uses all the elements of the source, and assign them to the blind variable. By default, only the value is assigned; when using the ``$key => $value`` syntax, the key is also assigned. Then the block is executed with the assigned values. 

Part of the block execution may be skipped by using the ``continue`` keyword.

The value may be a reference: then it actually references the original value, which then may be modified in the source. Do not forget to unset referenced variables after the loop, to avoid the dangling reference syndrome, when the last value is changed.

The value may be an array, collecting several values at the same time. 

The value may be an ``list()`` construct: it sets several variables at the same time, to be used in the loop.

``foreach()`` may also be replaced by array functions, such as ``array_map()``, ``implode()`` or ``array_merge()``, for specific operations. It is usually recommended to use native functions, when available.

.. code-block:: php
   
   <?php
   
       /*
       foreach($source as $key => $value) {
           // block
       }
       */
       
       foreach([11,12,13] as $id => $value) {
           print "$id => $value\n";
           // 0 => 11
           // 1 => 12
           // 2 => 13
       }
       
       //foreach([[21,22], [33, 34]] as list($a, $b)) {
       foreach([[21,22], [33, 34]] as [$a, $b]) {
           print "$a $b\n";
           // 21 22
           // 33 34
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.foreach.php>`__

See also `Introduction To The Foreach Loop In PHP (With Code Examples) <https://zerotomastery.io/blog/PHP-foreach-loop-explained/>`_ and `PHP foreach <https://zetcode.com/php/foreach/>`_.

Related : :ref:`Continue <continue>`, :ref:`For <for>`, :ref:`Loops <loop>`, :ref:`While <while>`, :ref:`Do While <do-while>`, :ref:`As <as>`, :ref:`Control Flow <control-flow>`, :ref:`Control Structures <control-structure>`, :ref:`Iterator <iterator>`, :ref:`List <list>`, :ref:`Blind Variable <blind-variable>`, :ref:`Blind Variable <blind-key>`, :ref:`ClosedGeneratorException <closedgeneratorexception>`, :ref:`IteratorAggregate <iteratoraggregate>`, :ref:`Traversal <traversal>`
