.. _badfunctioncallexception:
.. meta::
	:description:
		BadFunctioncallException: The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: BadFunctioncallException
	:twitter:description: BadFunctioncallException: The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing
	:twitter:creator: @exakat
	:og:title: BadFunctioncallException
	:og:type: article
	:og:description: The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/badfunctioncallexception.ini.html
	:og:locale: en


BadFunctioncallException
------------------------

The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing.

``BadFunctioncallException`` are defined by the SPL extension. It is not natively used. 

.. code-block:: php
   
   <?php
   
   function foo(string $s) {
       if (empty($s)) {
          throw new \UnexpectedValueException('Foo() expects a non-empty string');
       }
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.lengthexception.php>`__

Related : :ref:`Exception <exception>`

Added in PHP 5.1
