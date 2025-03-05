.. _php_int_max:
.. meta::
	:description:
		PHP_INT_MAX: ``PHP_INT_MAX`` is the largest integer that can be processed by PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP_INT_MAX
	:twitter:description: PHP_INT_MAX: ``PHP_INT_MAX`` is the largest integer that can be processed by PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP_INT_MAX
	:og:type: article
	:og:description: ``PHP_INT_MAX`` is the largest integer that can be processed by PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php_int_max.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"PHP_INT_MAX","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"``PHP_INT_MAX`` is the largest integer that can be processed by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP_INT_MAX.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHP_INT_MAX
-----------

``PHP_INT_MAX`` is the largest integer that can be processed by PHP. 

Nowadays, ``PHP_INT_MAX`` is often 9223372036854775807. This value depends on the underlying machine: in particular, 64bits (machin and OS) have larger values of ``PHP_INT_MAX``, while 32bits have smaller. The hardware and the software have to be compatible to provide a larger value of `PHP_INT_MAX``.

Beyond ``PHP_INT_MAX``, integers are often converted to floats, and loose precision. 

There is also ``PHP_INT_MIN``, which is the negative version of ``PHP_INT_MAX``, minus one. 


.. code-block:: php
   
   <?php
   
   $max = PHP_INT_MAX;
   
   var_dump(is_int($max)); // true
   
   ?>


Related : :ref:`integer <integer>`, :ref:`Floating Point Numbers <float>`
