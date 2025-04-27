.. _iterable:
.. meta::
	:description:
		Iterable: Iterable is a pseudo-type, which accepts any array or object implementing the Traversable interface.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Iterable
	:twitter:description: Iterable: Iterable is a pseudo-type, which accepts any array or object implementing the Traversable interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Iterable
	:og:type: article
	:og:description: Iterable is a pseudo-type, which accepts any array or object implementing the Traversable interface
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/iterable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Iterable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Iterable is a pseudo-type, which accepts any array or object implementing the Traversable interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Iterable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Iterable
--------

Iterable is a pseudo-type, which accepts any array or object implementing the Traversable interface.

.. code-block:: php
   
   <?php
   
   function foo(iterable $iterable) {
       foreach ($iterable as $value) {
           // ...
       } 
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.iterable.php>`__

Related : :ref:`Traversable <traversable>`, :ref:`Array <array>`

Added in PHP 7.1
