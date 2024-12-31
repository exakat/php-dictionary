.. _class-hoisting:
.. meta::
	:description:
		Class Hoisting: Class hoisting is a compilation mode where the declaration of functions, classes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Hoisting
	:twitter:description: Class Hoisting: Class hoisting is a compilation mode where the declaration of functions, classes
	:twitter:creator: @exakat
	:og:title: Class Hoisting
	:og:type: article
	:og:description: Class hoisting is a compilation mode where the declaration of functions, classes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class-hoisting.ini.html
	:og:locale: en


Class Hoisting
--------------

Class hoisting is a compilation mode where the declaration of functions, classes... are moved before their actual usage.

This allows the usage of functions that are declared later in the code. 

PHP doesn't do class hoisting : it does two passes on the code, and later, triggers the autoload if a class is missing. 


.. code-block:: php
   
   
   <?php
   
   // displays foo
   foo();
   
   function foo() { echo __FUNCTION__; }
   
   ?>
   


See also `Early binding in PHP <https://www.npopov.com/2021/10/20/Early-binding-in-PHP.html>`_
