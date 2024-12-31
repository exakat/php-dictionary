.. _writable:
.. meta::
	:description:
		Writable: Something is writable when a new value may be assigned to it, in the correct context.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Writable
	:twitter:description: Writable: Something is writable when a new value may be assigned to it, in the correct context
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Writable
	:og:type: article
	:og:description: Something is writable when a new value may be assigned to it, in the correct context
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/writable.ini.html
	:og:locale: en


Writable
--------

Something is writable when a new value may be assigned to it, in the correct context. For example, a variable is writable, as it may be assigned a new value in the local context.

Variable, properties (given the correct visibility), static properties, array elements are writable. 

On the other hand, constants, method calls, function calls, or instantiation are not writable: they provide a value, but do not accept to be written to.


.. code-block:: php
   
   <?php
   
   // syntax error
   new x = 3;
   
   ?>

