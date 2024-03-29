.. _string-interpolation:

String Interpolation
--------------------

String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time. 

There are several ways to do interpolation : 

+ use double-quotes and a variable
+ use double-quotes and a property or a array with a valid index
+ use curly braces with a variable
+ use dollar and curly-braces : it calls the variable whose name is dynamically calculated in the curly braces. This syntax is deprecated in PHP 8.2 and later.

Double quotes and Heredoc notation allows string interpolation. On the other hand, single quote and nowdoc forbid interpolation. Then, escaping the special characters such as `$` and `{` with `\\\\` also disables interpolation locally.

Interpolation happens inside strings, while concatenation happens between strings.



.. code-block:: php
   
   <?php
   
   $world = 'world';
   // This is an interpolated string
   $string = "Hello $world";
   
   // This is not an interpolated string
   $string = 'Hollow $world';
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double>`__

Related : :ref:`String <string>`
