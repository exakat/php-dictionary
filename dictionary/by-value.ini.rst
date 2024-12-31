.. _by-value:
.. meta::
	:description:
		Passing By Value: When calling a method, or returning from it, data may be passed by value or by reference.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Passing By Value
	:twitter:description: Passing By Value: When calling a method, or returning from it, data may be passed by value or by reference
	:twitter:creator: @exakat
	:og:title: Passing By Value
	:og:type: article
	:og:description: When calling a method, or returning from it, data may be passed by value or by reference
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/by-value.ini.html
	:og:locale: en


Passing By Value
----------------

When calling a method, or returning from it, data may be passed by value or by reference. 

By value, a copy of the data is passed : any modification on that value inside the method will not be reflected in the original value. 

This is the default way of passing data to methods : the alternative way is to use by reference. 

Passing by value may be memory-intensive when passing a large array. This is not the case for objects, which are always passed by reference.

Returned value are passed back to the calling context with the same rule than for parameters.



.. code-block:: php
   
   <?php
   
   $a = 0;
   foo($a);  // displays 1
   print $a; // displays 0
   
   function foo($a) {
       ++$a;
       echo $a;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php>`__

Related : :ref:`Passing By Reference <by-reference>`
