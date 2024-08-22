.. _leading-zero-means-octal:

Leading Zero Means Octal
------------------------

PHP integer syntax has some special formats for binary, octal and hexadecimal formats. In particular, an integer starting with 0 is in octal format. This leads to easy confusion, as the leading 0 is considered neutral.

In PHP 8.0, a new notation with an 0 was introduced : it makes the octal format just as explicit as the binary or the hexadecimal one. 

Octals are mainly used with the mkdir() function, and special math domains. 


.. code-block:: php
   
   <?php
   
   echo 017; // displays 15
   echo 0o17; // displays 15
   
   echo 17; // displays 17
   
   echo 0x17; // displays 23 (hexadecimal format)
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.integer.php>`__

See also `PHP 8.1: Explicit Octal numeral notation <https://php.watch/versions/8.1/explicit-octal-notation>`_

Added in PHP 8.1
