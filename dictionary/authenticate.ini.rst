.. _authenticate:
.. meta::
	:description:
		Authenticate: Functions declared with void as their return type must either omit their return statement altogether, or use an empty return statement.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Authenticate
	:twitter:description: Authenticate: Functions declared with void as their return type must either omit their return statement altogether, or use an empty return statement
	:twitter:creator: @exakat
	:og:title: Authenticate
	:og:type: article
	:og:description: Functions declared with void as their return type must either omit their return statement altogether, or use an empty return statement
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/authenticate.ini.html
	:og:locale: en


Authenticate
------------

Functions declared with void as their return type must either omit their return statement altogether, or use an empty return statement. null is not a valid return value for a void function. 

Void function may throw exceptions or return without a parameter.

Null and void are two different notions. 


.. code-block:: php
   
   <?php
   
   function foo(&$a) : void {
       $a++;
       
       // No return used here
   }
   
   $b = 0;
   foo($b);
   
   ?>


`Documentation <https://www.php.net/manual/en/migration71.new-features.php#migration71.new-features.void-functions>`__

Related : :ref:`Null <null>`

Added in PHP 8.0
