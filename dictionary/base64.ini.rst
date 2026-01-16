.. _base64:
.. meta::
	:description:
		Base 64 Encoding: Base64 is a binary-to-text encoding scheme that represents binary data in an ASCII string format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Base 64 Encoding
	:twitter:description: Base 64 Encoding: Base64 is a binary-to-text encoding scheme that represents binary data in an ASCII string format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Base 64 Encoding
	:og:type: article
	:og:description: Base64 is a binary-to-text encoding scheme that represents binary data in an ASCII string format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/base64.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Base 64 Encoding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 13:38:50 +0000","dateModified":"Fri, 16 Jan 2026 13:38:50 +0000","description":"Base64 is a binary-to-text encoding scheme that represents binary data in an ASCII string format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Base 64 Encoding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Base 64 Encoding
----------------

Base64 is a binary-to-text encoding scheme that represents binary data in an ASCII string format. It is often used to encode data so it can be safely transmitted over text-based systems such as email, URLs, or JSON, which may not handle binary data well.

Base64 is used to prevent degradation of the message during the transmission: the data is not corrupted by the journey on Internet.

Base64 is not encryption. It does not secure the data: there is no protection against reading by a third party, unless they are not aware of Base64 itself.

Base64 is not related to the notion of base, in math (such as base 10, binary, octal or hexadecimal).

.. code-block:: php
   
   <?php
   
   $phpString = 'Well, I can say: 你好！' ;
   
   $encoded = base64_encode($phpString);
   print $encoded.PHP_EOL;
   
   $decoded = base64_decode($encoded);
   print $decoded.PHP_EOL;
   
   ?>


`Documentation <https://www.php.net/manual/en/function.base64-encode.php>`__

See also https://inspector.dev/php-base64-encodedecode-best-practices-and-use-cases/

Related : :ref:`UUencode Encoding <uuencode>`
