.. _octal-integer:
.. _octal:
.. meta::
	:description:
		Octal Integer: Integers can be specified in octal (base 8) notation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Octal Integer
	:twitter:description: Octal Integer: Integers can be specified in octal (base 8) notation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Octal Integer
	:og:type: article
	:og:description: Integers can be specified in octal (base 8) notation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/octal-integer.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Octal Integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 21 Apr 2025 07:12:15 +0000","dateModified":"Mon, 21 Apr 2025 07:12:15 +0000","description":"Integers can be specified in octal (base 8) notation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Octal Integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Octal Integer
-------------

Integers can be specified in octal (base 8) notation. Octal integer syntax starts with ``0o`` (zero-o) and only contains digits from 0 to 7.

Initially, octal integers were formatted by simply starting with a initial 0. This features is still available, yet should be replaced with the less confusing syntax with ``0o``.


.. code-block:: php
   
   <?php
   
   // 12
   $octal = 0O14;
   $octal = 014;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.integer.php>`__

See also `PHP 8.1: Explicit Octal numeral notation <https://php.watch/versions/8.1/explicit-octal-notation>`_

Related : :ref:`integer <integer>`, :ref:`Binary Integer <binary-integer>`, :ref:`Hexadecimal Integer <hexadecimal-integer>`, :ref:`Leading Zero Means Octal <leading-zero-means-octal>`
