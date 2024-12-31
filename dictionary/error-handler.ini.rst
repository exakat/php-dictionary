.. _error-handler:
.. meta::
	:description:
		Error Handler: The PHP error handler is a method that manages errors when they arise, instead of the default PHP handler.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Error Handler
	:twitter:description: Error Handler: The PHP error handler is a method that manages errors when they arise, instead of the default PHP handler
	:twitter:creator: @exakat
	:og:title: Error Handler
	:og:type: article
	:og:description: The PHP error handler is a method that manages errors when they arise, instead of the default PHP handler
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/error-handler.ini.html
	:og:locale: en


Error Handler
-------------

The PHP error handler is a method that manages errors when they arise, instead of the default PHP handler. 

The error handler is set with the set_error_handler() function. 

The error handler is convenient to translate errors, handle custom levels of errors, or convert errors to exceptions. 

There is a separate exception handler. 

.. code-block:: php
   
   <?php
   
   set_error_handler('customErrorHandler');
   
   function customErrorHandler($errno, $errstr, $errfile, $errline, array $errcontext)
   {
   	// Handles @ error suppression
   	if (error_reporting === 0)
   	{
   		return false;
   	}
   
   	throw new Exception($errstr, 0, $errno, $errfile, $errline);
   }
   ?>


`Documentation <https://www.php.net/manual/en/function.set-error-handler.php>`__

See also `Convert Errors to Exceptions in PHP <https://joshtronic.com/2013/07/15/convert-errors-to-exceptions/>`_, `Modern Error handling in PHP <https://netgen.io/blog/modern-error-handling-in-php>`_

Related : :ref:`PHP Handlers <handler>`, :ref:`Exception Handler <exception-handler>`, :ref:`Shutdown Function <shutdown-handler>`
