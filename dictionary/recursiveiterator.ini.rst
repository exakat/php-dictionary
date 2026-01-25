.. _recursiveiterator:
.. meta::
	:description:
		RecursiveIterator: The ``RecursiveIterator`` interface is an interface that is able to iterate through nested iterators.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: RecursiveIterator
	:twitter:description: RecursiveIterator: The ``RecursiveIterator`` interface is an interface that is able to iterate through nested iterators
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: RecursiveIterator
	:og:type: article
	:og:description: The ``RecursiveIterator`` interface is an interface that is able to iterate through nested iterators
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/recursiveiterator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"RecursiveIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 13:19:01 +0000","dateModified":"Thu, 22 Jan 2026 13:19:01 +0000","description":"The ``RecursiveIterator`` interface is an interface that is able to iterate through nested iterators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/RecursiveIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


RecursiveIterator
-----------------

The ``RecursiveIterator`` interface is an interface that is able to iterate through nested iterators.

The ``RecursiveIterator`` is implemented by the ``RecursiveArrayIterator``, and ``RecursiveDirectoryIterator``.

.. code-block:: php
   
   <?php
   
   interface RecursiveIterator extends Iterator {
       /* Methods */
       public function getChildren(): ?RecursiveIterator;
       public function hasChildren(): bool;
   
       /* Inherited methods from Iterator */
       public function current(): mixed;
       public function key(): mixed;
       public function next(): void;
       public function rewind(): void;
       public function valid(): bool;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.recursiveiteratoriterator.php>`__

See also https://dev.to/gbhorwood/php-doing-recursion-with-recursive-iteratoriterators-fj1

Related : :ref:`Iterator <iterator>`, :ref:`Standard PHP Library (SPL) <spl>`, , 
