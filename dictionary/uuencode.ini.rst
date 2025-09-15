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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"UUencode Encoding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 07:52:11 +0000","dateModified":"Sun, 14 Sep 2025 07:52:11 +0000","description":"uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/UUencode Encoding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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

See also https://inspector.dev/php-base64-encodedecode-best-practices-and-use-cases/, https://www.php.net/manual/en/function.convert-uuencode.php, https://mojoauth.com/binary-encoding-decoding/uuencoding-with-php/

Related : :ref:`Base 64 Encoding <base64>`
