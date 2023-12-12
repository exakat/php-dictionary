.. _concatenation:
.. _concat:

Concatenation
-------------

Concatenation is the PHP feature that appends two strings together, to make a third, longer one.

Concatenation is also achieved with interpolation, inside a string; by calling echo, multiple times or with multiple arguments; by using the join() function.

Concatenation is done with the dot operator. 



.. code-block:: php
   
   <?php
   $a = "world";
   $b = "Hello ";
   echo $b.$a;
   // displays Hello world
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.string.php>`__

Related : :ref:`String <string>`, :ref:`Interpolation <interpolation>`, :ref:`Heredocs <heredoc>`
