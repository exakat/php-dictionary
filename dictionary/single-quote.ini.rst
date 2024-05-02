.. _single-quote:

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
