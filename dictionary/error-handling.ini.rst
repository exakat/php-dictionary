.. _error-handling:
.. meta::
	:description:
		Error Handling: Error handling is a broad concept that covers the different ways that PHP use to signal than an error occured.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Error Handling
	:twitter:description: Error Handling: Error handling is a broad concept that covers the different ways that PHP use to signal than an error occured
	:twitter:creator: @exakat
	:og:title: Error Handling
	:og:type: article
	:og:description: Error handling is a broad concept that covers the different ways that PHP use to signal than an error occured
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/error-handling.ini.html
	:og:locale: en


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
