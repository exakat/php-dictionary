.. _typeerror:
.. meta::
	:description:
		TypeError: A type error refers to an error that occurs when there is a mismatch or violation of data types.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: TypeError
	:twitter:description: TypeError: A type error refers to an error that occurs when there is a mismatch or violation of data types
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: TypeError
	:og:type: article
	:og:description: A type error refers to an error that occurs when there is a mismatch or violation of data types
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/typeerror.ini.html
	:og:locale: en


TypeError
---------

A type error refers to an error that occurs when there is a mismatch or violation of data types. It typically happens when a function or operation is performed on a value of an incompatible type. PHP is a dynamically typed language, which means that variable types can change during runtime. However, certain operations and functions expect specific types, and if the actual type doesn't match the expected type, a type error may occur.

In other situations, PHP applies some type juggling, and automatically convert the type to a suitable type. This is often the case to preserve backward compatibility, when a transparent operation make sense. 


.. code-block:: php
   
   <?php
   
   function foo(int $i) {  }
   
   try {
       foo('5');
   } catch (\TypeError $t) {
       print 'Wrong type of argument sent to foo()';
   }
   
   // PHP convert the integer 12 to the string '12', to allow the concatenation to proceed. 
   $number = 12;
   print "There are ".$number." apple in the tree.";
   
   
   ?>


`Documentation <https://www.php.net/manual/en/class.typeerror.php>`__

Related : :ref:`Error <error>`

Added in PHP 7.0
