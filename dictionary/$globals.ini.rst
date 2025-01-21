.. _$globals:
.. meta::
	:description:
		$GLOBALS: This super-global is a PHP predefined variable, which holds a reference to every global variable in the application.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $GLOBALS
	:twitter:description: $GLOBALS: This super-global is a PHP predefined variable, which holds a reference to every global variable in the application
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $GLOBALS
	:og:type: article
	:og:description: This super-global is a PHP predefined variable, which holds a reference to every global variable in the application
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$globals.ini.html
	:og:locale: en


$GLOBALS
--------

This super-global is a PHP predefined variable, which holds a reference to every global variable in the application.

.. code-block:: php
   
   <?php
   
   // implicit global variable
   $aGlobalVariable = 1; 
   
   function foo() {
       echo $GLOBALS['aGlobalVariable'];
       $GLOBALS['aGlobalVariable'] = 2;
   }
   
   foo(); // displays 1
   echo aGlobalVariable; // 2
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.globals.php>`__
