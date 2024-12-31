.. _exception-handler:
.. meta::
	:description:
		Exception Handler: The exception handler is a default or custom function, which is called once an exception has exhausted all available try-catch blocks.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Exception Handler
	:twitter:description: Exception Handler: The exception handler is a default or custom function, which is called once an exception has exhausted all available try-catch blocks
	:twitter:creator: @exakat
	:og:title: Exception Handler
	:og:type: article
	:og:description: The exception handler is a default or custom function, which is called once an exception has exhausted all available try-catch blocks
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/exception-handler.ini.html
	:og:locale: en


Exception Handler
-----------------

The exception handler is a default or custom function, which is called once an exception has exhausted all available try-catch blocks.

The execution stops once the handler has been called : as such, it is possible to log or display information related to debugging. 

The exception handler is different from the try/catch block : the latter allows the execution to carry on, when the exception is processed.



.. code-block:: php
   
   
   <?php
   function exception_handler(Throwable $exception) {
     echo "Uncaught exception: " , $exception->getMessage(), "\n";
   }
   
   set_exception_handler('exception_handler');
   
   throw new Exception('Uncaught Exception');
   echo "Not Executed\n";
   ?>
   


`Documentation <https://www.php.net/manual/en/function.set-exception-handler.php>`__

Related : :ref:`Try-catch <try-catch>`
