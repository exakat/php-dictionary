.. _hexadecimal-integer:
.. _hexadecimal:

Hexadecimal Integer
-------------------

Hexadecimal integers are integers with an hexadecimal representation. Their value is the same, yet their are written in a different way than the common decimal. 

Hexadecimal has native support in PHP with the ``0x123`` format. There is also support for hexadecimal characters, inside double-quote strings, with the ``\xhh`` syntax.

There are functions to convert from and to hexadecimal format : hexdec(), dechex() and base_convert(), from ten to sixteen.

PHP also has special syntax for binary and octal numbers. 



.. code-block:: php
   
   <?php
   
       $twenty    = 0x14;
       $twentyToo = 20;
       
       $i = "\x69"; // i is the 105 ASCII code
       $i = 'i';
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.integer.php>`__

Related : :ref:`Binary Integer <binary-integer>`, :ref:`Octal Integer <octal-integer>`
