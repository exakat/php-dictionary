.. _crc32:
.. meta::
	:description:
		crc32: crc32 stands for Cyclic Redundancy Check 32-bit.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: crc32
	:twitter:description: crc32: crc32 stands for Cyclic Redundancy Check 32-bit
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: crc32
	:og:type: article
	:og:description: crc32 stands for Cyclic Redundancy Check 32-bit
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/crc32.ini.html
	:og:locale: en


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
