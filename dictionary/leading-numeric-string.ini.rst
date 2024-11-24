.. _leading-numeric-string:

Leading Numeric String
----------------------

A leading nummeric string is subset of numeric string, where the first characters are numbers (or the occasional + or -), and the rest of the string is non digits.

Leading numeric strings are used during conversion of strings into a string, although they are not used with the implicit integer conversion for arrays.

Leading numeric strings emit a warning when they drop the final characters.


.. code-block:: php
   
   <?php
   
   echo '123bc' + 1;
   // Warning: A non-numeric value encountered 
   // 124
   
   print_r(['123bc' =>1]);
   /*
     Array
     (
         [123bc] => 1
     )
   */
   ?>


`Documentation <https://www.php.net/manual/en/language.types.numeric-strings.php>`__

Related : :ref:`Numeric String <numeric-string>`
