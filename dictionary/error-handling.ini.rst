.. _error-handling:

Error Handling
--------------

Error handling is a broad concept that covers the different ways that PHP use to signal than an error occured. 

The main systems is the error reporting, and the exceptions. 

The error reporting is often associated with native errors, although it is possible to raise them and handle them with with error-handlers.

The exception system is based on the throw, try and catch keywords. 


.. code-block:: php
   
   <?php
   
   trigger_error(Cannot do this, E_USER_ERROR);
   
   try {
   	throw new Exception('Cannot do this');
   } catch (Exception $e) {
   	print $e->getMessage();
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/ref.errorfunc.php>`__

Related : :ref:`Exception <exception>`, 
