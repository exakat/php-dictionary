.. _idempotent:

Idempotent
----------

Idempotent is said of an operation, which yields always the same result after the first call.  In other words, repeating the operation does not produce a different result beyond the initial application.

This is the case of strtolower() and strtoupper(): once the string has been made lower case (resp. upper case), calling the same function again on the string will not change the result.


.. code-block:: php
   
   <?php
   
   $string = aBC;
   
   $string1 = strtolower($string); // abc
   $string2 = strtolower($string2); // abc
   $string3 = strtolower($string3); // abc
   $string4 = strtolower($string4); // abc
   // ... 
   
   ?>

