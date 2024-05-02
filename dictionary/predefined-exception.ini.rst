.. _predefined-exception:

PHP Predefined Exception
------------------------

The predefined exceptions are the exceptions that are built-in the PHP engine. They are always available, and change from version to version.

.. code-block:: php
   
   <?php
   
   try {
   	throw new RuntimeException('one error!');
   } catch (Exception $e) {
   	print "Caught an exception of type ".get_class($e)è;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.exceptions.php>`__

Related : :ref:`throw <throw>`, :ref:`Try-catch <try-catch>`, :ref:`Exception <exception>`, :ref:`Native <built-in>`
