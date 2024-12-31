.. _literal-types:
.. meta::
	:description:
		Literal Types: Literal types are type which not only check the type of a value but also the value itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Literal Types
	:twitter:description: Literal Types: Literal types are type which not only check the type of a value but also the value itself
	:twitter:creator: @exakat
	:og:title: Literal Types
	:og:type: article
	:og:description: Literal types are type which not only check the type of a value but also the value itself
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/literal-types.ini.html
	:og:locale: en


Literal Types
-------------

Literal types are type which not only check the type of a value but also the value itself. PHP has support for two literal types: false as of PHP 8.0.0, and true as of PHP 8.2.0. 

.. code-block:: php
   
   <?php
   
   // bool is a type
   // false is a literal type : a bool, which value is false
   function foo(bool $a) : false {
   	return false;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.literal.php>`__

Related : :ref:`Scalar Types <scalar-type>`, :ref:`Union Type <union-type>`

Added in PHP 8.0
