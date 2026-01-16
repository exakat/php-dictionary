.. _encoding:
.. meta::
	:description:
		Encoding: Encoding is a generic term, and is used in different places in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Encoding
	:twitter:description: Encoding: Encoding is a generic term, and is used in different places in PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Encoding
	:og:type: article
	:og:description: Encoding is a generic term, and is used in different places in PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/encoding.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Encoding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 18:29:07 +0000","dateModified":"Fri, 16 Jan 2026 18:29:07 +0000","description":"Encoding is a generic term, and is used in different places in PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Encoding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Encoding
--------

Encoding is a generic term, and is used in different places in PHP. 

+ text encoding, for manipulations with iconv or mbstring
+ declare encoding, with the declare keyword
+ http encoding, for input and output operations

Text encoding is the process of converting characters into a specific format that can be stored, processed, or transmitted by computers. Different encodings represent characters as a series of bytes. The default encoding for text is UTF-8, which as the most general usage. Many other encoding exist.

See also https://www.php.net/manual/en/mbstring.supported-encodings.php

Related : :ref:`declare Encoding <declare-encoding>`, :ref:`Text Encoding <text-encoding>`, :ref:`HTTP Encoding <http-encoding>`, :ref:`Iconv <iconv>`, :ref:`Multibyte String <mbstring>`
