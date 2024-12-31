.. _invalidargumentexception:
.. meta::
	:description:
		InvalidArgumentException: Exception thrown if an argument is not of the expected type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: InvalidArgumentException
	:twitter:description: InvalidArgumentException: Exception thrown if an argument is not of the expected type
	:twitter:creator: @exakat
	:og:title: InvalidArgumentException
	:og:type: article
	:og:description: Exception thrown if an argument is not of the expected type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/invalidargumentexception.ini.html
	:og:locale: en


InvalidArgumentException
------------------------

Exception thrown if an argument is not of the expected type. It is a LogicException, and it may be thrown when using SPL classes.

.. code-block:: php
   
   <?php
   
   function foo(string $a) {}
   
   // OK
   foo("abc");
   
   // KO : invalid argument
   foo(12);
   
   ?>


`Documentation <https://www.php.net/manual/en/class.invalidargumentexception.php>`__

Related : :ref:`LogicException <logicexception>`
