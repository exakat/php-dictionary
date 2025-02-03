.. _utf8:
.. _utf-8:
.. meta::
	:description:
		UTF-8: UTF-8 is a character encoding standard.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: UTF-8
	:twitter:description: UTF-8: UTF-8 is a character encoding standard
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: UTF-8
	:og:type: article
	:og:description: UTF-8 is a character encoding standard
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/utf8.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"UTF-8","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"UTF-8 is a character encoding standard","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/UTF-8.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


UTF-8
-----

UTF-8 is a character encoding standard. It is defined by the Unicode Standard. The acronym stands for ``Unicode Transformation Format – 8-bit``. 

PHP handles the UTF-8 encoding natively: at input time, with the ``input_encoding`` directive; at output time, with the ``output_encoding`` and internally with the ``internal_encoding``. All of them can use independant values, yet they all default to ``default_charset``, which uses ``UTF-8`` as default value.

For other manipulations, such as converting sources such as file or databases content to and from UTF-8, PHP relies on ``mbstring`` and ``iconv`` libraries.

Special functions, such as ``utf8_encode`` and ``utf8_decode()`` are deprecated since PHP 8.2, and should be be used.


`Documentation <https://en.wikipedia.org/wiki/UTF-8>`__
