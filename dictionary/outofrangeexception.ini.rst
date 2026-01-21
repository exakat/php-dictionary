.. _outofrangeexception:
.. meta::
	:description:
		OutOfRangeException: ``OutOfRangeException`` is a built-in exception class that is used to indicate that an index or value is outside the acceptable range.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: OutOfRangeException
	:twitter:description: OutOfRangeException: ``OutOfRangeException`` is a built-in exception class that is used to indicate that an index or value is outside the acceptable range
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: OutOfRangeException
	:og:type: article
	:og:description: ``OutOfRangeException`` is a built-in exception class that is used to indicate that an index or value is outside the acceptable range
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/outofrangeexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"OutOfRangeException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:22:11 +0000","dateModified":"Tue, 20 Jan 2026 07:22:11 +0000","description":"``OutOfRangeException`` is a built-in exception class that is used to indicate that an index or value is outside the acceptable range","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/OutOfRangeException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


OutOfRangeException
-------------------

``OutOfRangeException`` is a built-in exception class that is used to indicate that an index or value is outside the acceptable range. It is a subclass of the LogicException class.

The ``OutOfRangeException`` is typically thrown when accessing an array or collection with an index that is either negative or exceeds the valid range of indices. It can also be thrown when working with iterators or other data structures that have a defined range of valid values.

.. code-block:: php
   
   <?php
   
   $list = new SplDoublyLinkedList();
   
   try {
       // Adding 5 at index 2, while it should be added a 0 (empty list)
       $list->add(2,5);
   } catch (OutOfRangeException $e) {
       echo \Exception: \.$e->getMessage().\\\n\;
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.outofrangeexception.php>`__
