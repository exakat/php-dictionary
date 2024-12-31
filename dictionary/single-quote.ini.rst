.. _single-quote:
.. meta::
	:description:
		Single Quotes Strings: Single quoted strings are strings that include a literal value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Single Quotes Strings
	:twitter:description: Single Quotes Strings: Single quoted strings are strings that include a literal value
	:twitter:creator: @exakat
	:og:title: Single Quotes Strings
	:og:type: article
	:og:description: Single quoted strings are strings that include a literal value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/single-quote.ini.html
	:og:locale: en


Single Quotes Strings
---------------------

Single quoted strings are strings that include a literal value. 

This is an simpler version of the double-quoted strings. 

It is possible to include variables `$var`, single-dimension arrays `$array[1]` or `$array[index]`, and single-dereferencing object members `$object->member`. More complex expressions require usage of curly braces `{$}`, or the usage of the dot operator.

Double quoted strings use the anti-slash `\` to escape special characters, such as the anti-slash and the `$` sign.


.. code-block:: php
   
   <?php
   
   // single quoted string : all literal values
   $name = 'elephpant loves $signs.'; 
   
   // double quoted string : variable value will be replaced at execution time.
   $greeting = "Hello! $name"; 
   
   // identical to
   $greeting = 'Hello! '.$name; 
   
   
   ?>


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.disable-functions>`__

Related : :ref:`Double Quotes Strings <double-quote>`, :ref:`Interpolation <interpolation>`, :ref:`String <string>`
