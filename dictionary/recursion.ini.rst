.. _recursion:
.. _recursive:
.. meta::
	:description:
		Recursion: Recursion in PHP is a method or a function, which calls itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Recursion
	:twitter:description: Recursion: Recursion in PHP is a method or a function, which calls itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Recursion
	:og:type: article
	:og:description: Recursion in PHP is a method or a function, which calls itself
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/recursion.ini.html
	:og:locale: en


Recursion
---------

Recursion in PHP is a method or a function, which calls itself. 

While the method calls itself, it also must have branch and not call itself : otherwise, the call will never end.

Functions, methods, closures and arrowfunctions may be recursive.

Recursion is an abstract notion : it is also used in the PHP name itself. PHP : Hypertext Preprocessor.


.. code-block:: php
   
   <?php
   
   function factorial(int $number) { 
       if ($number < 2) { 
           return 1; 
       }
   
       return ($number * factorial($number - 1)); 
   }
   
   // recursive closure
   $factorial = function( $n ) use ( &$factorial ) {
       if( $n == 1 ) return 1;
       return $factorial( $n - 1 ) * $n;
   };
   
   ?>


See also `Recursion in PHP - when to use and how <https://phpenthusiast.com/blog/recursion-in-php>`_

Related : :ref:`Functions <function>`
