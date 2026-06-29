.. _recursivearrayiterator:
.. meta::
	:description:
		RecursiveArrayIterator: ``RecursiveArrayIterator`` extends ``ArrayIterator`` to allow recursive iteration over nested arrays and objects.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: RecursiveArrayIterator
	:twitter:description: RecursiveArrayIterator: ``RecursiveArrayIterator`` extends ``ArrayIterator`` to allow recursive iteration over nested arrays and objects
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: RecursiveArrayIterator
	:og:type: article
	:og:description: ``RecursiveArrayIterator`` extends ``ArrayIterator`` to allow recursive iteration over nested arrays and objects
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/recursivearrayiterator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"RecursiveArrayIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``RecursiveArrayIterator`` extends ``ArrayIterator`` to allow recursive iteration over nested arrays and objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/RecursiveArrayIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


RecursiveArrayIterator
----------------------

``RecursiveArrayIterator`` extends ``ArrayIterator`` to allow recursive iteration over nested arrays and objects. It implements ``RecursiveIterator``, so it works with ``RecursiveIteratorIterator`` to traverse multidimensional arrays depth-first.

.. code-block:: php
   
   <?php
   
   $array = ['a', ['b', 'c'], ['d', ['e', 'f']]];
   $iterator = new RecursiveIteratorIterator(
       new RecursiveArrayIterator($array)
   );
   
   foreach ($iterator as $value) {
       echo $value . PHP_EOL;
   }
   // a b c d e f
   
   ?>


`Documentation <https://www.php.net/manual/en/class.recursivearrayiterator.php>`__

See also `RecursiveArrayIterator Class <https://www.php.net/manual/en/class.recursivearrayiterator.php>`_ and `RecursiveIteratorIterator Class <https://www.php.net/manual/en/class.recursiveiteratoriterator.php>`_.

Related : :ref:`Standard PHP Library (SPL) <spl>`, :ref:`Iterator <iterator>`, :ref:`Array, [] <array>`, :ref:`Recursion <recursion>`, :ref:`Recursive Array <recursive-array>`, :ref:`RecursiveIterator <recursiveiterator>`, :ref:`SplSubject <splsubject>`

Added in PHP 5.1
