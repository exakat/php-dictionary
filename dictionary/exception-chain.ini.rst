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
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Chaining Exceptions
	:og:type: article
	:og:description: Chaining exception is throwing again a caught exception, with a new type, and with the previous exception
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/exception-chain.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Chaining Exceptions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Chaining exception is throwing again a caught exception, with a new type, and with the previous exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Chaining Exceptions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
