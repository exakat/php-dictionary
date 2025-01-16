.. _uuencode:
.. meta::
	:description:
		UUencode Encoding: uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: UUencode Encoding
	:twitter:description: UUencode Encoding: uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: UUencode Encoding
	:og:type: article
	:og:description: uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/uuencode.ini.html
	:og:locale: en


UUencode Encoding
-----------------

uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups. It encodes binary files into a text format that can be easily transmitted and decoded back into their original form.

.. code-block:: php
   
   <?php
   
   $phpString = 'Well, I can say: 你好！' ;
   
   $encoded = convert_uuencode($phpString);
   print $encoded.PHP_EOL;
   //:5V5L;"P@22!C86X@<V%Y.B#DO:#EI;WOO($`
   //`
   
   $decoded = convert_uudecode($encoded);
   print $decoded.PHP_EOL;
   //Well, I can say: 你好！
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Uuencoding>`__

See also https://inspector.dev/php-base64-encodedecode-best-practices-and-use-cases/, https://www.php.net/manual/en/function.convert-uuencode.php

Related : :ref:`Base 64 Encoding <base64>`
