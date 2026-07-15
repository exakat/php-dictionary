.. _outeriterator:
.. meta::
	:description:
		OuterIterator: ``OuterIterator`` is a PHP interface that extends ``Iterator`` to represent iterators that wrap other iterators.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: OuterIterator
	:twitter:description: OuterIterator: ``OuterIterator`` is a PHP interface that extends ``Iterator`` to represent iterators that wrap other iterators
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: OuterIterator
	:og:type: article
	:og:description: ``OuterIterator`` is a PHP interface that extends ``Iterator`` to represent iterators that wrap other iterators
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/outeriterator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/outeriterator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/outeriterator.ini.html","name":"OuterIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``OuterIterator`` is a PHP interface that extends ``Iterator`` to represent iterators that wrap other iterators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/OuterIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


OuterIterator
-------------

``OuterIterator`` is a PHP interface that extends ``Iterator`` to represent iterators that wrap other iterators. It adds a single method, ``getInnerIterator()``, which returns the inner iterator being wrapped.

``OuterIterator`` is the foundation of PHP's iterator decoration pattern: classes such as ``IteratorIterator``, ``FilterIterator``, ``MapIterator``, ``LimitIterator``, and ``RecursiveIteratorIterator`` all implement it.

Implementing ``OuterIterator`` allows building custom iterator decorators that add behaviour, such as filtering, mapping, or limiting, on top of any existing ``Traversable`` without modifying the wrapped object.

.. code-block:: php
   
   <?php
   
   class DoubleValueIterator extends IteratorIterator implements OuterIterator
   {
       public function current(): mixed
       {
           return parent::current() * 2;
       }
   }
   
   $array = new ArrayIterator([1, 2, 3, 4]);
   $doubled = new DoubleValueIterator($array);
   
   foreach ($doubled as $value) {
       echo $value . PHP_EOL; // 2, 4, 6, 8
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.outeriterator.php>`__

Related : :ref:`Iterator <iterator>`, :ref:`IteratorAggregate <iteratoraggregate>`, :ref:`RecursiveIterator <recursiveiterator>`, :ref:`Standard PHP Library (SPL) <spl>`, :ref:`Traversable <traversable>`, :ref:`PHP Native Interfaces <php-interface>`

Added in PHP 5.1
