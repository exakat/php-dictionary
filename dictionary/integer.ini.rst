.. _integer:
.. _int:

integer
-------

An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}. It is limited by PHP_INT_MIN (lower bound) and PHP_INT_MAX (upper bound). 

Integers have several syntaxes : they may be written in binary, octal, decimal, hexadecimal and with `_` as a separator. 


.. code-block:: php
   
   <?php
   
   $a = 1234;       // decimal number
   $a = 0123;       // octal number (equivalent to 83 decimal)
   $a = 0o123;      // octal number (as of PHP 8.1.0)
   $a = 0x1A;       // hexadecimal number (equivalent to 26 decimal)
   $a = 0b11111111; // binary number (equivalent to 255 decimal)
   $a = 1_234_567;  // decimal number (as of PHP 7.4.0)
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.integer.php>`__

Related : :ref:`Addition <addition>`
