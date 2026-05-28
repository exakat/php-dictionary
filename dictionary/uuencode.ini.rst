.. _uuencode:
.. meta::
	:description:
		UUencode Encoding: Uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: UUencode Encoding
	:twitter:description: UUencode Encoding: Uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: UUencode Encoding
	:og:type: article
	:og:description: Uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/uuencode.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"UUencode Encoding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:55 +0000","dateModified":"Thu, 28 May 2026 06:09:55 +0000","description":"Uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/UUencode Encoding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


UUencode Encoding
-----------------

Uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups. It encodes binary files into a text format that can be easily transmitted and decoded back into their original form.

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

See also `Php Base64 encode/decode – best practices and use cases <https://inspector.dev/php-base64-encodedecode-best-practices-and-use-cases/>`_, `convert_uuencode <https://www.php.net/manual/en/function.convert-uuencode.php>`_ and `Uuencoding with PHP <https://mojoauth.com/binary-encoding-decoding/uuencoding-with-php/>`_.

Related : :ref:`Base 64 Encoding <base64>`
