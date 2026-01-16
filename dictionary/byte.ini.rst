.. _byte:
.. meta::
	:description:
		Byte: A byte is a unit of digital information storage that typically consists of 8 bits.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Byte
	:twitter:description: Byte: A byte is a unit of digital information storage that typically consists of 8 bits
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Byte
	:og:type: article
	:og:description: A byte is a unit of digital information storage that typically consists of 8 bits
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/byte.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Byte","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 13:38:50 +0000","dateModified":"Fri, 16 Jan 2026 13:38:50 +0000","description":"A byte is a unit of digital information storage that typically consists of 8 bits","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Byte.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Byte
----

A byte is a unit of digital information storage that typically consists of 8 bits. It is the fundamental building block for representing data in computers. A byte can store values ranging from 0 to 255 (in an unsigned 8-bit representation).

PHP uses bytes when manipulating strings. Bytes are characters, as long as the string uses ASCII representation, which is by default. Characters might be larger than a byte, and they become multi-bytes.

.. code-block:: php
   
   <?php
   
   $string = abcd;
   
   echo strlen($string); // 4
   
   ?>


Related : :ref:`Character <character>`
