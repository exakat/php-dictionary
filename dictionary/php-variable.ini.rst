.. _php-variable:

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
