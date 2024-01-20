.. _php-variable:

PHP Variables
-------------

PHP provides a set of predefined variables. They may be super-global, and available in any context, such as ``$_GET``; they may also be classic variable, in the global scope, such as ``$argv``.

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
