.. _curly-bracket:

Curly Brackets
--------------

Curly brackets have different usage in PHP:

+ Delimit a block of code 
+ Represents a variable delimiter inside string
+ It used to identify a single byte in a string, like an array

They are also called curly braces.



.. code-block:: php
   
   <?php
   
   for($a = 1; $a < 10; ++$i) {
   	// block
   	
   	echo "{$var}s";
   }
   
   // old syntax: it used to be the second character in the string
   // modern syntax : use angular brackets
   echo $string{1};
   
   ?>


See also `PHP Curly Braces: How and When to Use it? <https://schoolsofweb.com/php-curly-braces-how-and-when-to-use-it/>`_

Related : :ref:`Block <block>`, :ref:`String <string>`
