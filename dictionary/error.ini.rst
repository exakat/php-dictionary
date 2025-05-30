.. _error:
.. meta::
	:description:
		Error: The ``Error`` class is a base class for all internal PHP error exceptions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Error
	:twitter:description: Error: The ``Error`` class is a base class for all internal PHP error exceptions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Error
	:og:type: article
	:og:description: The ``Error`` class is a base class for all internal PHP error exceptions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/error.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"The ``Error`` class is a base class for all internal PHP error exceptions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Error
-----

The ``Error`` class is a base class for all internal PHP error exceptions. It represents an error that occurs during the execution of PHP code. The Error class extends the built-in Throwable interface, making it possible to catch and handle these error exceptions using try-catch blocks.

The Error class has several child classes that represent specific types of errors. Some common child classes include:

+ ParseError: Represents a syntax error that occurs during parsing of PHP code.
+ TypeError: Represents a type-related error, such as passing an incorrect argument type to a function or method.
+ DivisionByZeroError: Represents an error that occurs when dividing a number by zero.
+ OutOfMemoryError: Represents an error that occurs when the PHP process runs out of memory.

See the example that demonstrates catching and handling a ``ParseError`` below. In the example, the eval() function is used to evaluate a string of PHP code. However, the code contains a syntax error with a missing semicolon. This results in a ParseError being thrown. We use a try-catch block to catch the ParseError exception, and then display the error message using the getMessage() method.

It's important to note that these errors are only thrown by internal PHP errors. User-generated errors (e.g., triggered using the trigger_error() function) are not instances of the Error class. Instead, they are represented by the ErrorException class, which extends Exception.

.. code-block:: php
   
   <?php
   
   try {
       eval('echo "Hello, World!"'); // Missing semicolon generates a ParseError
   } catch (ParseError $e) {
       echo 'Caught ParseError: ' . $e->getMessage();
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.error.php>`__

Related : :ref:`Exception <exception>`, :ref:`throw <throw>`, :ref:`Try-catch <try-catch>`, :ref:`ParseError <parseerror>`, :ref:`TypeError <typeerror>`, :ref:`DivisionByZeroError <divisionbyzeroerror>`, :ref:`Throwable <throwable>`, :ref:`Traversable <traversable>`, :ref:`UnhandledMatchError <unhandledmatcherror>`
