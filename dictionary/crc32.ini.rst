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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"crc32","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"crc32 stands for Cyclic Redundancy Check 32-bit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/crc32.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
