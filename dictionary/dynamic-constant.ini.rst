.. _dynamic-constant:
.. meta::
	:description:
		Dynamic Constant: A constant is dynamic when its name is a piece of data, and is only access at execution time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Constant
	:twitter:description: Dynamic Constant: A constant is dynamic when its name is a piece of data, and is only access at execution time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dynamic Constant
	:og:type: article
	:og:description: A constant is dynamic when its name is a piece of data, and is only access at execution time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-constant.ini.html
	:og:locale: en


Dynamic Constant
----------------

A constant is dynamic when its name is a piece of data, and is only access at execution time. 

Calling a constant is done by using the constant() function. 

Sometimes, dynamic constants are also called variable constants. 

.. code-block:: php
   
   <?php
   
   const A = 1;
   
   $a = 'A';
   
   echo constant($a); // displays 1
   
   ?>


`Documentation <https://www.php.net/manual/en/function.constant.php>`__

Related : :ref:`Constants <constant>`
