.. _crc32:

crc32
-----

crc32 stands for Cyclic Redundancy Check 32-bit. It is a hash function that produces a 32-bit (8-character hexadecimal) checksum or hash value from a given input, typically a sequence of bytes or a string. The primary purpose of CRC32 is error-checking and data integrity verification.

crc32() is also a native PHP function.

.. code-block:: php
   
   
   <?php
   $checksum = crc32("The quick brown fox jumped over the lazy dog.");
   printf("%u\n", $checksum);
   ?>


`Documentation <https://www.php.net/manual/en/function.crc32.php>`__
