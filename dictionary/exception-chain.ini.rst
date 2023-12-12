.. _exception-chain:

Chaining Exceptions
-------------------

Chaining exception is throwing again a caught exception, with a new type, and with the previous exception. 

To provide the previous exception to a new exception, use the third parameter of the Exception constructor. Also, always provide a third argument to custom exceptions.

The previous exception is available with the `getPrevious()` method of the Exception class.


.. code-block:: php
   
   <?php
   
   class myException extends \Exception {
   	function __construct(string $message, $code, \Throwable $exception) {
   		parent::__construct($message, $code, $exception);
   	}
   }
   
   try {
   	doSomething();
   } catch(\Exception $e) {
   	// chaining exception
   	throw new myException('doSomething failed', 0, $e);
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Exception_chaining>`__

Related : :ref:`throw <throw>`, :ref:`Try-catch <try-catch>`, :ref:`Exception <exception>`
