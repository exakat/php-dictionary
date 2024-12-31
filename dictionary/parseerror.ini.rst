.. _parseerror:
.. meta::
	:description:
		ParseError: A ParseError is thrown when an error occurs while parsing PHP code, such as when eval() is called or when including non-compilable code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ParseError
	:twitter:description: ParseError: A ParseError is thrown when an error occurs while parsing PHP code, such as when eval() is called or when including non-compilable code
	:twitter:creator: @exakat
	:og:title: ParseError
	:og:type: article
	:og:description: A ParseError is thrown when an error occurs while parsing PHP code, such as when eval() is called or when including non-compilable code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/parseerror.ini.html
	:og:locale: en


ParseError
----------

A ParseError is thrown when an error occurs while parsing PHP code, such as when eval() is called or when including non-compilable code. 

.. code-block:: php
   
   <?php
   
   try {
   	eval (' A A ');
   } catch (ParseError $e) {
   	echo "This is not PHP code";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.parseerror.php>`__

Related : :ref:`Error <error>`, :ref:`Eval() <eval>`

Added in PHP 7.0+
