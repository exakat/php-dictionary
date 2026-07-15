.. _signed-integer:
.. meta::
	:description:
		Signed Integer: PHP integers are always signed: they use one bit to represent the sign, allowing both negative and positive values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Signed Integer
	:twitter:description: Signed Integer: PHP integers are always signed: they use one bit to represent the sign, allowing both negative and positive values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Signed Integer
	:og:type: article
	:og:description: PHP integers are always signed: they use one bit to represent the sign, allowing both negative and positive values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/signed-integer.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/signed-integer.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/signed-integer.ini.html","name":"Signed Integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 18:58:46 +0000","dateModified":"Mon, 06 Jul 2026 18:58:46 +0000","description":"PHP integers are always signed: they use one bit to represent the sign, allowing both negative and positive values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Signed Integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Signed Integer
--------------

PHP integers are always signed: they use one bit to represent the sign, allowing both negative and positive values. PHP does not support unsigned integers.

On a 64-bit platform, a PHP integer spans from ``PHP_INT_MIN``, aka -9,223,372,036,854,775,808, or -2^63 to ``PHP_INT_MAX``, aka 9,223,372,036,854,775,807, or 2^63 - 1. On a 32-bit platform, the range is -2^31 to 2^31 - 1.

When an operation would produce a value outside that range, PHP silently promotes the result to a ``float``, which has a larger range but reduced precision for large integers.

Languages such as C or Rust distinguish signed integers ``int``, ``i64``)from unsigned integers ``uint``, ``u64``. PHP makes no such distinction: all integers are signed.

.. code-block:: php
   
   <?php
   
       $max = PHP_INT_MAX; // 9223372036854775807
       $min = PHP_INT_MIN; // -9223372036854775808
       
       // Overflow promotes to float silently
       $overflow = PHP_INT_MAX + 1; // float(9.2233720368548E+18)
       
       var_dump($overflow); // float, not integer
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.integer.php>`__

Related : :ref:`integer <integer>`, :ref:`Sign <sign>`, :ref:`Positive Integer <positive-integer>`, :ref:`PHP_INT_MAX <php_int_max>`, :ref:`PHP_INT_MIN <php_int_min>`, :ref:`Floating Point Numbers <float>`, :ref:`Overflow <overflow>`
