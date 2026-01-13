.. _php_int_min:
.. meta::
	:description:
		PHP_INT_MIN: ``PHP_INT_MIN`` is the smallest integer that can be processed by PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP_INT_MIN
	:twitter:description: PHP_INT_MIN: ``PHP_INT_MIN`` is the smallest integer that can be processed by PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP_INT_MIN
	:og:type: article
	:og:description: ``PHP_INT_MIN`` is the smallest integer that can be processed by PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php_int_min.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"PHP_INT_MIN","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Sep 2025 05:09:41 +0000","dateModified":"Sat, 28 Jun 2025 14:19:26 +0000","description":"``PHP_INT_MIN`` is the smallest integer that can be processed by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP_INT_MIN.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHP_INT_MIN
-----------

``PHP_INT_MIN`` is the smallest integer that can be processed by PHP. 

Nowadays, ``PHP_INT_MIN`` is often -9223372036854775808. This value depends on the underlying machine: in particular, 64bits (machin and OS) have larger values of ``PHP_INT_MAX``, while 32bits have smaller. The hardware and the software have to be compatible to provide a larger value of `PHP_INT_MAX``.

Beyond ``PHP_INT_MIN``, integers are often converted to floats, and loose precision. 

There is also ``PHP_INT_MAX``, which is the positive version of ``PHP_INT_MIN``, minus one. 


.. code-block:: php
   
   <?php
   
   $max = PHP_INT_MIN;
   
   var_dump(is_int($max)); // true
   
   ?>


Related : :ref:`integer <integer>`, :ref:`Floating Point Numbers <float>`, :ref:`PHP_INT_MAX <php_int_max>`
