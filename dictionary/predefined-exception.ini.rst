.. _predefined-exception:
.. meta::
	:description:
		PHP Predefined Exception: The predefined exceptions are the exceptions that are built-in the PHP engine.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Predefined Exception
	:twitter:description: PHP Predefined Exception: The predefined exceptions are the exceptions that are built-in the PHP engine
	:twitter:creator: @exakat
	:og:title: PHP Predefined Exception
	:og:type: article
	:og:description: The predefined exceptions are the exceptions that are built-in the PHP engine
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/predefined-exception.ini.html
	:og:locale: en


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
