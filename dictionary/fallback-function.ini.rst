.. _fallback-function:
.. meta::
	:description:
		Fallback Function: A fallback function is a function that replaces a function if its definition is not available in the current namespace.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fallback Function
	:twitter:description: Fallback Function: A fallback function is a function that replaces a function if its definition is not available in the current namespace
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fallback Function
	:og:type: article
	:og:description: A fallback function is a function that replaces a function if its definition is not available in the current namespace
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fallback-function.ini.html
	:og:locale: en


Fallback Function
-----------------

A fallback function is a function that replaces a function if its definition is not available in the current namespace. 

PHP has implemented a mechanism so that functions that are undefined in the current namespace, have a fallback in the global space. This is important for backward compatibility, and the native PHP versions.

.. code-block:: php
   
   <?php
   
   namespace A {
   	// A\strtolower doesn't exist, 
   	// it falls back on \strtolower(), in the global space
   	echo strtolower('A');
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.fallback.php>`__
