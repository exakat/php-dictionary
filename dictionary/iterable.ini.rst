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
