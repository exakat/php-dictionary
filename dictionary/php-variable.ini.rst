.. _php-variable:
.. meta::
	:description:
		PHP Variables: PHP provides a set of predefined variables.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Variables
	:twitter:description: PHP Variables: PHP provides a set of predefined variables
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Variables
	:og:type: article
	:og:description: PHP provides a set of predefined variables
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-variable.ini.html
	:og:locale: en


PHP Variables
-------------

PHP provides a set of predefined variables. They may be super-global, and available in any context, such as ``$_GET``; they may also be classic variable, in the global scope, such as ``$argv``.

The set of predefined variables changes with PHP versions: for example, in PHP 8.0, ``$phperrormsg`` was definitely removed. 

The set of predefined variables also depended on PHP directives. ``$HTTP_RAW_POST_DATA`` depended upon the ``always_populate_raw_post_data`` directive.


.. code-block:: php
   
   <?php
   
   print_r($_GET);
   print_r($argv);
   print_r($GLOBALS);
   
   function foo() {
       global $argc;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.php>`__

Related : :ref:`Superglobal Variables <super-global>`, :ref:`Variables <variable>`, :ref:`Native <native>`
