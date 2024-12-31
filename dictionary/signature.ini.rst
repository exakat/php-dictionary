.. _signature:
.. _method-signature:
.. meta::
	:description:
		Method Signature: The signature of a method or a function is the list of arguments and constraints that applies when calling it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method Signature
	:twitter:description: Method Signature: The signature of a method or a function is the list of arguments and constraints that applies when calling it
	:twitter:creator: @exakat
	:og:title: Method Signature
	:og:type: article
	:og:description: The signature of a method or a function is the list of arguments and constraints that applies when calling it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/signature.ini.html
	:og:locale: en


Method Signature
----------------

The signature of a method or a function is the list of arguments and constraints that applies when calling it. 

In its simplest form, signature of a method is its name, its argument's type and list, though modern syntax also include default values, visibilities, attributes and parameter names.


.. code-block:: php
   
   <?php
   
   function foo(string &$s = 'abc') {}
   
   ?>
   


`Documentation <https://www.php.net/manual/en/functions.arguments.php>`__
