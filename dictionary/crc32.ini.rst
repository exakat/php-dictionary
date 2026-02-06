.. _crc32:
.. meta::
	:description:
		Cyclic Redundancy Check 32-bit (CRC32): ``CRC32`` stands for Cyclic Redundancy Check 32-bit.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cyclic Redundancy Check 32-bit (CRC32)
	:twitter:description: Cyclic Redundancy Check 32-bit (CRC32): ``CRC32`` stands for Cyclic Redundancy Check 32-bit
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cyclic Redundancy Check 32-bit (CRC32)
	:og:type: article
	:og:description: ``CRC32`` stands for Cyclic Redundancy Check 32-bit
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/crc32.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Cyclic Redundancy Check 32-bit (CRC32)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 03 Feb 2026 06:33:57 +0000","dateModified":"Tue, 03 Feb 2026 06:33:57 +0000","description":"``CRC32`` stands for Cyclic Redundancy Check 32-bit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cyclic Redundancy Check 32-bit (CRC32).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cyclic Redundancy Check 32-bit (CRC32)
--------------------------------------

``CRC32`` stands for Cyclic Redundancy Check 32-bit. It is a hash function that produces a 32-bit (8-character hexadecimal) checksum or hash value from a given input, typically a sequence of bytes or a string. The primary purpose of CRC32 is error-checking and data integrity verification.

PHP calculates CRC32 values with the native ``crc32()`` function, and the ``hash()`` function, although with slight differences.

.. code-block:: php
   
   <?php
       
       $checksum = crc32("The quick brown fox jumped over the lazy dog.");
       printf("%u\n", $checksum);
       
       hash('crc32b', $str) === str_pad(dechex(crc32($str)), 8, '0', STR_PAD_LEFT);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.crc32.php>`__

See also https://stackoverflow.com/questions/40741707/php-hashcrc32-and-crc32-return-different-value
