.. _exception-chain:
.. _chaining-exception:
.. meta::
	:description:
		Chaining Exceptions: Chaining exception is throwing again a caught exception, with a new type, and with the previous exception.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Chaining Exceptions
	:twitter:description: Chaining Exceptions: Chaining exception is throwing again a caught exception, with a new type, and with the previous exception
	:twitter:creator: @exakat
	:og:title: Chaining Exceptions
	:og:type: article
	:og:description: Chaining exception is throwing again a caught exception, with a new type, and with the previous exception
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/exception-chain.ini.html
	:og:locale: en


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
