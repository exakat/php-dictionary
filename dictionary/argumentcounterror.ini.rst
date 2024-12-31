.. _argumentcounterror:
.. meta::
	:description:
		ArgumentCountError: ArgumentCountError is thrown when too few arguments are passed to a user-defined or PHP native function or method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ArgumentCountError
	:twitter:description: ArgumentCountError: ArgumentCountError is thrown when too few arguments are passed to a user-defined or PHP native function or method
	:twitter:creator: @exakat
	:og:title: ArgumentCountError
	:og:type: article
	:og:description: ArgumentCountError is thrown when too few arguments are passed to a user-defined or PHP native function or method
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/argumentcounterror.ini.html
	:og:locale: en


ArgumentCountError
------------------

ArgumentCountError is thrown when too few arguments are passed to a user-defined or PHP native function or method. This is an error, not an exception.

No exception is raised for extra parameters, as those may still be processed by the method itself. 


.. code-block:: php
   
   <?php
   
   function foo($a) {}
   
   // No error is raised here
   foo(1,2);
   
   // ArgumentCountError is catchable
   try {
       foo();
   } catch (ArgumentCountError) {
       print 'No enough parameters passed.';
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.argumentcounterror.php>`__

Related : :ref:`throw <throw>`, :ref:`Try-catch <try-catch>`
